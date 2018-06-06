<?php
require_once 'db.php';
//Checking existence.
if(isset($_POST["author"])){$author=htmlspecialchars(trim($_POST["author"]));}
if(isset($_POST["text"])){$text=htmlspecialchars(trim($_POST["text"]));}
if(isset($_POST["date"])){$date=htmlspecialchars(trim($_POST["date"]));}
if(isset($_POST["time"])){$time=htmlspecialchars(trim($_POST["time"]));}
if(isset($_POST["post_id"])){$post_id=htmlspecialchars(trim($_POST["post_id"]));}
//Querying sql request and printing result.
$sql="INSERT INTO comments (author, text, date,time,post_id) VALUES ('$author','$text','$date','$time','$post_id')";
$result=$conn->query($sql);
?>
<div class="row">
    <p>Author: <?=$author?></p>
    <p><?=$date?> <?= $time?></p>
    <p><?=$text?></p>
    <hr>
</div>

