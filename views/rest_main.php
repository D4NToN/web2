<?php

require_once (SERVER_ROOT . 'config.php');

class API
{
    function Select()
    {
        $db = new Connect();
        $users = array();
        $data = $db->prepare('SELECT * FROM comments');
        $data->execute();

        while ($OutputData = $data->fetch(PDO::FETCH_ASSOC))
        {
            $users[$OutputData['id']] = array(
            'id'    => $OutputData['id'],
            'name'    => $OutputData['name'],
            'comment'    => $OutputData['comment'],
            'date'    => $OutputData['date']
            );
        }
        return json_encode($users);
    }
}

$API = new API;
header('Content-Type: application/json');
echo $API->Select();

?>