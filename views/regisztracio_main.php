<h2>Regisztráció</h2>
<form action="<?= SITE_ROOT ?>regisztral" method="post">
    <label for="login">Felhasználó:</label><input type="text" name="login" id="login" required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
    <label for="lastName">Vezetéknév:</label><input type="text" name="lastName" id="lastName"><br>
    <label for="firstName">Keresztnév:</label><input type="text" name="firstName" id="firstName"><br>
    <label for="password">Jelszó:</label><input type="password" name="password" id="password" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
    <input type="submit" value="Küldés">
</form>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
