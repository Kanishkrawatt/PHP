<?php 
echo "<h1> Searching of an array</h1>";

echo "Using the array_search";
$array1 = array(1,3,5,7,9,2,4,6,8,10);
echo "<pre>";
print_r($array1);
echo "</pre>";

$search = array_search(5,$array1);
echo "5 found at the $search index";


echo " <br><br> Using in_array";

echo "<pre>";
print_r($array1);
echo "</pre>";
if (in_array(6, $array1)){
  echo "Match found";
  }
else{
  echo "Match not found";
  }
?>
