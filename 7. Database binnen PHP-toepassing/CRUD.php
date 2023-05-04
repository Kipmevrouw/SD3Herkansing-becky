<?php
// Create (aanmaken):
// Voeg een nieuwe rij toe aan de tabel "klanten"
$sql = "INSERT INTO klanten (naam, adres, stad) VALUES ('Becky', 'Contactweg 36', 'Amsterdam')";
if (mysqli_query($conn, $sql)) {
  echo "Nieuwe rij succesvol aangemaakt";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Read (lezen):
// Haal alle rijen op uit de tabel "klanten"
$sql = "SELECT * FROM klanten";
$result = mysqli_query($conn, $sql);

// Controleer of er rijen zijn gevonden
if (mysqli_num_rows($result) > 0) {
  // Loop door alle rijen en toon de gegevens
  while($row = mysqli_fetch_assoc($result)) {
    echo "Naam: " . $row["naam"]. " - Adres: " . $row["adres"]. " - Stad: " . $row["stad"]. "<br>";
  }
} else {
  echo "Geen resultaten gevonden";
}

// Update (bijwerken):
// Werk de rij bij met naam "Becky"
$sql = "UPDATE klanten SET adres='Contactweg 37' WHERE naam='Spekkie'";
if (mysqli_query($conn, $sql)) {
  echo "Rij succesvol bijgewerkt";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Delete (verwijderen):
// Verwijder de rij met naam "Becky"
$sql = "DELETE FROM klanten WHERE naam='Becky'";
if (mysqli_query($conn, $sql)) {
  echo "Rij succesvol verwijderd";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>