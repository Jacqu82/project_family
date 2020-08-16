<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Family;

class FamilyRepository extends AbstractRepository
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

    public function findOldestFathers()
    {
        return $this->createQueryBuilder('f')
            ->select('f.fatherName', 'f.fatherDateOfBirth')
            ->orderBy('f.fatherDateOfBirth')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    public function findOldestMothers()
    {
        return $this->createQueryBuilder('f')
            ->select('f.motherName', 'f.motherDateOfBirth')
            ->orderBy('f.motherDateOfBirth')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param string $filter
     * @return Family[]
     */
    public function findAllByQueryParam(string $filter = '')
    {
        $qb = $this->createQueryBuilder('f');
        if ($filter) {
            $qb->andWhere('f.familyName LIKE :filter OR f.motherName LIKE :filter OR f.fatherName LIKE :filter')
                ->setParameter('filter', '%' . $filter . '%');
        }

        return $qb
            ->getQuery()
            ->getResult();
    }
}
