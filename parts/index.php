<?php require_once '../logic/db.php';?>
<!DOCTYPE html>
<html>
<head>
    <!-- Connect html head -->
    <?php require_once 'head.php';?>
</head>
<body>
    <!-- Checking if url have not page id, than current page main and first-->
    <?php if (!isset($_GET['page'])): $_GET['page']=1; endif;?>
    <!-- Connect header -->
    <?php require_once 'header.php';?>
    <!-- Container contains all posts-->
    <div id="container">
        <!-- Printing all posts -->
        <?php require_once '../logic/print_news.php';?>
    </div>
    <!-- Connect footer -->
    <?php require_once  'footer.php';?>
</body>
</html>