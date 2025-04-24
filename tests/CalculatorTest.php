<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../calculator.php';

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->calculate('2+2'));
    }

    public function testSoustraction()
    {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->calculate('5-3'));
    }

    public function testMultiplication()
    {
        $calc = new Calculator();
        $this->assertEquals(24, $calc->calculate('6*4'));
    }

    public function testDivision()
    {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->calculate('10/2'));
    }


}
