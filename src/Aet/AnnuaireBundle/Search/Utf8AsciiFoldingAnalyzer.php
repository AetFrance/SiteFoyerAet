<?php
/**
 * Created by PhpStorm.
 * User: JRMD
 * Date: 16/05/2015
 * Time: 14:30
 */

namespace Aet\AnnuaireBundle\Search;

use ZendSearch\Lucene\Analysis;
use ZendSearch\Lucene\Analysis\Analyzer\Common;
use ZendSearch\Lucene\Analysis\TokenFilter;

class Utf8AsciiFoldingAnalyzer extends Common\Utf8Num\CaseInsensitive
{

    private $_position;

    /**
     * Current binary position in an UTF-8 stream
     *
     * @var integer
     */
    private $_bytePosition;

    private $_tokenBuffer;
    private $_minWordSize;
    private $_maxNGramSize;
    private $_minNGramSize;


    public function __construct()
    {
        parent::__construct();

        $this->addFilter(new AsciiFoldingFilter());
        $this->_minNGramSize = 2;
        $this->_minWordSize = $this->_minNGramSize;
    }

    protected function _fillTokenBuffer(Analysis\Token $token, $startPos, $endPos)
    {
        $matchedWord = $token->getTermText();
        //echo "matchedWord: $matchedWord<br>";
        // short words and numbers should not be tokenized to n-grams
        if (iconv_strlen($matchedWord, 'UTF-8') <= $this->_minWordSize || is_numeric($matchedWord)) {
            $this->_tokenBuffer[]= new Analysis\Token($matchedWord, $startPos, $endPos);
        } else {
            // generate n-grams and fill the tokenBuffer with Zend_Search_Lucene_Analysis_Token
            $matchedWord = '_' . $matchedWord . '_';
            $length = iconv_strlen($matchedWord, 'UTF-8');
            for ($pos = 0; $pos < $length; $pos++) {
                for ($chars = 0; $chars < $this->_maxNGramSize; $chars++) {
                    if (($pos + $chars) < $length) {
                        //Prendre 'substr' le jour 'mb_substr' ne marche pas
                        $nGram = mb_substr($matchedWord, $pos, $chars + 1, 'UTF-8');

                        if (iconv_strlen($nGram, 'UTF-8') >= $this->_minNGramSize) {
                            $this->_tokenBuffer[]= new Analysis\Token(
                                $nGram, $startPos, $endPos
                            );
                            //echo "n-gram: $nGram<br>";
                        }
                    }
                }
            }
        }
    }

    public function reset()
    {
        $this->_position     = 0;
        $this->_bytePosition = 0;

        // convert input into UTF-8
        if (strcasecmp($this->_encoding, 'utf8' ) != 0  &&
            strcasecmp($this->_encoding, 'utf-8') != 0 ) {
            $this->_input = iconv($this->_encoding, 'UTF-8', $this->_input);
            $this->_encoding = 'UTF-8';
        }
    }

    public function nextToken()
    {


        if ($this->_input === null) {
            $this->_tokenBuffer = array();
            return null;
        }
        // if there are n-grams in tokenBuffer, return next one
        if (sizeof($this->_tokenBuffer) > 0) {

            $token = array_shift($this->_tokenBuffer);

            if (sizeof($this->_tokenBuffer) === 0)
            {
                $token->setPositionIncrement(1);
            }
            else{
                $token->setPositionIncrement(0);
            }
            // if not ...
        } else {

            do {

                if (!preg_match('/[\p{L}\p{N}]+/u', $this->_input, $match, PREG_OFFSET_CAPTURE, $this->_bytePosition)) {
                    $this->_tokenBuffer = array();
                    return null;
                    // It covers both cases a) there are no matches (preg_match(...) === 0)
                    // b) error occured (preg_match(...) === FALSE)
                }

                // matched string
                $matchedWord = $match[0][0];

                // binary position of the matched word in the input stream
                $binStartPos = $match[0][1];

                $this->_maxNGramSize = iconv_strlen($matchedWord, 'UTF-8');

                // character position of the matched word in the input stream
                $startPos = $this->_position + iconv_strlen(substr(
                        $this->_input, $this->_bytePosition, $binStartPos - $this->_bytePosition), 'UTF-8'
                    );

                // character postion of the end of matched word in the input stream
                $endPos = $startPos + iconv_strlen($matchedWord, 'UTF-8');

                $this->_bytePosition = $binStartPos + strlen($matchedWord);
                $this->_position     = $endPos;

                $token = $this->normalize(
                    new Analysis\Token($matchedWord, $startPos, $endPos)
                );

                if (!is_null($token)) {
                    // fill tokenBuffer with n-grams, use the same position for all generated n-grams
                    // but i don't know if that is the right way
                    $this->_fillTokenBuffer($token, $startPos, $endPos);


                    // return first one
                    $token = array_shift($this->_tokenBuffer);

                    if (sizeof($this->_tokenBuffer) === 0)
                    {
                        $token->setPositionIncrement(1);
                    }
                    else{
                        $token->setPositionIncrement(0);
                    }

                }

            } while ($token === null); // try again if token is skipped
        }

        return $token;
    }

}