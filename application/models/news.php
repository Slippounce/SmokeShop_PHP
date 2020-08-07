<?php
function selectNews(){
    global $link;
    $sql = "select * from news order by date desc";
    if(!$result = mysqli_query($link, $sql)){
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}
$currentName = 'Новости';
$categories = selectAllCategories();
$news = selectSidebarNews();
$newsByRequest = selectNews();

$newsCatalog = array_slice($newsByRequest,  (($_GET['page']?clearInt($_GET['page']):1)-1)*NEWS_ON_PAGE , NEWS_ON_PAGE);


