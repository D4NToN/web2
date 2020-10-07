<?php


class Bejegyez_Model
{
    public function get_data($vars)
    {
        $retData['eredmeny'] = "";

        try {
            $connection = Database::getConnection();


            $sql = "INSERT INTO `comments`
                (`id`, `name`, `comment`)
                VALUES
                ('', '".$vars['comment_name']."', '".$vars['comment_content']."')";
            $stmt = $connection->query($sql);

            $retData['uzenet'] = "Sikeres bejegyzés!";
        }
        catch (PDOException $e){
            $retData['eredmény'] = "ERROR";
            $retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
        }
        return $retData;
    }

//('', '".$vars['comment_name']."', '".$vars['comment_content']."')";
}