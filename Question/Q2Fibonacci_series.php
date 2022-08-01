<?php 
$t1 = 0;
$t2 = 1;

echo "$t1  &emsp;&emsp; term = 1 <br> $t2  &emsp; &emsp;term = 2<br>";
for ($i=0 ; $i<98;$i++){
    $next = $t1 + $t2 ;
    $t1 = $t2;
    $t2 = $next;
    $term = $i+3;
    echo " $next &emsp; &emsp;term = $term<br>";
}

?>