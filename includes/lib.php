<?php
//сюда можно сложить какие-то вспомогательные функции, функции для подключения к БД с возвратом дескриптора

function clearStr($data){
    global $link;
    $data = trim(strip_tags($data));
    return mysqli_real_escape_string($link, $data);
}	
function clearInt($data){
    return abs((int)$data);
}

function selectAllCategories(){
    global $link;
    $sql = 'Select * from categories';
    if(!$result = mysqli_query($link, $sql)){
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}

function selectSidebarNews(){
    global $link;
    $sql = 'select * from news order by date desc limit '.NEWS_ON_SIDEBAR;
    if(!$result = mysqli_query($link, $sql)){
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}






function send404(){
    header("Location: 404.php");
    exit();
}