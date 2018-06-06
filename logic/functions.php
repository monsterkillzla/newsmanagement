<?php require_once "config.php";?>
<?php
//Get news function.
function get_news(){
    global $conn;
    if(!isset($_GET['page'])){
        $page=1;
    }else{
        $page=$_GET['page'];
    }
    $counter_news=($page-1)*NEWS_PER_PAGE;
    $sql = "SELECT * FROM news LIMIT ".$counter_news .",".NEWS_PER_PAGE;
    $result = $conn->query($sql);
    $news=$result->fetchAll(PDO::FETCH_ASSOC);
    return $news;
}
//Get post by id function.
function get_post_by_id($post_id){
    global $conn;
    $sql = "SELECT * FROM news WHERE id=".$post_id;
    $result=$conn->query($sql);
    $news=$result->fetch(PDO::FETCH_ASSOC);
    return $news;
}
//Get comments by post id function.
function get_comments_by_post_id($post_id){
    global $conn;
    $sql = "SELECT * FROM comments WHERE post_id=".$post_id;
    $result=$conn->query($sql);
    $comments=$result->fetchAll(PDO::FETCH_ASSOC);
    return $comments;
}
//Get total news count.
function get_news_count(){
    global $conn;
    $sql = "SELECT * FROM news";
    $result = $conn->query($sql);
    $count=$result->rowCount();
    return $count;
}

