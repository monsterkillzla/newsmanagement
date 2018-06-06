<?php
require_once 'db.php';
//Checking existence.
if(isset($_POST["title"])){$title=htmlspecialchars(trim($_POST["title"]));}
if(isset($_POST["text"])){$text=htmlspecialchars(trim($_POST["text"]));}
if(isset($_POST["post_id"])){$post_id=htmlspecialchars(trim($_POST["post_id"]));}
//Querying sql request and printing result.
$sql="UPDATE news SET title='$title',text='$text' WHERE id='$post_id'";
$result=$conn->query($sql);
?>
<?php if(result) {?>
<h3>Success!</h3>
<span><a href="/parts/post.php?post_id=<?=$post_id?>">Go to new page! </a></span>
<?php } else {?>
    <h1>FAILED</h1>
<?php }?>
