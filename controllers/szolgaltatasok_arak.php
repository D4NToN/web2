<?php

class Szolgaltatasok_arak_Controller
{
    public $baseName = 'szolgaltatasok_arak';  //meghatározni, hogy melyik oldalon vagyunk
    public function main(array $vars) // a router által továbbított paramétereket kapja
    {
        //betöltjük a nézetet
        $view = new View_Loader($this->baseName."_main");
    }
}

?>