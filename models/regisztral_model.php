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
                ('DEFAULT', 'NULL', 'NULL', '".$vars['login']."', '".sha1($vars['password'])."', '__1')";
            $stmt = $connection->query($sql);
            /*
            $felhasznalo = $stmt->fetchAll(PDO::FETCH_ASSOC);

            switch(count($felhasznalo)) {
                case 0:
                    $retData['eredmeny'] = "ERROR";
                    $retData['uzenet'] = "Helytelen felhaszn�l�i n�v-jelsz� p�r!";
                    break;
                case 1:
                    $retData['eredm�ny'] = "OK";
                    $retData['uzenet'] = "Kedves ".$felhasznalo[0]['csaladi_nev']." ".$felhasznalo[0]['utonev']."!<br><br>
					                      J� munk�t k�v�nunk rendszer�nkkel.<br><br>
										  Az �zemeltet�k";
                    $_SESSION['userid'] =  $felhasznalo[0]['id'];
                    $_SESSION['userlastname'] =  $felhasznalo[0]['csaladi_nev'];
                    $_SESSION['userfirstname'] =  $felhasznalo[0]['utonev'];
                    $_SESSION['userlevel'] = $felhasznalo[0]['jogosultsag'];
                    Menu::setMenu();
                    break;
                default:
                    $retData['eredm�ny'] = "ERROR";
                    $retData['uzenet'] = "T�bb felhaszn�l�t tal�ltunk a megadott felhaszn�l�i n�v -jelsz� p�rral!";
            }*/
            $retData['uzenet'] = "Sikeres regisztr�ci�!";
        }
        catch (PDOException $e) {
            $retData['eredm�ny'] = "ERROR";
            $retData['uzenet'] = "Adatb�zis hiba: ".$e->getMessage()."!";
        }

        return $retData;
    }
}

?>