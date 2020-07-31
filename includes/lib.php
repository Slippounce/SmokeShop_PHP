<?php
//сюда можно сложить какие-то вспомогательные функции, функции для подключения к БД с возвратом дескриптора
require "includes/config.php";
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

function selectProducts($costFrom, $costTo, $categoryId, $page){
//    echo "costFrom = $costFrom, costTo = $costTo, categoryId = $categoryId, page = $page";
    global $link;
    $sql = "select id, name, image, price, description, main_category_id from products ";
    if($categoryId){
        $sql = $sql." inner join `product-category` on products.id = `product-category`.product_id ";
    }
    if($costFrom || $costTo || $categoryId){
        $sql = $sql." where ";
        $addAnd = false;
        if($costFrom){
            $sql = $sql."price >= $costFrom";
            if(!$addAnd){
                $addAnd = true;
            }
        }
        if($costTo){
            if($addAnd){
                $sql = $sql." and ";
            }
            $sql = $sql."price <= $costTo";
            if(!$addAnd){
                $addAnd = true;
            }
        }
        if($categoryId){
            if($addAnd){
                $sql = $sql." and ";
            }
            $sql = $sql."category_id = $categoryId ";

        }
    }
    $sql = $sql." limit ".strval(($page-1)*PRODUCTS_ON_PAGE)." , ".PRODUCTS_ON_PAGE;
//    echo "sql = ".$sql;
    if(!$result = mysqli_query($link, $sql)){
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}

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





function send404(){
    header("Location: 404.php");
    exit();
}