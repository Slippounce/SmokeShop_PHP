<?php
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}
?>

    <h1 class="invisible">Company - Электронные сигареты</h1>
    <ul class="categories">
        <?php
        foreach($categories as $category){
            ?>
            <li class="category">
                <a class="category__link" href="catalog.php?id=<?=$category['id']?>">
                    <img class="category__image" src="<?= $category['image']?>" alt="category-image-1">
                    <span class="category__name-container"><span class="category__name-inner"><?= $category['name']?></span></span>
                </a>
            </li>
            <?
        }
        ?>
    </ul>