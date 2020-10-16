<html>
<head>
    <meta charset="UTF-8">
</head>

<?php
    $aVar = mysqli_connect('localhost','web2bead','T0mc4t','web2bead');
    $sql = mysqli_query($aVar, "SELECT * FROM comments");

    while ($row = mysqli_fetch_assoc($sql))
    {
        $comment_lastName = $row['last_name'];
        $comment_firstName = $row['first_name'];
        $comment = $row['comment'];
        $date = $row['date'];

        echo "$comment_lastName $comment_firstName:<br> $comment<br> $date<p><br>";
    }

    if(isset($_GET['error']))
    {
        echo "<p>100 Character Limit";
    }

?>

</html>
