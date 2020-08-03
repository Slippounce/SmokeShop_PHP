<?php
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>