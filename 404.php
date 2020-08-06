<?php
require "includes/config.php";
require "includes/lib.php";
require "includes/dbconn.php";
if(count($_GET) != 0){
    send404();
}
$currentName = "404";
$categories = selectAllCategories();
$news = selectSidebarNews();
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}
if(!count($categories) || !count($news)){
    echo "EMPTY!";
    exit;
}
require "application/views/includes/template_header.php"
?>

    <h1>Такой страницы не существует</h1>
    <a href="index.php">На главную</a>


<?php
require "application/views/includes/template_footer.php";
?>
