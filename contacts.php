<?php
require "includes/lib.php";
require "includes/config.php";
require "includes/dbconn.php";

//TODO:add parameters check
if(count($_GET) != 0){
    if(count($_GET) != 1 || !$_GET['fc']) {
        send404();
    }
}
require "application/models/contacts.php"
?>
<?php
require "application/views/includes/template_header.php";
require "application/views/contacts.php";
require "application/views/includes/template_footer.php";
?>