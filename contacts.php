<?php
require "includes/lib.php";
require "includes/config.php";

//TODO:add parameters check

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //write into db
    header("Location: contacts.php?fc=true");
    putFeedback(clearStr($_POST['feedback-author']),clearStr($_POST['email']),
        clearStr($_POST['phone']),clearStr($_POST['feedback-text']));
    exit();
}
require "application/models/contacts.php"
?>
<?php
require "application/views/includes/template_header.php";
require "application/views/contacts.php";
require "application/views/includes/template_footer.php";
?>