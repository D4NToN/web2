<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    setTimeout(() => {
        window.location.reload(true);
    }, 5000);
</script>
<div id="div_refresh">

    <h3>Bejegyzések:</h3>

    <?php

        $aVar = mysqli_connect('localhost','root','','web2');
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
</div>
