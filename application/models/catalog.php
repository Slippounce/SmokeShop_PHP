<?php
function selectProducts($costFrom, $costTo, $categoryId, $page){
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
    if(!$result = mysqli_query($link, $sql)){
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $items;
}
$currentName = 'Каталог';
$pageCurrent = $_GET['page']?clearInt($_GET['page']):1;
$categories = selectAllCategories();
$news = selectSidebarNews();
$products = selectProducts(clearInt($_GET['cost-from']), clearInt($_GET['cost-to']), clearInt($_GET['id']), $pageCurrent);




