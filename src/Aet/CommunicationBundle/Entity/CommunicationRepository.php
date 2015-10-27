<?php
/**
 * Created by PhpStorm.
 * User: JRMD
 * Date: 16/03/2015
 * Time: 21:47
 */

namespace Aet\CommunicationBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class CommunicationRepository extends EntityRepository
{
    public function getCommunicationsWithCategories(array $categoryIdentifiers)
    {
        $qb = $this->createQueryBuilder('c');

        // On fait une jointure avec l'entité Category avec pour alias « c »
        $qb
            ->join('c.categories', 'cat')
            ->addSelect('cat')
        ;

        // Puis on filtre sur le nom des catégories à l'aide d'un IN
        $qb->where($qb->expr()->in('cat.id', $categoryIdentifiers));
        // La syntaxe du IN et d'autres expressions se trouve dans la documentation Doctrine


        // Enfin, on retourne le résultat
        return $qb
            ->getQuery()
            ->getResult()
            ;
    }
}