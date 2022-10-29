<?php

namespace App\Domain\Entity\Costumer;

use Exception;
use App\Domain\Entity\Costumer\Andress\Andress;

class Costumer
{
    /** @var string */
    private $name;

    /** @var int */
    private $age;

    /** @var Andress */
    private $andress;

    public function __construct(string $name, int $age, Andress $andress)
    {
        $this->name = $name;
        $this->age = $age;
        $this->andress = $andress;

        $this->validateName();
        $this->validateAge();
    }

    private function validateName(): void
    {
        if(filter_var($this->name, FILTER_SANITIZE_NUMBER_INT)){
            throw new Exception('Não é possui inserir numeros no nome.');
        }
    }

    private function validateAge()
    {
        if(!is_numeric($this->age)){
            throw new Exception('Necessário inserir idade.');
        }
    }

    public function getCostumer()
    {
        return $costumer = [
            'name' => $this->name,
            'age' => $this->age,
            'andress' => $this->andress->__toString(),
            'age_up' => ''
        ];
    }
}
