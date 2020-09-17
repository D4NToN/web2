<?php

class Regisztral_Model
{
	public function get_data($vars)
	{
		$user = $_POST['reg_login'];
		$pass = $_POST['reg_password'];
		$code = "_1_";

		if(!empty($user) || !empty($pass) || !empty($code)){
			$host = "localhost";
			$dbUsername = "root";
			$dbPass = "";
			$dbName = "web2";

			// Create connection.
			$conn = new mysqli($host, $dbUsername, $dbPass, $dbName);

			if(mysqli_connect_error()){
				die('Connect error('. mysqli_connect_errno().')'. mysqli_conenct_error());
			}
			else{
				$INSERT = "INSERT INTO felhasznalok (bejelentkezes, jelszo, jogosultsag) VALUES ($user, $pass, $code)";
				$stmt = $conn->prepare($INSERT);
				$stmt->execute();
				$stmt->close();
			}
		}
		else{
			echo "Hiányos kitöltés";
			die();
		}

		/*
		$retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();
			$user = $vars['login'];
			$pass = $vars['password'];
			$hashed = sha1.($pass);
			$code = "_1_";
			$sql = "INSERT INTO felhasznalok (bejelentkezes, jelszo, jogosultsag) VALUES ($user, $hashed, $code);"
			$stmt = $connection->query($sql);
			$felhasznalo = $stmt->fetchAll(PDO::FETCH_ASSOC);
			switch(count($felhasznalo)) {
				case 0:
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Sikertelen regisztráció!";
					break;
				case 1:
					$retData['eredmény'] = "OK";
					$retData['uzenet'] = "Kedves ".$felhasznalo[0]['csaladi_nev']." ".$felhasznalo[0]['utonev']."!<br><br>
					                      Jó munkát kívánunk rendszerünkkel.<br><br>
										  Az üzemeltetők";
					$_SESSION['userid'] =  $felhasznalo[0]['id'];
					$_SESSION['userlastname'] =  $felhasznalo[0]['csaladi_nev'];
					$_SESSION['userfirstname'] =  $felhasznalo[0]['utonev'];
					$_SESSION['userlevel'] = $felhasznalo[0]['jogosultsag'];
					Menu::setMenu();
					break;
				default:
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Több felhasználót találtunk a megadott felhasználói név -jelszó párral!";
			}
		}
		catch (PDOException $e) {
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;*/
	}
}

?>