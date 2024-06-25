<?php

/* Variabile che contiene il paragrafo (non censurato) */
$Paragrafo = "";


/* Stampiamo il paragrafo originale e anche la sua lunghezza */
echo "<h2> Pragrafo Originale </h2>";
echo "<p>$Paragrafo</p>";
echo "<p>Lunghezza: " . strlen($Paragrafo) . "</p>";


?>




<!doctype html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Badwords</title>

    <!-- Collegamento general/main CSS -->
     <link rel="stylesheet" href="./src/style.css">
  </head>


  <body>
    

    <!-- Collegamento JS -->
    <script type="module" src="/src/main.js"></script>
  </body>

</html>