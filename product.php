<?php
require "includes/lib.php";
require "includes/config.php";
if($_GET['id']){
    $product = getProductById((int)$_GET['id']);
}else{
    send404();
}
$categories = selectAllCategories();
$news = selectSidebarNews();
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}

?>
<?php
require "application/views/includes/template_header.php";
require "application/views/product.php";
require "application/views/includes/template_footer.php";
?>
