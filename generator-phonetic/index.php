<?php

use Linguistics\Phonetics;

require __DIR__ . '/vendor/autoload.php';

$word = "Hello my name is Best";

$phonetics = new Phonetics();
$phoneticSymbols = $phonetics->symbols($word, 'array');

foreach ($phoneticSymbols as $word => $symbols) {
    echo "Từ: $word" . "<br/>";
    foreach ($symbols as $symbol) {
        if (empty($symbol)) {
            echo "ada";
        } else {
            echo nl2br("Phiên âm: $symbol\n");
        }
    }
    echo "<br/>";
}

