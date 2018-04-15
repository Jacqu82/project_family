<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ChildRepository extends EntityRepository
{
    public function findAvgChildInFamily($familyId)
    {
        $connection = $this->getEntityManager()->getConnection();
        $sql = "SELECT AVG(avg.count) FROM (SELECT COUNT(family_id) as count FROM child GROUP BY family_id) avg";
        $result = $connection->prepare($sql);
        $result->bindParam('family_id', $familyId);
        $result->execute();

        return $result->fetchColumn();
    }

    public function findBiggestFamily()
    {
        $connection = $this->getEntityManager()->getConnection();
        $sql = "SELECT COUNT(family_id) as count, f.family_name FROM `child` c
                LEFT JOIN family f ON c.family_id = f.id
                GROUP By family_id  
                ORDER BY COUNT(family_id) DESC LIMIT 3";
        $result = $connection->prepare($sql);
        $result->execute();

        return $result->fetchAll();
    }

    public function findMostOccurrencesChildName()
    {
        $connection = $this->getEntityManager()->getConnection();
        $sql = "SELECT name, COUNT(family_id) count FROM child GROUP By name ORDER BY COUNT(family_id) DESC LIMIT 3";
        $result = $connection->prepare($sql);
        $result->execute();

        return $result->fetchAll();
    }
}
