<?php

class Regisztral_Model
{
    public function get_data($vars)
    {
        $retData['eredmeny'] = "";

        try {
            $connection = Database::getConnection();
            $sql = "INSERT INTO `felhasznalok` 
                (`id`, `csaladi_nev`, `utonev`, `bejelentkezes`, `jelszo`, `jogosultsag`) 
                VALUES
                ('DEFAULT', 'NULL', 'NULL', '".$vars['login']."', '".sha1($vars['password'])."', '_1_')";
            $stmt = $connection->query($sql);

            $retData['uzenet'] = "Sikeres regisztráció!";
        }
        catch (PDOException $e) {
            $retData['eredmény'] = "ERROR";
            $retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
        }
        return $retData;
    }
}

?>