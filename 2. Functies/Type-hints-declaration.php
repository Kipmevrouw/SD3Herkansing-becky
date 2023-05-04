<?php
function deelKippen(float $kip1, float $kip2): float {
    $aantal = $kip1 / $kip2;
    return $aantal;
  }
  
  $aantal = deelKippen(10, 3);
  echo $aantal; // Output: 3.3333333333333
  

  // In de bovenstaande functie zijn $kip1 en $kip2 getypeerd 
  // als float en de functie retourneert ook een float waarde. 
  // Dit betekent dat als de invoer niet overeenkomt met het 
  // verwachte type, er een fout wordt gegenereerd. Bijvoorbeeld, 
  // als we deelKippen("10", "3") zouden aanroepen, zou er een
  // fout worden gegenereerd omdat de invoerstrings niet kunnen 
  // worden omgezet naar floats.
?>