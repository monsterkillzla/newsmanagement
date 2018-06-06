<?php
require_once 'db.php';
require_once 'functions.php';
//Checking existence.
if(isset($_POST["title"])){$title=htmlspecialchars(trim($_POST["title"]));}
if(isset($_POST["text"])){$text=htmlspecialchars(trim($_POST["text"]));}
if(isset($_POST["date"])){$date=htmlspecialchars(trim($_POST["date"]));}
if(isset($_POST["time"])){$time=htmlspecialchars(trim($_POST["time"]));}
//Querying sql request and printing result.
$sql="INSERT INTO news (title, date, text,time) VALUES ('$title','$date','$text','$time')";
$result=$conn->query($sql);
$id = get_news_count()?>
<?php if($id%6==0){ exit;//If already 5 posts on page than do nothing.?>

<?php }else{ //If lower than 5 print new post.?>
<div class="row">
    <div class="span8">
        <div class="row">
            <div class="span8">
                <h4><strong><a href="../parts/post.php?post_id=<?= $id?>"><?= $title?></a></strong></h4>
            </div>
        </div>
        <div class="row">
            <div class="span6">
                <p>
                    <?= mb_substr($text,0,125,'UTF-8').'...'?>
                </p>
                <p><a class="btn" href="../parts/post.php?post_id=<?= $id?>">Read more</a></p>
                <p><a class="btn" href="../parts/edit_post.php?post_id=<?= $id?>">Edit</a></p>
            </div>
        </div>
        <div class="row">
            <div class="span8">
                <p></p>
                <p>
                    | <i class="icon-calendar"></i> <?=$date?> <?= $time?>
                </p>
            </div>
        </div>
    </div>
</div>
<hr>
<?php }; ?>

