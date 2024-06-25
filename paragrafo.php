<?php

/* Variabile che contiene il paragrafo (non censurato) */
$Paragrafo = "";


/* Stampiamo il paragrafo originale e anche la sua lunghezza */
echo "<h2> Pragrafo Originale </h2>";
echo "<p>$Paragrafo</p>";
echo "<p>Lunghezza: " . strlen($Paragrafo) . "</p>";


/* Prendi la parola da censurare nell'HTML */
$censored_word = $_GET['censura'];

?>
