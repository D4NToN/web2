<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-2">
        <title>Malvina szépségkuckója</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
    </head>
    <body>
        <header>
            <div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname'] ?></em></div>
            <h1 class="header">Malvina szépségkuckója</h1>
        </header>
        <nav>
            <?php echo Menu::getMenu($viewData['selectedItems']); ?>
        </nav>
        <aside>
                <p>"Minden nő vonzó, aki magával szemben igényes." <br><br> - Vastag Tamás</p>
        </aside>
        <section>
            <?php if($viewData['render']) include($viewData['render']); ?>
        </section>
        <footer>&copy; Dániel Benkő <?= date("Y") ?></footer>
    </body>
</html>
