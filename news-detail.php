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
require "application/views/includes/template_header.php";

require "application/views/news-detail.php";

require "application/views/includes/template_footer.php";
?>