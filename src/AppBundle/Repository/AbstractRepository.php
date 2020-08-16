<?php

declare(strict_types=1);

namespace AppBundle\Repository;

use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\EntityRepository;

/**
 * @author Jacek Wesołowski <jacqu25@yahoo.com>
 */
class AbstractRepository extends EntityRepository
{
    protected function createDBALQueryBuilder(): QueryBuilder
    {
        $connection = $this->getEntityManager()->getConnection();

        return $connection->createQueryBuilder();
    }
}
