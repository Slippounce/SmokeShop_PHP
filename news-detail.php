<?php
require "includes/config.php";
require "includes/lib.php";
require "includes/dbconn.php";
if($_GET['id'] && (!is_numeric($_GET['id']) || (int)$_GET['id'] < 0 || !ctype_digit( $_GET['id']))){
    send404();
}
require "application/models/news-detail.php";
require "application/views/includes/template_header.php";
require "application/views/news-detail.php";
require "application/views/includes/template_footer.php";
