<?php
function printPyramid($n) {
    $str = '';
  
    for ($i = 0; $i < $n; $i++) {
      for($j = 0; $j <= $i; $j++ ) {
        $str .= "x";
      }
      
      $str .= "\n<br>";
    }
  
    return $str;
  }
echo printPyramid(10);