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

            $retData['uzenet'] = "Sikeres bejegyz�s!";
        }
        catch (PDOException $e){
            $retData['eredm�ny'] = "ERROR";
            $retData['uzenet'] = "Adatb�zis hiba: ".$e->getMessage()."!";
        }
        return $retData;
    }

//('', '".$vars['comment_name']."', '".$vars['comment_content']."')";
}