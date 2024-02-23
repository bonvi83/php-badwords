<?php
// creo la mia variabile per la storiella
$storiella = $_GET["storiella"];

// il vecchio console. log()
var_dump($storiella);

// creo la mia variabile per la parola da censurare
$parola = $_GET["parola"];
var_dump($parola);

// ESEMPIO DI str_replace
// str_replace(
//     array|string $search,
//     array|string $replace,
//     string|array $subject,
//     int &$count = null
// ): string|array

// creo la mia variabile per la nuova storiella
$newstoriella = str_replace($parola, "***", $storiella);
var_dump($newstoriella);
?>

<!-- VADO A STAMPARE IL TUTTO IN UN NUOVO DOCUMENTO HTML -->
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuova storiella</title>
</head>
<body>
    <!-- con echo stampo in html -->
    <h3>Storiella CENSURATA</h3>
    <div>
        <?php echo "La storiella dell'utente è: " . $storiella; ?>
    </div>
    <!-- con il comando   echo strlen($stringa);   vado a stampare la lunghezza della mia variabile -->
    <div>
        <?php echo "La lunghezza della storiella è " . strlen($storiella); ?>
    <div>
    </div>

    <div>
        <?php echo "La storiella CENSURATA dell'utente è: " . $newstoriella; ?>
    </div>
    <div>
        <?php echo "La lunghezza della storiella censurata è " . strlen($newstoriella);
        ?>
    <div>
</body>
</html>