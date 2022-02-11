<?php
function recursion($arr, $i = 0, $sum = 0) {
    $sum += $arr[$i];
  
    if($i < count($arr)) {
      return recursion($arr, $i + 1, $sum);
    } else {
      return $sum / $i;
    }
  }
  
  $arr = [1, 4, 2, 4, 5, 6, 4];
  echo recursion($arr), "\n<br>";

  function recursiveSum($i, $sum = 0) {
    $sum += $i;
  
    if($i >= 1) {
      return recursiveSum($i - 1, $sum);
    } else {
      return $sum;
    }
  }
  echo recursiveSum(100), "\n<br>";

  function recursivePow($arr, $i = 0, $new = []) {
    $sum = $arr[$i] ** 2;
    array_push($new, $sum);
  
    if($i < count($arr) - 1) {
      return recursivePow($arr, $i + 1, $new);
    } else {
      return $new;
    }
  }

  $arr = [1, 4, 2, 4, 5, 6, 4, 25];

  for ($i=0;$i<8;$i++){
    echo recursivePow($arr)[$i], " ";
  }

  function recursivePair($current, $sum = 0) {
    $pair = $current % 100;
    $current /= 100;
    $sum += $pair;
  
    if($current % 100 != 0) {
      return recursivePair($current, $sum);
    } else {
      return $sum;
    }
  }

  echo recursivePair("1234567890");