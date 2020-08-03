<?php
function getNewsById($id){
    global $link;
    $sql = "select * from news where id = $id";
    if(!$result = mysqli_query($link, $sql)){
        return false;
    }
    $item = mysqli_fetch_array($result);
    //mysqli_free_result($result);
    return $item;
}
$currentName = 'Новости';
$categories = selectAllCategories();
$news = selectSidebarNews();
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}
$currentNew = getNewsById($_GET['id']);
?>