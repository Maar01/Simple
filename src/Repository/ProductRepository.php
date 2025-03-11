<?php

namespace Maar10\Simple\Repository;

use Doctrine\DBAL\Connection;
use Maar10\Simple\Model\Product;

class ProductRepository
{
    public function __construct(Connection $connection)
    {
        var_dump($connection->getDatabase());exit;
        $this->connection = $connection;
    }

    /**
     * @return Product[]
     */
    public function getAll(): array
    {
        return $this->products;
    }
}
