<h2>Regisztáció</h2>
<h3>Adja meg az adatait a regisztációhoz!</h3>

<form action="<?= SITE_ROOT ?>regisztral" method="post">
    <label for="login">Felhasználónév:</label><input type="text" name="reg_login" id="login"><br>
    <label for="password">Jelszó:</label><input type="password" name="reg_password" id="password"><br>
    <input type="submit" value="Küldés">
</form>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>