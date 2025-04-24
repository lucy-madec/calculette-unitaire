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
}
