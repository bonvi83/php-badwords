<?php
// creo la mia variabile per la storiella
$storiella = $_GET["storiella"];
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuova storiella</title>
</head>
<body>
    
</body>
</html>