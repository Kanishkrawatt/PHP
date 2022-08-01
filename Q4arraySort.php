<?php

echo "<h1> Sorting for the indexed array </h1>";

$indexedarray = array(1,4,5,7,3,2);
echo"Array <pre>";
print_r($indexedarray);
echo"</pre>";
sort($indexedarray);
echo"Sorted array<pre>";
print_r($indexedarray);
echo"</pre>";
rsort($indexedarray);
echo"Reverse Sorted array <pre>";
print_r($indexedarray);
echo"</pre>";


echo "<h1> Sorting for the associative array </h1>";

$assocative_array = array("p5" =>"name4","p1" =>"name6","p3" =>"name1","p1" =>"name5","p7" =>"name2");

echo"Array <pre>";
print_r($assocative_array);
echo"</pre>";

asort($assocative_array);
echo"Sorted Array with asort <pre>";
print_r($assocative_array);
echo"</pre>";

arsort($assocative_array);
echo"Sorted Array with arsort <pre>";
print_r($assocative_array);
echo"</pre>";

ksort($assocative_array);
echo"Sorted Array by ksort <pre>";
print_r($assocative_array);
echo"</pre>";

krsort($assocative_array);
echo"Sorted Array by krsort <pre>";
print_r($assocative_array);
echo"</pre>";


?>