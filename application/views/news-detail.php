<?php
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}
?>

    <h1 class="contacts-page__main-headline"><?= $currentNew['name']?></h1>
    <p><?= $currentNew['announcement']?></p>
    <p>
        <?= $currentNew['description']?>
    <p>
    <p><?= $currentNew['date']?></p>
