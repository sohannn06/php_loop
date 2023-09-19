<?php
$first = 0;
$second = 1;

for ($i = 1; $i <= 10; $i++) {
    $next = $first + $second;

    echo $next . " ";
    
    $first = $second;
    $second = $next;
    
    if ($next > 100) {

        break;
    }
}
?>
