<?php
$a=10;
$b=3;
echo $a % $b, "\n<br>";

echo $a % $b == 0 ? "Делиться" : "Делиться с остатком: " , $a%$b, "\n<br>";

$st = 2**10;
echo $st, "\n<br>";
echo sqrt(245), "\n<br>";
$arr = array(4,2,5,19,13,0,10);


$sum=0;
foreach($arr as $i){
    $sum+=$i;
}
echo sqrt($sum), "\n<br>";


echo round(sqrt(379)), "\n<br>";
echo round(sqrt(379),1), "\n<br>";
echo round(sqrt(379),2), "\n<br>";


$mas =array(
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587))
);
echo $mas["floor"], "\n<br>";
echo $mas["ceil"], "\n<br>";


$massive = array(4,-2,5,19,-130,0,10);
echo min($massive)," ", max($massive), "\n<br>";


echo rand(1,100), "\n<br>";


$array =[];
$c=0;
while($c<10){
    $c+=1;
    $array[$c]=rand(1,100);
    echo $array[$c], " ";
}

echo abs($a-$b), "\n<br>";

for ($i=0; $i<sizeof($massive)-1;$i+=1) {
    $massive[$i]=abs($massive[$i]);
    echo $massive[$i], " ";
}


echo "\n<br>";
$int =30;
$i=0;
$size=0;
$deliteli = array_fill(0,$int, null);
while ($i<$int){
    $i++;
    if ($int % $i ==0){
        $deliteli[$size]=$i;
        $size++;
    }

}
for ($i=0;$i<$size;$i++){
    echo $deliteli[$i], " ";
}
echo "\n<br>";


$arr =[1,2,3,4,5,6,7,8,9,10];
$sum=0;
$i=0;
for($i=0;$sum<=10;$i++){
    $sum+=$arr[$i];
}
echo $i;