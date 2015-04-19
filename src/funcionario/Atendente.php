<?php

namespace AgenciaDeViagens\Funcionario;

use \AgenciaDeViagens\Utils\Dicionario;

class Atendente {

    public function falar(Dicionario $dicionario, $texto)
    {
        return $dicionario->consultar($texto);
    }
}
