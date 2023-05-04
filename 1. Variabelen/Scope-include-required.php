<?php
// index1.php ( bestand voorbeeld )
$naam = "Becky";

// Scope-include-required.php
include "index1.php";
echo $naam; // Output: Becky

// In PHP kun je code van andere bestanden opnemen met behulp 
// van de include of require functies. Wanneer je code opneemt met 
// deze functies, kunnen variabelen met globale scope in het 
// ingesloten bestand worden gebruikt in het oproepende bestand.
?>