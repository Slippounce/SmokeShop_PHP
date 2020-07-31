<?php
require "includes/lib.php";
require "includes/config.php";
if(count($_GET) != 0){
    send404();
}
$categories = selectAllCategories();
$news = selectSidebarNews();
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}
?>

<?php
require "application/views/includes/template_header.php"
?>
        <main class="inside-content">
            <article class="about-article">
<!--                write something about company-->
                <h1>Текст о компании</h1>
                <p>Эта компания, эта компания, это хорошая компания</p>
            </article>
        </main>
<?php
require "application/views/includes/template_footer.php";
?>
