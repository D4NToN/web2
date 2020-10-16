<?php


class Bejegyez_Model
{
    public function get_data($vars)
    {
        $retData['eredmeny'] = "";
        $userLastName = $_SESSION['userlastname'];
        $userFirstName = $_SESSION['userfirstname'];

        try {
            $connection = Database::getConnection();


            $sql = "INSERT INTO `comments`
                (`id`, `last_name`, `first_name`, `comment`)
                VALUES
                ('', '$userLastName', '$userFirstName', '".$vars['comment_content']."')";
            $stmt = $connection->query($sql);

            $retData['uzenet'] = "Sikeres bejegyzés!";
        }
        catch (PDOException $e){
            $retData['eredmény'] = "ERROR";
            $retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
        }
        return $retData;
    }
}