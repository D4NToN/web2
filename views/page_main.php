<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-2">
        <title>Malvina sz�ps�gkuck�ja</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
    </head>
    <body>
        <header>
            <div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname'] ?></em></div>
            <h1 class="header">Malvina sz�ps�gkuck�ja</h1>
        </header>
        <nav>
            <?php echo Menu::getMenu($viewData['selectedItems']); ?>
        </nav>
        <aside>
                <p>"Minden n� vonz�, aki mag�val szemben ig�nyes." <br><br> - Vastag Tam�s</p>
        </aside>
        <section>
            <?php if($viewData['render']) include($viewData['render']); ?>
        </section>
        <footer>&copy; D�niel Benk� <?= date("Y") ?></footer>
    </body>
</html>
