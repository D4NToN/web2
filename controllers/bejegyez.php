<?php

class Bejegyez_Controller
{
    public $baseName = 'bejegyez';  //meghatározni, hogy melyik oldalon vagyunk
    public function main(array $vars) // a router által továbbított paramétereket kapja
    {
        $bejegyezModel = new Bejegyez_Model;  //az osztályhoz tartozó modell
        //a modellben belépteti a felhasználót
        $retData = $bejegyezModel->get_data($vars);
        if($retData['eredmeny'] == "ERROR")
            $this->baseName = "ujbejegyzes";
        //betöltjük a nézetet
        $view = new View_Loader($this->baseName.'_main');
        //átadjuk a lekérdezett adatokat a nézetnek
        foreach($retData as $name => $value)
            $view->assign($name, $value);
    }
}

?>