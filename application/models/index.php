<?php
$currentName = 'Главная';
$categories = selectAllCategories();
$news = selectSidebarNews();
if($categories === false || $news === false){
echo "ERROR!";
exit;
}
