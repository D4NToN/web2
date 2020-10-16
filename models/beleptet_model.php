<?php

class Beleptet_Model
{
	public function get_data($vars)
	{
		$retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();
			$sql = "select id, csaladi_nev, utonev, jogosultsag from felhasznalok where bejelentkezes='".$vars['login']."' and jelszo='".sha1($vars['password'])."'";
			$stmt = $connection->query($sql);
			$felhasznalo = $stmt->fetchAll(PDO::FETCH_ASSOC);
			switch(count($felhasznalo)) {
				case 0:
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Helytelen felhaszn�l�i n�v-jelsz� p�r!";
					break;
				case 1:
					$retData['eredm�ny'] = "OK";
					$retData['uzenet'] = "�dv�z�lj�k!";
					$_SESSION['userid'] =  $felhasznalo[0]['id'];
					$_SESSION['userlastname'] =  $felhasznalo[0]['csaladi_nev'];
					$_SESSION['userfirstname'] =  $felhasznalo[0]['utonev'];
					$_SESSION['userlevel'] = $felhasznalo[0]['jogosultsag'];
					Menu::setMenu();
					break;
				default:
					$retData['eredm�ny'] = "ERROR";
					$retData['uzenet'] = "T�bb felhaszn�l�t tal�ltunk a megadott felhaszn�l�i n�v -jelsz� p�rral!";
			}
		}
		catch (PDOException $e) {
					$retData['eredm�ny'] = "ERROR";
					$retData['uzenet'] = "Adatb�zis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
}

?>