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
                    $retData['uzenet'] = "Helytelen felhasználói név-jelszó pár!";
                    break;
                case 1:
                    $retData['eredmény'] = "OK";
                    $retData['uzenet'] = "Kedves ".$felhasznalo[0]['csaladi_nev']." ".$felhasznalo[0]['utonev']."!<br><br>
					                      Jó munkát kívánunk rendszerünkkel.<br><br>
										  Az üzemeltetõk";
                    $_SESSION['userid'] =  $felhasznalo[0]['id'];
                    $_SESSION['userlastname'] =  $felhasznalo[0]['csaladi_nev'];
                    $_SESSION['userfirstname'] =  $felhasznalo[0]['utonev'];
                    $_SESSION['userlevel'] = $felhasznalo[0]['jogosultsag'];
                    Menu::setMenu();
                    break;
                default:
                    $retData['eredmény'] = "ERROR";
                    $retData['uzenet'] = "Több felhasználót találtunk a megadott felhasználói név -jelszó párral!";
            }*/
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