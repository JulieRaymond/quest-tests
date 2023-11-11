<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);

        //Assert
        $this->assertSame(
            $expectedResult,
            $sum,
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testmultiplication(): void
    {
        //Arrange
        $firstNumber = 2;
        $secondNumber = 5;
        $expectedNumber = 10;

        //Act
        $calculator = new Calculator();
        $multiplication = $calculator->multiplication($firstNumber, $secondNumber);

        //Assert
        $this->assertSame(
            $expectedNumber,
            $multiplication,
            "La méthode multiplication() ne fonctionne plus :-("
        );
    }

    public function testIsEven(): void
    {
        //Arrange
        $number = 2;
        $expectedBool = true;

        //Act
        $calculator = new Calculator();
        $isEven = $calculator->isEven($number);

        //Assert
        $this->assertSame(
            $expectedBool,
            $isEven,
            "La méthode isEven() ne fonctionne plus :-("
        );
    }
}
