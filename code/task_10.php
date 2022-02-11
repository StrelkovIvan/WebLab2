<?php
function sum10($a, $b) {
    if($a + $b > 10) {
      return true;
    }
  
    return false;
  }
  
  function Equal($a, $b) {
    if($a == $b) {
      return true;
    }
  
    return false;
  }
  
  function test($test) {
    if(!$test) {
      return "Верно";
    }
  }

  function testAge($age) {
    if($age < 10 || $age > 99) {
    echo "число не попадает";
    return;
  }