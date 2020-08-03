<?php
require "includes/config.php";
require "includes/lib.php";
require "includes/dbconn.php";

//TODO:add parameters check

require "application/models/contacts.php";
require "application/views/includes/template_header.php";
require "application/views/contacts.php";
require "application/views/includes/template_footer.php";
