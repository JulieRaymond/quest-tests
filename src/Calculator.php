<?php

namespace App;

class Calculator
{
    public function sum(int $firstValue, int $secondValue): int
    {
        return $firstValue + $secondValue;
    }

    public function multiplication(int $firstnumber, int $secondnumber): int
    {
        return $firstnumber * $secondnumber;
    }

    public function isEven(int $number) :bool
    {
        if ($number % 2 == 0){
            return true;
            }else{
            return false;
            }
    }
}