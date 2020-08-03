<?php
require "includes/lib.php";
require "includes/config.php";
require "includes/dbconn.php";
if(count($_GET) != 0){
    send404();
}
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

?>

<?php
require "application/views/includes/template_header.php"
?>
<main class="categories">
    <h1>Такой страницы не существует</h1>
    <a href="index.php">На главную</a>
</main>

<?php
require "application/views/includes/template_footer.php";
?>
