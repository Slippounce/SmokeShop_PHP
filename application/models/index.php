<?php
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