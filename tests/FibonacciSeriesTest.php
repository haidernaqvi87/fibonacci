<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../interface/fibonacci.php";
require __DIR__ . "/../class/FibonacciSeries.php";


final class FibonacciSeriesTest extends TestCase
{
    public function testFibonacciNumber(): void
    {
        $fibonacciSeries = new FibonacciSeries();
        $result = $fibonacciSeries->getNumber(10);
        $this->assertEquals(34,$result);
    }
}