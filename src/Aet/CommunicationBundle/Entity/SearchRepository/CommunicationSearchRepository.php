<?php
/**
 * Created by PhpStorm.
 * User: JRMD
 * Date: 02/05/2015
 * Time: 21:57
 */

namespace Aet\CommunicationBundle\Entity\SearchRepository;

use FOS\ElasticaBundle\Repository;

class CommunicationSearchRepository extends Repository
{

    public function AetCommunicationSearch($searchText)
    {
        //$finder = $this->container->get('fos_elastica.finder.aetsite.aetusers');
        $baseQuery = new \Elastica\Query();
        $boolQuery = new \Elastica\Query\Bool();


    /*
        if ((strlen($searchText)==4) && ctype_digit($searchText)) {
            // Your Convert logic

            $boolFilter = new \Elastica\Filter\Bool();

            $from = new \DateTime('01/01/'.$searchText);
            $to = new \DateTime('12/31/'.$searchText);
            $boolFilter->addMust(new \Elastica\Filter\Range('promotion',
                array(
                    'gte' => \Elastica\Util::convertDate($from->getTimestamp()),
                    'lte' => \Elastica\Util::convertDate($to->getTimestamp())
                )
            ));

            $baseQuery->setPostFilter($boolFilter);
        }
        else{*/
            $fieldQuery = new \Elastica\Query\Match();
            $fieldQuery->setFieldQuery('title', $searchText);
            //$fieldQuery->setFieldParam('title', 'analyzer', 'custom_search_analyzer');
            $boolQuery->addShould($fieldQuery);

            $field1Query = new \Elastica\Query\Match();
            $field1Query->setFieldQuery('shortDesc', $searchText);
            $boolQuery->addShould($field1Query);

            $field1Query = new \Elastica\Query\Match();
            $field1Query->setFieldQuery('body', $searchText);
            $boolQuery->addShould($field1Query);

            $baseQuery->setQuery($boolQuery) ;
        //}


        // Option 1. Returns all users who have example.net in any of their mapped fields
        return $this->find($baseQuery);

    }

}