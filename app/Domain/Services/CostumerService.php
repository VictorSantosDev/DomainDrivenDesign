<?php

namespace App\Domain\Services;

use Illuminate\Support\Collection;
use App\Infrastructure\Repository\ConsumerRepository;

class CostumerService
{
    public static function ageAccept(array $costumers): Collection
    {
        $model = new ConsumerRepository();
        $collection = new Collection;

        foreach($costumers as $costumer){

            if($costumer['age'] >= 18){
                $costumer['age_up'] = true;
                $collection->add($costumer);

                continue;
            }

            $costumer['age_up'] = false;

            $collection->add($costumer);
        }

        $model->create($collection->first());
        return $collection;
    }
}
