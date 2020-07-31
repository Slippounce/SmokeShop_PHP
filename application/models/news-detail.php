<?php
$categories = selectAllCategories();
$news = selectSidebarNews();
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}
$currentNew = getNewsById($_GET['id']);
?>