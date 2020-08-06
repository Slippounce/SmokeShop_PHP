<?php
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}
?>

    <h1 class="invisible">Список новостей</h1>
    <nav class="bread-crumbs-container">
        <ul class="bread-crumbs">
            <li class="bread-crumb"><a class="bread-crumb__link" href="index.php">Главная</a></li>
            <li class="bread-crumb bread-crumb_current">Новости</li>
        </ul>
    </nav>
    <ul class="categories categories__reposition">
        <?php
        foreach($newsCatalog as $item){
            ?>
            <li class="news-item">
                <a class="news-item__link" href="news-detail.php?id=<?= $item['id']?>">
                    <?= $item['name']?>
                </a>
                <span class="news-item__date"><?= $item['date']?></span>
            </li>
            <?
        }
        ?>
    </ul>