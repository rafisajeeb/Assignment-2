<?php
function printFibonacciSeries($n) {
    $first = 0;
    $second = 1;

    for ($i = 0; $i < $n; $i++) {
        echo $first . " ";

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

$n = 15;
echo "First $n Fibonacci numbers: ";
printFibonacciSeries($n);
?>