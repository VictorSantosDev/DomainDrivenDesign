<?php

namespace App\Domain\Repository;

interface ConsumerRepositoryInterface extends RepositoryInterface
{
    public function create($entity): void;
}
