<?php
function increaseEnthusiasm(string $a)
{
    $a.="!";
    return $a;
}
$a = "hello";
$i = increaseEnthusiasm($a);
echo $i,"\n<br>";

function repeatThreeTimes($a){
    for($i=0;$i<3;$i++){
        echo $a," ";
    }
}
echo repeatThreeTimes($a),"\n<br>";

