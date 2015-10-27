<?php
/**
 * Created by PhpStorm.
 * User: JRMD
 * Date: 15/05/2015
 * Time: 20:05
 */

namespace Aet\AnnuaireBundle\Search;


use ZendSearch\Lucene\Analysis\TokenFilter\TokenFilterInterface;
use Aet\AnnuaireBundle\Helpers\SearchHelper;

class AsciiFoldingFilter implements TokenFilterInterface
{
    /**
     * Normalize Token or remove it (if null is returned)
     *
     * @param Zend_Search_Lucene_Analysis_Token $srcToken
     * @return Zend_Search_Lucene_Analysis_Token
     */
    public function normalize(\ZendSearch\Lucene\Analysis\Token $srcToken)
    {
        $newToken = new \ZendSearch\Lucene\Analysis\Token(
            SearchHelper::utf8_to_ascii( $srcToken->getTermText() ),
            $srcToken->getStartOffset(),
            $srcToken->getEndOffset());

        $newToken->setPositionIncrement($srcToken->getPositionIncrement());

        return $newToken;
    }


}