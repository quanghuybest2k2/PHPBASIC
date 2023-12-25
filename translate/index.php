<?php

require_once 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;

$tr = new GoogleTranslate();
$word = $tr->setSource('en')->setTarget('vi')->translate('Firewall');
echo $word;
echo "<br/>";
echo $tr->translate('Hello World!');
echo "<br/>";
echo GoogleTranslate::trans('Hello again', 'vi', 'en');
