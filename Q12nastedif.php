<?php 

$num1 = 10;
$num2 = 20;
$num3 = 30;
if($num1>$num2){
    if($num1>$num3){
        echo "$num1 is the Greatest";
    }
    else{
        echo "$num3 is the Greatest";
    }
}
else{
    if($num2>$num3){
        echo "$num2 is the Greatest";
    }
    else{
        echo "$num3 is the Greatest";
    }
}

?>