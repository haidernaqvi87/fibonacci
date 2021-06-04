<?php

class FibonacciSeries implements Fibonacci {

    public function __construct() {}

    /**
     * get Fibonacci number
     * @param int $n
     * @return float
     */
    public function getNumber(int $n): float {
        //for starting the fibonacci series
        $num1 = 0;
        $num2 = 1;
        //

        $counter = 1;
        while ($counter < $n){
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            $counter++;
        }

        return $num1;
    }


}
