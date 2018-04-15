<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class FamilyRepository extends EntityRepository
{
    public function findAverageParentsAge()
    {
        $connection = $this->getEntityManager()->getConnection();
        $sql = "SELECT AVG((YEAR(NOW())-YEAR(f.father_date_of_birth))) as fatherAvg,
                AVG((YEAR(NOW())-YEAR(f.mother_date_of_birth))) as motherAvg,
                AVG((YEAR(NOW())-YEAR(c.date_of_birth))) as childAvg
                FROM family f
                JOIN child c ON c.family_id = f.id";
        $result = $connection->prepare($sql);
        $result->execute();

        return $result->fetch();
    }
}
