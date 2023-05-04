<?php
function meerdereKippen($kip1, $kip2) {
    $aantal = $kip1 * $kip2;
    return $aantal;
  }
  
  $kip1 = 2;
  $kip2 = 3;
  $aantal = meerdereKippen($kip1, $kip2);
  echo $aantal; // Output: 6
  echo $kip1; // Output: 2
  echo $kip2; // Output: 3
  
  // In de bovenstaande functie zijn $kip1 en $kip2 gedefinieerd in de globale scope en $aantal 
  // is gedefinieerd in de lokale scope van de functie. Daarom hebben $kip1 en $kip2 dezelfde 
  // waarden voordat en na het aanroepen van de functie, terwijl $aantal alleen binnen de functie bestaat.
?>