<?php

use Linguistics\Phonetics;

require __DIR__ . '/vendor/autoload.php';

$word = "Hello";
$soundexCode = soundex($word);
echo nl2br("$soundexCode\n");
// ------------------------

Phonetics::symbols($word);
