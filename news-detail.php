<?php
require "includes/lib.php";
require "includes/config.php";

$categories = selectAllCategories();
$news = selectSidebarNews();
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}

$currentNew = getNewsById($_GET['id']);

?>

<?php
require "application/views/includes/template_header.php"
?>
        <main class="inside-content">
            <h1 class="contacts-page__main-headline"><?= $currentNew['name']?></h1>
            <p><?= $currentNew['announcement']?></p>
            <p>
            <?= $currentNew['description']?>
            <p>
            <p><?= $currentNew['date']?></p>
        </main>

<?php
require "application/views/includes/template_footer.php";
?>