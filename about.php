<?php
require "includes/config.php";
require "includes/lib.php";
require "includes/dbconn.php";

$currentName = 'О компании';
$categories = selectAllCategories();
$news = selectSidebarNews();
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}
require "application/views/includes/template_header.php"
?>
            <article class="about-article">
<!--                write something about company-->
                <h1>Текст о компании</h1>
                <p>Эта компания, эта компания, это хорошая компания</p>
            </article>
<?php
require "application/views/includes/template_footer.php";
?>
