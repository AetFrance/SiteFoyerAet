<?php
/**
 * Created by PhpStorm.
 * User: JRMD
 * Date: 02/05/2015
 * Time: 01:59
 */

namespace Aet\AnnuaireBundle\Entity\SearchRepository;

use FOS\ElasticaBundle\Repository;

class UserRepository extends Repository
{

    public function AetUserSearch($searchText)
    {
        //$finder = $this->container->get('fos_elastica.finder.aetsite.aetusers');
        $baseQuery = new \Elastica\Query();
        $boolQuery = new \Elastica\Query\Bool();



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
        else{
            $fieldQuery = new \Elastica\Query\Match();
            $fieldQuery->setFieldQuery('firstname', $searchText);
            //$fieldQuery->setFieldParam('title', 'analyzer', 'custom_search_analyzer');
            $boolQuery->addShould($fieldQuery);

            $field1Query = new \Elastica\Query\Match();
            $field1Query->setFieldQuery('lastname', $searchText);
            $boolQuery->addShould($field1Query);

            $field1Query = new \Elastica\Query\Match();
            $field1Query->setFieldQuery('pays', $searchText);
            $boolQuery->addShould($field1Query);

            $field1Query = new \Elastica\Query\Match();
            $field1Query->setFieldQuery('ville', $searchText);
            $boolQuery->addShould($field1Query);

            $field1Query = new \Elastica\Query\Match();
            $field1Query->setFieldQuery('codePostale', $searchText);
            $boolQuery->addShould($field1Query);

            $field1Query = new \Elastica\Query\Match();
            $field1Query->setFieldQuery('activitePrincipale', $searchText);
            $boolQuery->addShould($field1Query);

            $baseQuery->setQuery($boolQuery) ;
        }


        // Option 1. Returns all users who have example.net in any of their mapped fields
        return $this->find($baseQuery);

    }
}