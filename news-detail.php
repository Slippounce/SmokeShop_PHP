<?php
require "includes/lib.php";
require "includes/config.php";

$categories = selectAllCategories();
$news = selectAllNews();
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}

$currentNew = getNewsById($_GET['id']);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="alternate" href="https://allfont.ru/allfont.css?fonts=arial-narrow">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <title>Company - Интернет-магазин электронных сигарет</title>
</head>

<body>
<?php
require "application/views/includes/template_header.php"
?>
<div class="content">
    <div class="wrapper content__wrapper">
        <main class="inside-content">
            <h1 class="contacts-page__main-headline"><?= $currentNew['name']?></h1>
            <p><?= $currentNew['announcement']?></p>
            <p>
            <?= $currentNew['description']?>
            <p>
            <p><?= $currentNew['date']?></p>
        </main>
        <div class="sidebar">
            <?php require "application/views/catalog.php"?>
            <?php require "application/views/news.php"?>
        </div>
    </div>
</div>
<?php
require "application/views/includes/template_footer.php";
?>
</body>

</html>