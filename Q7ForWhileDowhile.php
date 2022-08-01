<?php
$i = 1;
echo "<h1>Using for loop</h1>";
echo "Number from 1 to 10 <br>";
for($i;$i<=10;$i++){
    echo $i ,"<br>";
}

$i = 1;
echo "<h1>Using while loop</h1>";
echo "Multiple of 2 <br>";
while ($i<=10){
    echo $i*2 ,"<br>";
    $i= $i+1;
}

$sum =0;
$i=1;
echo "<h1>Using Do while</h1>";
echo "Sum of i from  1 to 10<br>";
do{
    $sum = $sum + $i;
    $i= $i+1;

}while($i<=10);
echo $sum ,"<br>";
?>
