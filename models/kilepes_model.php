<?php

class Kilepes_Model
{
	public function get_data()
	{
		$retData['eredm�ny'] = "OK";
		$retData['uzenet'] = "Visszontl�t�sra!";
		$_SESSION['userid'] =  0;
		$_SESSION['userlastname'] =  "";
		$_SESSION['userfirstname'] =  "";
		$_SESSION['userlevel'] = "1__";
		$_SESSION['username'] = "";
		Menu::setMenu();
		return $retData;
	}
}

?>