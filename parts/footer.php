<?php include_once "../logic/functions.php"; require_once "../logic/config.php";
//Calculating amount of pages.
$total_count=get_news_count();
$len=floor(($total_count/NEWS_PER_PAGE)-0.1)?>
<!-- Printing footer (paginator)-->
<footer>
<?php for($i=0; $i<=$len;$i++){?>
    <?php if($_GET['page']==$i+1 ) : ?><a href="?page=<?= $i+1?>">[<?= $i+1?>]</a>
    <?php else: ?><a href="?page=<?= $i+1?>"><?= $i+1?></a>
    <?php endif; ?>
<?php } ?>
</footer>
