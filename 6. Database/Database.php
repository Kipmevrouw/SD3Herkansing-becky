<?php
// Database verbindingsparameters
$servername = "localhost";
$username = "gebruikersnaam";
$password = "wachtwoord";

// Maak een verbinding
$conn = new mysqli($servername, $username, $password);

// Controleer of de verbinding succesvol is
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

// Maak de database
$sql = "CREATE DATABASE mijnDatabase";
if ($conn->query($sql) === TRUE) {
    echo "Database succesvol aangemaakt";
} else {
    echo "Fout bij het maken van de database: " . $conn->error;
}

// Selecteer de database
mysqli_select_db($conn, "mijnDatabase");

// Maak de tabel
$sql = "CREATE TABLE gebruikers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    voornaam VARCHAR(30) NOT NULL,
    achternaam VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_datum TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel gebruikers succesvol aangemaakt";
} else {
    echo "Fout bij het maken van de tabel: " . $conn->error;
}

// Sluit de verbinding af
$conn->close();
?>