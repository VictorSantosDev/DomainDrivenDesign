<?php

namespace App\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;

interface RepositoryInterface
{
    public function create($entity): void;
    // public function update(Costumer $entity): void;
    // public function find(string $id): Collection;
    // public function findAll(): Collection;
}
