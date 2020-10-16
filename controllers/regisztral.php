<?php

class Regisztral_Controller
{
    public $baseName = 'regisztral';  //meghatározni, hogy melyik oldalon vagyunk
    public function main(array $vars) // a router által továbbított paramétereket kapja
    {
        $regisztralModel = new regisztral_Model;  //az osztályhoz tartozó modell
        //a modellben belépteti a felhasználót
        $retData = $regisztralModel->get_data($vars);
        if($retData['eredmeny'] == "ERROR")
            $this->baseName = "regisztracio";
        //betöltjük a nézetet
        $view = new View_Loader($this->baseName.'_main');
        //átadjuk a lekérdezett adatokat a nézetnek
        foreach($retData as $name => $value)
            $view->assign($name, $value);
    }
}

?>
