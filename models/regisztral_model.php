<?php

class Regisztral_Model
{
	public function get_data($vars)	
	{
		$retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();
			$sql = "INSERT INTO felhasznalok (id, csaladi_nev, utonev, bejelentkezes, jelszo, jogosultsag) "
				. "VALUES ('0', '0', '0', '0', '$password', '_1_')";
			$stmt = $connection->query($sql);
			$felhasznalo = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
}

?>