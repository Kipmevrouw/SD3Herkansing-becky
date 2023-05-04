<?php
// Variabele met globale scope
$naam = "Becky";

function printNaam() {
    // Variabele met lokale scope
    $naam = "Spekkie";
    echo $naam;
}

printNaam(); // Output: Spekkie
echo $naam; // Output: Becky

?>