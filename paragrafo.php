<?php

/* Variabile che contiene il paragrafo (non censurato) */
$Paragrafo = "Questo è un Paragrafo di PROVA";


/* Stampiamo il paragrafo originale e anche la sua lunghezza */
echo "<h2> Pragrafo Originale </h2>";
echo "<p>$Paragrafo</p>";
echo "<p>Lunghezza: " . strlen($Paragrafo) . "</p>";


/* Prendi la parola da censurare nell'HTML */
$censored_word = $_GET['censura'];

/* --------------------------------------------------------------------------------- */

// Censura la parola nel paragrafo
$censored_Paragrafo = str_replace($censored_word, '***', $Paragrafo);


// Stampa il paragrafo censurato e la sua lunghezza
echo "<h2>Paragrafo Censurato:</h2>";
echo "<p>$censored_paragraph</p>";
echo "<p>Lunghezza: " . strlen($censored_paragraph) . "</p>";


?>
