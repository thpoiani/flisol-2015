<?php

require("vendor/autoload.php");

require("src/funcionario/Atendente.php");
require("src/utils/Dicionario.php");

use AgenciaDeViagens\Utils\Dicionario;
use AgenciaDeViagens\Funcionario\Atendente;

$language = isset($argv[1]) ? $argv[1] : null;

$atendente  = new Atendente();
$dicionario = new Dicionario($language);

echo $atendente->falar($dicionario, 'Hello World');
