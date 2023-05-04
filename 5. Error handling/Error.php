<?php

// Afhandeling in code:
// Zet foutmeldingen aan om alle fouten weer te geven
foutmeldingen(E_ALL);

// Controleer of een bestand bestaat voordat het wordt geopend
$bestandsnaam = "bestand_dat_niet_bestaat.txt";
if (!file_exists($bestandsnaam)) {
    // Als het bestand niet bestaat, log dan een foutmelding en stop het script
    fout_log("Fout: $bestandsnaam bestaat niet", 0);
    exit;
}

// Probeer het bestand te openen
$handle = fopen($bestandsnaam, "r");
if (!$handle) {
    // Als het bestand niet kan worden geopend, log dan een foutmelding en stop het script
    fout_log("Fout: Kan $bestandsnaam niet openen", 0);
    exit;
}


// PHP.INI instellingen:
// Log foutmeldingen naar een bestand
log_fouten = Aan
fout_log = /var/log/php_fouten.log

// Toon foutmeldingen op het scherm
toon_fouten = Uit


// Logbestanden:
// Zet foutmeldingen aan om alle fouten weer te geven en log ze naar een bestand
ini_set("foutmeldingen", E_ALL);
ini_set("log_fouten", 1);
ini_set("fout_log", "/var/log/php_fouten.log");

// Probeer een bestand te openen
$bestandsnaam = "bestand_dat_niet_bestaat.txt";
if (!file_exists($bestandsnaam)) {
    // Als het bestand niet bestaat, log dan een foutmelding
    fout_log("Fout: $bestandsnaam bestaat niet");
}


//Production vs Development settings:
// In productie, toon geen foutmeldingen op het scherm
ini_set("toon_fouten", 0);

// In ontwikkeling, toon foutmeldingen op het scherm
ini_set("toon_fouten", 1);

// In productie, log foutmeldingen naar een bestand
ini_set("log_fouten", 1);
ini_set("fout_log", "/var/log/php_fouten.log");

// In ontwikkeling, log geen foutmeldingen naar een bestand
ini_set("log_fouten", 0);
?>