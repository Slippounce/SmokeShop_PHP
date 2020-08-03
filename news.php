<?php
require "includes/config.php";
require "includes/lib.php";
require "includes/dbconn.php";
if(count($_GET) != 0){
	if(count($_GET) != 1 || !$_GET['page']) {
		send404();
	}
}
require "application/models/news.php";
?>

<?php
require "application/views/includes/template_header.php";
require "application/views/news.php";
require "application/views/includes/template_footer.php";
?>