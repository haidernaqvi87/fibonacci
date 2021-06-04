<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../class/ResultOutputter.php";


final class ResultOutputterTest extends TestCase
{
    public function testText(): void
    {
        $outputter = new ResultOutputter(10);
        $result = $outputter->text();
        $this->assertEquals('The number is 10',$result);
    }

    public function testJson(): void
    {
        $outputter = new ResultOutputter(10);
        $result = $outputter->json();
        $this->assertEquals('{"data":10}',$result);
    }
}