<?php
/**
 * Created by PhpStorm.
 * User: JRMD
 * Date: 16/05/2015
 * Time: 22:28
 */

namespace Aet\AnnuaireBundle\Helpers;

class SearchHelper {

    public static function utf8_to_ascii($text) {

        setlocale(LC_CTYPE, 'fr_FR.utf8');

        $strToBeReturned = "";
        if (is_string($text)) {
            // Includes combinations of characters that present as a single glyph
            $strToBeReturned = preg_replace_callback('/\X/u', __METHOD__, $text);
            //$strToBeReturned = iconv("UTF-8", "ASCII//IGNORE//TRANSLIT", $text);
        }
        elseif (is_array($text) && count($text) == 1 && is_string($text[0])) {
            // IGNORE characters that can't be TRANSLITerated to ASCII
            $strToBeReturned = iconv("UTF-8", "ASCII//IGNORE//TRANSLIT", $text[0]);
            // The documentation says that iconv() returns false on failure but it returns ''
            if ($strToBeReturned === '' || !is_string($strToBeReturned)) {
                $strToBeReturned = '?';
            }
            elseif (preg_match('/\w/', $strToBeReturned)) {            // If the text contains any letters...
                $strToBeReturned = preg_replace('/\W+/', '', $strToBeReturned);   // ...then remove all non-letters
            }
        }
        else {  // $text was not a string
            $strToBeReturned = '';
        }
        return $strToBeReturned;
    }
}