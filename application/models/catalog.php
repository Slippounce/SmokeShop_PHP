<?php
$pageCurrent = $_GET['page']?clearInt($_GET['page']):1;
$categories = selectAllCategories();
$news = selectSidebarNews();
$products = selectProducts(clearInt($_GET['cost-from']), clearInt($_GET['cost-to']), clearInt($_GET['id']), $pageCurrent);

if($categories === false || $news === false || $products === false){
global $link;
echo  mysqli_error($link);
echo "ERROR!";
exit;
}
?>





