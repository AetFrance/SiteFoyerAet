<?php
/**
 * Created by PhpStorm.
 * User: JRMD
 * Date: 16/05/2015
 * Time: 14:30
 */

namespace Aet\AnnuaireBundle\Search;

use ZendSearch\Lucene\Analysis\Analyzer\Common;
use ZendSearch\Lucene\Analysis\TokenFilter;

class Utf8AsciiFoldingAnalyzer extends Common\Utf8Num\CaseInsensitive
{

    public function __construct()
    {
        parent::__construct();

        $this->addFilter(new AsciiFoldingFilter());
    }

}