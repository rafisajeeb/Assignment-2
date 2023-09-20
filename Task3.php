<?php
$first = 0;
$second = 1;
$count = 0;

while ($count < 10) {
    if ($first > 100) {
        break; // Exit the loop if Fibonacci number exceeds 100
    }
    
    echo $first . " ";
    
    $next = $first + $second;
    $first = $second;
    $second = $next;
    
    $count++;
}
?>
