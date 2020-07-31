<?php
require "includes/lib.php";
require "includes/config.php";
//TODO: some argumants check?
if(count($_GET) != 0){
	send404();
}
require "application/models/index.php";

?>
<?php
require "application/views/includes/template_header.php";
require "application/views/index.php";
require "application/views/includes/template_footer.php";
?>

