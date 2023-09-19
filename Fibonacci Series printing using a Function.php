<?php
function printFibonacci($count) {
    $first = 0;
    $second = 1;

    for ($i = 1; $i <= $count; $i++) {
        echo $first;
        if ($i < $count) {
            echo ", ";
        }

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

printFibonacci(15);
?>
