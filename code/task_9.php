<?php
function fillArray($int) {
    $arr = [];
  
    for ($i=1; $i <= $int; $i++) { 
      $str = '';
  
      for ($j=1; $j <= $i; $j++) { 
        $str .= "x";
      }
  
      array_push($arr, $str);
    }
  
    return $arr;
}
for ($i=0;$i<10;$i++){
    echo fillArray(10)[$i]," \n<br>";
}

function arrayF($val, $len) {
    $arr = [];
  
    for ($i=0; $i < $len; $i++) { 
      array_push($arr, $val);
    }
    
    return $arr;
  }

for ($i=0;$i<10;$i++){
    echo arrayF("x",10)[$i]," ";
}

$arr = [2, 5, 3, 9];
$sum = 0;
echo "\n<br>";

for ($i=0; $i < count($arr)-1; $i++) { 
  $sum += $arr[$i] * $arr[$i + 1];
}
echo $sum, "\n<br>";


function FullName($user) {
    return $user['name'] . " " . $user['patronymic'] . " " . $user['surname'];
  }
  
  $user = [
    'name' => 'Ivan',
    'patronymic' => 'Leonidovich',
    'surname' => 'Strelkov'
  ];
  echo FullName($user), "\n<br>";


  function printFormattedDate($arr) {
    return $arr['year'] . "-" . $arr['month'] . "-" . $arr['day'];
  }
  
  $today = getdate();
  $arr = [
    'year' => $today['year'],
    'month' => $today['mon'],
    'day' => $today['mday'],
  ];

echo printFormattedDate($arr);
echo $sum, "\n<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];



for ($i=0;$i<5;$i++){
    echo $arr[$i]," ";
}
echo "\n<br>";
echo count($arr), "\n<br>";
echo $arr[count($arr) - 1], "\n<br>";
echo $arr[count($arr) - 2], "\n<br>";