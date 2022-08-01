<?php
$a = 10;
$b = 20;
$answer = 2;
echo "1.Add <br>2.Subtract <br>3.Multiply <br>4.Divide<br>"; 
switch($answer){
    case 1:
        echo $a+$b;
        break;
    case 2:
        echo $a-$b;
        break;
    case 3:
        echo $a*$b;
        break;
    case 4:
        echo $a/$b;
        break;
    
}


?>