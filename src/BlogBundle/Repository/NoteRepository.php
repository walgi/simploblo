<?php

namespace BlogBundle\Repository;

/**
 * NoteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NoteRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function getNotesForHomepage($limit = 5)
    {
        $qb = $this->createQueryBuilder('n');
        $qb->where('n.public = :public')
            ->setParameter('public', true)
            ->setMaxResults($limit)
            ->orderBy('n.id', 'DESC');
        
        return $qb->getQuery()->getResult();
    }
}
