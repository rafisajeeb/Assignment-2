<?php
//Using for loop
function printEvenNumbersForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

$start = 1;
$end = 20;
$step = 2;

echo "Using for loop: ";
printEvenNumbersForLoop($start, $end, $step);
echo "\n";


//Using while loop
function printEvenNumbersWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

echo "Using while loop: ";
printEvenNumbersWhileLoop($start, $end, $step);
echo "\n";


//Using do-while loop
function printEvenNumbersDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

echo "Using do-while loop: ";
printEvenNumbersDoWhileLoop($start, $end, $step);
echo "\n";
?>

