<!-- Add post form -->
<form method="post" id="form_add_post">
    <p>Header: <input type="text" name="title" id="title"/></p>
    <p>Text: <textarea cols="40" rows="10" name="text" id="text"></textarea></p>
    <input type="hidden" name="date" value="<?php echo date('Y-m-d')?>" id="date"/>
    <input type="hidden" name="time" value="<?php echo date('H:i:s')?>" id="time"/>
    <p><input type="submit" value="Add post" id="submit"></p>
</form>