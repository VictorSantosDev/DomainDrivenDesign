<?php

namespace App\Domain\Entity\Costumer\Andress;

use Exception;

class Andress
{
    private $street;
    private $district;
    private $number;
    private $zip_code;

    public function __construct(string $street, string $district, int $number, string $zip_code)
    {
        $this->street = $street;
        $this->district = $district;
        $this->number = $number;
        $this->zip_code = $zip_code;

        $this->validate();
    }

    private function validate()
    {
        if($this->street == ''){
            throw new Exception('Rua vazio!');
        }

        if($this->district == ''){
            throw new Exception('Bairro vazio!');
        }

        if($this->number == ''){
            throw new Exception('Numero vazio!');
        }

        if($this->zip_code == ''){
            throw new Exception('Cep vazio!');
        }
    }

    public function __toString(): string
    {
        return "{$this->street}, {$this->district}, N° {$this->number}, {$this->zip_code}";
    }
}
