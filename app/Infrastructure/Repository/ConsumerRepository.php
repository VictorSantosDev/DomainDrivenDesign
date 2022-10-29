<?php

namespace App\Infrastructure\Repository;

use App\Consumer;
use App\Domain\Repository\ConsumerRepositoryInterface;

class ConsumerRepository implements ConsumerRepositoryInterface
{
    private $model;

    public function __construct()
    {
        $this->model = new Consumer;
    }

    public function create($entity): void
    {
        $this->model->create([
            'name' => $entity['name'],
            'age' => $entity['age'],
            'andress' => $entity['andress'],
            'age_up' => $entity['age_up']
        ]);
    }
}
