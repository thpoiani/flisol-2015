<?php

require("vendor/autoload.php");

use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

$translator = new Translator(null);

$translator->addLoader('array', new ArrayLoader());

$translator->addResource('array',
    array('Hello World' => 'Olá mundo'), 'pt'
);

$translator->addResource('array',
    array('Hello World' => 'Hola Mundo'), 'es'
);

$language = isset($argv[1]) ? $argv[1] : null;
$translator->setLocale($language);

echo $translator->trans('Hello World');
