<?php
// Controleer op null-waarden

// Gebruik de functie isset() om te controleren of 
// de variabele een waarde heeft toegewezen gekregen 
// of niet. Als de variabele geen waarde heeft, 
// geef dan een foutmelding.

if (!isset($variabele)) {
    echo "Fout: variabele is null.";
}

// Controleer op lege variabelen

// Gebruik de functie empty() om te controleren of de 
// variabele leeg is of niet. Als de variabele leeg is, 
// geef dan een foutmelding.
if (empty($variabele)) {
    echo "Fout: variabele is leeg.";
}

// Controleer op variabelentype

// Gebruik de functie gettype() om het type van de variabele 
// te krijgen en vergelijk dit met het verwachte type. 
// Als de variabele niet van het juiste type is, geef dan een foutmelding.
if (gettype($variabele) !== 'integer') {
    echo "Fout: variabele is geen integer.";
}

// Controleer op ongewenste karakters

// Gebruik de functie preg_match() om te controleren 
// of de variabele alleen gewenste karakters bevat. 
// Als de variabele ongewenste karakters bevat, geef 
// dan een foutmelding.
if (!preg_match('/^[a-zA-Z0-9]+$/', $variabele)) {
    echo "Fout: variabele bevat ongewenste karakters.";
}
?>