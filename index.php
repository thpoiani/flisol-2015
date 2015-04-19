<?php

require("vendor/autoload.php");

require("src/Funcionario/Atendente.php");
require("src/Utils/Dicionario.php");

use AgenciaDeViagens\Utils\Dicionario;
use AgenciaDeViagens\Funcionario\Atendente;

$language = isset($argv[1]) ? $argv[1] : null;

$atendente  = new Atendente();
$dicionario = new Dicionario($language);

echo $atendente->falar($dicionario, 'Hello World');
