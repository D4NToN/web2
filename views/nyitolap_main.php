<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function () {
        $("#div_refresh").load("Views/komment_betoltes_main.php");
    });

    setInterval(function () {
        $("#div_refresh").load("Views/komment_betoltes_main.php");
    }, 1000);
</script>
<h3>Bejegyzések:</h3>
<div id="div_refresh">

</div>
