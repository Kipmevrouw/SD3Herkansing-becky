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


// De scope van een variabele verwijst naar de zichtbaarheid en beschikbaarheid 
// van de variabele in verschillende delen van het PHP-programma. 
// Er zijn drie soorten scopes in PHP:

// Globale scope: een variabele met globale scope is beschikbaar in het hele PHP-programma.
// Lokale scope: een variabele met lokale scope is alleen beschikbaar binnen de functie of codeblok waarin deze is gedefinieerd.
// Statische scope: een variabele met statische scope behoudt zijn waarde tussen functie-aanroepen.
?>