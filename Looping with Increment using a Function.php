<?php

function printEvenNumbersWithForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i;
        if ($i < $end) {
            echo ", ";
        }
    }
    echo "<br>";
}


function printEvenNumbersWithWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i;
        if ($i < $end) {
            echo ", ";
        }
        $i += $step;
    }
    echo "<br>";
}


function printEvenNumbersWithDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        echo $i;
        if ($i < $end) {
            echo ", ";
        }
        $i += $step;
    } while ($i <= $end);
    echo "<br>";
}


echo "Using for loop: ";
printEvenNumbersWithForLoop(2, 20, 2);

echo "Using while loop: ";
printEvenNumbersWithWhileLoop(2, 20, 2);

echo "Using do-while loop: ";
printEvenNumbersWithDoWhileLoop(2, 20, 2);
?>
