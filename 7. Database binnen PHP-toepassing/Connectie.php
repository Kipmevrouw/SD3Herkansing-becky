<?php
// Database verbinding gegevens
$servername = "localhost";
$username = "jouw_gebruikersnaam";
$password = "jouw_wachtwoord";
$dbname = "jouw_database_naam";

// Maak de verbinding
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Controleer de verbinding
if (!$conn) {
  die("Verbinding mislukt: " . mysqli_connect_error());
}
echo "Verbinding geslaagd!";
?>
