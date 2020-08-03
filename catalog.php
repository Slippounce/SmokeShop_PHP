<?php
//контроллер для списка товаров. проверяем корректность параметров и подключаем соответствующую модель
require "includes/config.php";
require "includes/lib.php";
require "includes/dbconn.php";
// проверить параметры
if($_GET['id'] && !is_numeric($_GET['id'])){
    send404();
}
if($_GET['price-from'] && !is_numeric($_GET['price-from'])){
    send404();
}
if($_GET['price-to'] && !is_numeric($_GET['price-to'])){
    send404();
}
if($_GET['page'] && !is_numeric($_GET['page'])){
    send404();
}

require "application/models/catalog.php";
require "application/views/includes/template_header.php";
require "application/views/catalog.php";
require "application/views/includes/template_footer.php";
?>
