<?php
require "includes/lib.php";
require "includes/config.php";
if(count($_GET) != 0){
	send404();
}
require "application/models/news.php";
?>

<?php
require "application/views/includes/template_header.php";
require "application/views/news.php";
require "application/views/includes/template_footer.php";
?>