<?php
require "includes/lib.php";
require "includes/config.php";
require "includes/dbconn.php";
if(!$_GET['id'] || !is_numeric($_GET['id'])){
    send404();
}
require "application/models/product.php";
?>
<?php
require "application/views/includes/template_header.php";
require "application/views/product.php";
require "application/views/includes/template_footer.php";
?>
