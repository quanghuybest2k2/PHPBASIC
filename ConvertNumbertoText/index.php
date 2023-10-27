<?php

require __DIR__ . '/vendor/autoload.php';

use Rmunate\Utilities\SpellNumber;

SpellNumber::value(100)->toLetters();
// "One Hundred"

SpellNumber::value(12300000)->toLetters();
// "Twelve Million Three Hundred Thousand"