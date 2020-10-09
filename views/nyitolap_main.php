<head>
    <meta http-equiv="refresh" content="5">
</head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    
</script>
<div id="div_refresh">

    <h3>Bejegyzések:</h3>

    <?php

        $aVar = mysqli_connect('localhost','root','','web2');
        $sql = mysqli_query($aVar, "SELECT * FROM comments");

        while ($row = mysqli_fetch_assoc($sql))
        {
            $comment_name = $row['name'];
            $comment = $row['comment'];
            $date = $row['date'];

            echo "$comment_name - $comment - $date<p>";
        }

        if(isset($_GET['error']))
        {
            echo "<p>100 Character Limit";
        }

    ?>
</div>
