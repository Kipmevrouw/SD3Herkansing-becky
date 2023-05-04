<?php

// $kip1 en $kip2 zijn argumenten
function addKippen($kip1, $kip2) {
    $chicken = $kip1 + $kip2;
    return $chicken;
  }
  
  // return waarde
  $aantal = addKippen(8, 10);
  echo $aantal; // Output: 18 kippen
  
?>