<?php require_once '../logic/db.php';?>
<?php
//Getting current post id.
$post_id = $_GET['post_id'];
//Checking if post id not number than exit.
if(!is_numeric($post_id))exit();
require_once 'head.php';
require_once '../logic/functions.php';
require_once 'header.php';
?>
<!-- Printing post with comments-->
<?php $new=get_post_by_id($post_id);?>
<div id="container">
    <div class="row">
        <div class="span8">
            <div class="row">
                <div class="span8">
                    <h3><strong><?= $new['title']?></strong></h3>
                </div>
            </div>
            <div class="row">
                <div class="span6">
                    <p>
                        <?= $new['text']?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="span8">
                    <p></p>
                    <p>
                        | <i class="icon-calendar"></i> <?=$new['date']?> <?= $new['time']?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php $comments=get_comments_by_post_id($post_id);?>
    <?php foreach ($comments as $comment): ?>
    <hr>
    <div class="row">
        <p>Author: <?=$comment['author']?></p>
        <p><?=$new['date']?> <?= $new['time']?></p>
        <p><?=$comment['text']?></p>
    </div>
    <hr>
    <?php endforeach;?>
</div>
<?php require_once 'add_comment.php' ?>