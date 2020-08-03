<?php

function getProductById($id){
    global $link;
    $sql = "select * from products where products.id = $id";
    if(!$result = mysqli_query($link, $sql)){
        return false;
    }
    $item = mysqli_fetch_array($result);
    //mysqli_free_result($result);
    return $item;
}


$product = getProductById((int)$_GET['id']);
if(!$product){
    send404();
}
$currentName = 'Каталог';
$categories = selectAllCategories();
$news = selectSidebarNews();
if($categories === false || $news === false){
echo "ERROR!";
exit;
}
