<?php include_once "functions.php"; require_once "config.php";?>
<?php
//Getting all posts and print them.
$news=get_news() ?>
<?php foreach ($news as $new): ?>
<div class="row">
    <div class="span8">
        <div class="row">
            <div class="span8">
                <h4><strong><a href="../parts/post.php?post_id=<?= $new['id']?>"><?= $new['title']?></a></strong></h4>
            </div>
        </div>
        <div class="row">
            <div class="span6">
                <p>
                    <?= mb_substr($new['text'],0,125,'UTF-8').'...'?>
                </p>
                <p><a class="btn" href="../parts/post.php?post_id=<?= $new['id']?>">Read more</a></p>
                <p><a class="btn" href="../parts/edit_post.php?post_id=<?= $new['id']?>">Edit</a></p>
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
<hr>
<?php endforeach;?>

