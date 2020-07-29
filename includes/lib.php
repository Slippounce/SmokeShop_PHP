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

function selectAllNews(){
    global $link;
    $sql = 'select * from news order by date desc limit 10';
    if(!$result = mysqli_query($link, $sql)){
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}

function selectProducts($costFrom, $costTo, $categoryId){
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
            $sql = $sql."category_id = $categoryId";

        }
    }
//    if($costFrom && $costTo){
//        $sql = $sql."price >= $costFrom and price <= $costTo";
//    }else{
//        if($costFrom){
//            $sql = $sql." price => $costFrom";
//        }
//        if($costTo){
//            $sql = $sql." price <= $costTo";
//        }
//    }
    if(!$result = mysqli_query($link, $sql)){
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}

function getProductByCategory($category_id){
    global $link;
    $sql = "select * from products inner join `product-category` on products.id = `product-category`.product_id where category_id = $category_id";
    if(!$result = mysqli_query($link, $sql)){
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}

function selectAllProducts(){
    global $link;
    $sql = 'select * from products';
    if(!$result = mysqli_query($link, $sql)){
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}

function selectProductsFilteredByPrice($costFrom, $costTo){
    global $link;
    $sql = "select id, name, image, price, description, main_category_id from products where ";
    if($costFrom && $costTo){
        $sql = $sql."price >= $costFrom and price <= $costTo";
    }else{
        if($costFrom){
            $sql = $sql." price => $costFrom";
        }
        if($costTo){
            $sql = $sql." price <= $costTo";
        }
    }
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

function putFeedback($name, $email, $phone, $request_text){
    global $link;
    $sql = "insert into feedbacks (name, email, phone, request_text) values('$name', '$email', '$phone', '$request_text')";
    if(!$result = mysqli_query($link, $sql)){
        echo mysqli_error($link);
        return false;
    }
    return true;
}