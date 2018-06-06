<!-- Add comment form -->
<form method="post" id="form_add_comment">
    <p>Author: <input type="text" name="author" id="author"/></p>
    <p>Text: <textarea cols="40" rows="10" name="text" id="text"></textarea></p>
    <input type="hidden" name="date" value="<?= date('Y-m-d')?>" id="date"/>
    <input type="hidden" name="time" value="<?= date('H:i:s')?>" id="time"/>
    <input type="hidden" name="post_id" value="<?=$_GET['post_id']?>" id="post_id"/>
    <p><input type="submit" value="Add post" id="submit"></p>
</form>