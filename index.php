<?php
require_once ('autoloader.php');

    $number = $_GET['number'];

    //Sample Code
    try {
        if ( is_numeric($number) && $number > 0 ) {
            $fibonacciSeries = new FibonacciSeries();
            $result = $fibonacciSeries->getNumber($number);
            $output = new ResultOutputter($result);
            echo $output->text();
            //echo $outputter->json();
        } else {
            die("Please enter a positive number");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    //