<?php
//Getting current post id.
$post_id=$_GET['post_id'];?>
<!-- Edit post form -->
<form action="../logic/edit_post_action.php" method="post">
    <p>Заголовок новости: <input type="text" name="title" /></p>
    <p>Текст: <textarea cols="40" rows="10" name="text"></textarea></p>
    <input type="hidden" name="post_id" value="<?=$post_id?>">
    <p><input type="submit" /></p>
</form>
<!-- Return to main page -->
<a href="index.php">Go to main page!</a>