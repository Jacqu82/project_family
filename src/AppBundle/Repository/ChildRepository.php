<?php

namespace AppBundle\Repository;

class ChildRepository extends AbstractRepository
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

    public function findBiggestFamily(): array
    {
        $qb = $this->createDBALQueryBuilder();
        $qb
            ->select('COUNT(family_id) as count', 'f.family_name')
            ->from('child', 'c')
            ->leftJoin('c', 'family', 'f', 'c.family_id = f.id')
            ->groupBy('family_id')
            ->orderBy('COUNT(family_id)', 'DESC')
            ->setMaxResults(5);

//        dump($qb->getSQL());
//        dump($qb->execute()->fetchAll());

        return $qb->execute()->fetchAll();
    }

    public function findMostOccurrencesChildName()
    {
        $connection = $this->getEntityManager()->getConnection();
        $sql = "SELECT name, COUNT(family_id) count FROM child GROUP By name ORDER BY (COUNT(family_id)) DESC LIMIT 5";
        $result = $connection->prepare($sql);
        $result->execute();

        return $result->fetchAll();
    }

    public function findYoungestChildren(): array
    {
        $qb = $this->createDBALQueryBuilder();
        $qb
            ->select('c.name', 'c.date_of_birth')
            ->from('child', 'c')
            ->orderBy('c.date_of_birth', 'DESC')
            ->setMaxResults(3);

//        dump($qb->getSQL());
//        dump($qb->execute()->fetchAll());
//        dump($qb->execute()->fetchAll(\PDO::FETCH_BOTH));
//        dump($qb->execute()->fetchAll(\PDO::FETCH_GROUP));
//        dump($qb->execute()->fetchAll(\PDO::FETCH_COLUMN));
//        dump($qb->execute()->fetchAll(\PDO::FETCH_KEY_PAIR));

        return $qb->execute()->fetchAll();
    }
}
