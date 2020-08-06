<?php
if($categories === false || $news === false || $products === false){
    global $link;
    echo  mysqli_error($link);
    echo "ERROR!";
    exit;
}
?>
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
                    <input class="search-filter__input" step="0.01" type="number" min="0" name="cost-from" id="cost-from" placeholder="от" value="<?= clearInt($_GET['cost-from'])?>">
                </span>
        <span class="search-filter__item">
                    <label class="search-filter__label" for="cost-to">—</label>
                    <input class="search-filter__input" type="number" min="0" name="cost-to" id="cost-to" placeholder="до" value="<?= clearInt($_GET['cost-to'])?>">
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
            <li class="paginator__elem"><a href="<?="catalog.php?page="."$i";?>" class="paginator__link"><?=$i?></a></li>
            <?
        }
        ?>
        <?php
        if($pageCurrent < $pageNumber){
            ?>
            <li class="paginator__elem paginator__elem_next"><a href="<?="catalog.php?page=".strval($pageCurrent+1)?>" class="paginator__link">Следующая страница</a></li>
            <?
        }
        ?>
    </ul>


