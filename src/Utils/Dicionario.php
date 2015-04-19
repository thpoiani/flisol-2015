<?php

namespace AgenciaDeViagens\Utils;

use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

class Dicionario {

    /**
     * @var Translator
     */
    private $translator;

    public function __construct($language)
    {
        $this->translator = new Translator(null);

        $this->translator->addLoader('array', new ArrayLoader());

        $this->translator->addResource('array',
            array('Hello World' => 'Olá mundo'), 'pt'
        );

        $this->translator->addResource('array',
            array('Hello World' => 'Hola Mundo'), 'es'
        );

        $this->translator->setLocale($language);
    }

    public function consultar($texto)
    {
        return $this->translator->trans($texto);
    }

}
