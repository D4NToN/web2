<h2>Poszt l�trehoz�sa:</h2>
<form action="<?= SITE_ROOT ?>bejegyez" method="post">
    <textarea name="comment_content" id="comment_content" cols="50" rows="2"></textarea><br>
    <input type="submit" value="K�ld�s">
</form>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
