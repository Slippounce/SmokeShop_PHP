<?php
//контроллер для списка товаров. проверяем корректность параметров и подключаем соответствующую модель
require "includes/lib.php";
require "includes/config.php";
// проверить параметры
if($_GET['id'] && !is_numeric($_GET['id'])){
    send404();
}
if($_GET['price-from'] && !is_numeric($_GET['price-from'])){
    send404();
}
if($_GET['price-to'] && !is_numeric($_GET['price-to'])){
    send404();
}
if($_GET['page'] && !is_numeric($_GET['page'])){
    send404();
}

require "application/models/catalog.php";

$pageCurrent = $_GET['page']?clearInt($_GET['page']):1;
$categories = selectAllCategories();
$news = selectSidebarNews();
$products = selectProducts(clearInt($_GET['cost-from']), clearInt($_GET['cost-to']), clearInt($_GET['id']), $pageCurrent);

if($categories === false || $news === false || $products === false){
    global $link;
    echo  mysqli_error($link);
    echo "ERROR!";
    exit;
}

//TODO: Как посчитать общее кол-во страниц, что делать если page > чем максимально возможное
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
            <h1 class="invisible">Каталог товаров</h1>
            <nav class="bread-crumbs-container">
                <ul class="bread-crumbs">
                    <li class="bread-crumb"><a class="bread-crumb__link" href="index.html">Главная</a></li>
                    <li class="bread-crumb bread-crumb_current">Каталог</li>
                </ul>
            </nav>
            <form class="search-filter" id="catalog-page__search-filter-1" method="GET">
                <span class="search-filter__item">
                    <label class="search-filter__label" for="cost-from">Цена</label>
                    <input class="search-filter__input" step="0.01" type="number" min="0" name="cost-from" id="cost-from" placeholder="от" value="<?= $_GET['cost-from']?>">
                </span>
                <span class="search-filter__item">
                    <label class="search-filter__label" for="cost-to">—</label>
                    <input class="search-filter__input" type="number" min="0" name="cost-to" id="cost-to" placeholder="до" value="<?= $_GET['cost-to']?>">
                </span>
                <input class="form-submit search-filter__apply" type="submit" value="Применить">
            </form>
            <ul class="categories categories__reposition">
                <?php

                $pageNumber = floor(count($products) / 6) + 1;
//                $products = array_slice($products, ($pageCurrent-1)*6, 6);
                foreach($products as $item){
                    ?>
                    <li class="category good-piece">
                        <a class="category__link" href="product.php?id=<?= $item['id']?>">
                            <img class="category__image good__image" src="<?= $item['image']?>" alt="category-image-1">
                            <span class="category__name-container good_name"><span class="category__name-inner"><?= $item['name']?></span></span>
                        </a>
                        <span class="good-price good_price"><?= $item['price']?> <small class="good-price__currency">руб.</small></span>
                    </li>
                    <?
                }
                ?>
					
            </ul>
            <ul class="paginator catalog-page__paginator">
                <?php

                $istart = 1;
                if($pageNumber > 7 && $pageCurrent - 3 > 1){
                    $istart = $pageCurrent - 3;
                }
                for ($i = $istart; $i <= $pageNumber && $i <= $istart + 6; $i++){
                    ?>
                    <li class="paginator__elem"><a href="<?=$_SERVER['QUERY_STRING']."catalog.php?page="."$i";?>" class="paginator__link"><?=$i?></a></li>
                    <?
                }
                ?>
                <!--                <li class="paginator__elem"><a href="#" class="paginator__link">1</a></li>-->
                <!--                <li class="paginator__elem"><a href="#" class="paginator__link">2</a></li>-->
                <!--                <li class="paginator__elem"><a href="#" class="paginator__link">3</a></li>-->
                <!--                <li class="paginator__elem paginator__elem_current"><span class="paginator__link">4</span></li>-->
                <!--                <li class="paginator__elem"><a href="#" class="paginator__link">5</a></li>-->
                <!--                <li class="paginator__elem"><a href="#" class="paginator__link">6</a></li>-->
                <!--                <li class="paginator__elem"><a href="#" class="paginator__link">7</a></li>-->
                <?php
                if($pageCurrent < $pageNumber){
                    ?>
                    <li class="paginator__elem paginator__elem_next"><a href="<?=$_SERVER['QUERY_STRING']."catalog.php?page=".strval($pageCurrent+1)?>" class="paginator__link">Следующая страница</a></li>
                    <?
                }
                ?>

            </ul>
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