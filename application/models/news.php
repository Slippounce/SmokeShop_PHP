<?php
function selectNews($page){
    global $link;
    $sql = "select * from news order by date desc limit ".strval(($page-1)*NEWS_ON_PAGE)." , ".NEWS_ON_PAGE;
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
$newsCatalog = selectNews($_GET['page']?clearInt($_GET['page']):1);

