<?php
// Formulier verwerking
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Super globals
    $naam = htmlspecialchars($_POST['naam']);
    $email = htmlspecialchars($_POST['email']);
    $bericht = htmlspecialchars($_POST['bericht']);

    // Form validatie
    if (empty($naam)) {
        $naamError = 'Naam is verplicht.';
    }

    if (empty($email)) {
        $emailError = 'E-mailadres is verplicht.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Ongeldig e-mailadres.';
    }

    if (empty($bericht)) {
        $berichtError = 'Bericht is verplicht.';
    }

    // Form security
    if (empty($naamError) && empty($emailError) && empty($berichtError)) {
        $to = 'voorbeeld@email.com';
        $subject = 'Nieuw bericht via contactformulier';
        $body = "Naam: $naam\nE-mail: $email\nBericht:\n$bericht";

        if (mail($to, $subject, $body)) {
            $successbericht = 'Bedankt voor uw bericht. We nemen zo snel mogelijk contact met u op.';
        } else {
            $errorbericht = 'Er is een fout opgetreden bij het verzenden van uw bericht. Probeer het later opnieuw.';
        }
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="naam">Naam:</label>
    <input type="text" naam="naam" id="naam" value="<?php echo isset($naam) ? $naam : ''; ?>">
    <?php if (isset($naamError)) { ?>
        <p class="error"><?php echo $naamError; ?></p>
    <?php } ?>

    <label for="email">E-mailadres:</label>
    <input type="email" naam="email" id="email" value="<?php echo isset($email) ? $email : ''; ?>">
    <?php if (isset($emailError)) { ?>
        <p class="error"><?php echo $emailError; ?></p>
    <?php } ?>

    <label for="bericht">Bericht:</label>
    <textarea naam="bericht" id="bericht"><?php echo isset($bericht) ? $bericht : ''; ?></textarea>
    <?php if (isset($berichtError)) { ?>
        <p class="error"><?php echo $berichtError; ?></p>
    <?php } ?>

    <?php if (isset($successbericht)) { ?>
        <p class="success"><?php echo $successbericht; ?></p>
    <?php } ?>

    <?php if (isset($errorbericht)) { ?>
        <p class="error"><?php echo $errorbericht; ?></p>
    <?php } ?>

    <button type="submit">Versturen</button>
</form>
<!-- In deze code wordt het $_POST superglobal gebruikt om de gegevens van het formulier te verwerken. 
    Vervolgens worden de gegevens gevalideerd met behulp van empty() en filter_var() om ervoor te zorgen dat ze 
    geldig zijn. Om form security te waarborgen worden de gegevens gevalideerd om te voorkomen dat kwaadwillenden 
    schadelijke code of scripts invoeren. Het htmlspecialchars() wordt gebruikt om speciale karakters in de 
    ingediende gegevens te vervangen door HTML-entiteiten. Als er geen fouten zijn, wordt het e-mailbericht 
    gegenereerd en verzonden met de mail() functie. Er wordt ook een succesbericht weergegeven als het bericht 
    met succes is verzonden. Als er een fout optreedt bij het verzenden van het bericht, wordt een foutbericht weergegeven. 
    De htmlspecialchars() functie wordt ook gebruikt bij het weergeven van de ingediende gegevens in 
    het formulier om ervoor te zorgen dat de gegevens veilig worden weergegeven en geen schadelijke code bevatten.-->