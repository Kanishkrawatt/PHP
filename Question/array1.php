<?php

$arr = array(12,10,1,11,6);
echo "<h1>from the print_r</h1>";
echo " <pre>";
print_r($arr);
echo"</pre>";
echo "<h1>from the var_dump</h1>";
echo " <pre>";
var_dump($arr);
echo"</pre>";

$Padded_array = array_pad($arr , 6,1);
echo "<h1>Array_pad</h1>";
echo " <pre>";
print_r($Padded_array);
echo"</pre>";


$slice_array = array_slice($arr,1,3);
echo "<h1>Array_Slice</h1>";
echo " <pre>";
print_r($slice_array);
echo"</pre>";

$splice_array1 = array(1,4,5,7,2);
$splice_array2 = array(3,2,0);
echo "<h1>Arrays for array splice</h1>";

echo " <pre> <h4> Array 1 </h4>";
print_r($splice_array1);
echo"</pre>";

echo " <pre> <h4> Array 2 </h4>";
print_r($splice_array2);
echo"</pre>";

array_splice($splice_array1,1,2,$splice_array2);
echo "<h1>Array Splice</h1>";
echo " <pre>";
print_r($splice_array1);
echo"</pre>";

$arrayrange  = range(1,9);
echo "<h1>Array from the range function </h1>";
echo " <pre>";
print_r($arrayrange);
echo"</pre>";


$chunk_array = array_chunk($arrayrange,3);
echo "<h1>Array Chunks</h1>";
echo "<pre>";
print_r($chunk_array);
echo"</pre>";

$arraylist = range(1,6);

list($a,$b,$c,$d,$e) = $arraylist;

echo "<h1> List </h1>";
echo "<pre>";
print_r($arraylist);
echo"</pre>";

echo "a = $a <br> b = $b <br> c = $c <br> d = $d <br> e = $e";

?>