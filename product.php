<?php
require "includes/lib.php";
require "includes/config.php";
if($_GET['id']){
    $product = getProductById((int)$_GET['id']);
}else{
    send404();
}
require "application/models/product.php";
?>
<?php
require "application/views/includes/template_header.php";
require "application/views/product.php";
require "application/views/includes/template_footer.php";
?>
