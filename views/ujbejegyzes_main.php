<h2>Poszt l�trehoz�sa:</h2>
<form action="<?= SITE_ROOT ?>bejegyez" method="post">
    <input type="text" name="comment_name" id="comment_name" value=""><br>
    <textarea name="comment_content" id="comment_content" cols="50" rows="2"></textarea><br>
    <input type="submit" value="K�ld�s">
</form>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
