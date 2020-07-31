<?php
require "includes/lib.php";
require "includes/config.php";
$categories = selectAllCategories();
$news = selectSidebarNews();
if($categories === false || $news === false){
    echo "ERROR!";
    exit;
}
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
            <article class="about-article">
<!--                <h1>Доставка</h1>-->
<!--                <p><b>Уважаемые покупатели!</b></p>-->
<!--                <p>-->
<!--                    Оплатить свой заказ Вы можете любым из следующих способов:-->
<!--                </p>-->
<!--                <ol>-->
<!--                    <li>Оплата наличными курьеру (в Москве в пределах МКАД)</li>-->
<!--                    <li>Оплата с помощью Яндекс.Деньги</li>-->
<!--                    <li>Оплата по безналичному расчету</li>-->
<!--                    <li>Оплата по квитанции Сбербанка РФ или другого коммерческого банка.</li>-->
<!--                </ol>-->
<!--                <p>В двух последних случаях мы выписываем Вам счет, который Вы получаете по электронной почте после подтверждения-->
<!--                    Вашего заказа. После получения денег, мы в течение 2-3 рабочих дней доставляем Вам товар с помощью транспортных-->
<!--                    компаний "СПСР" и "Грузовозофф" (по РФ), а так же по желанию "Почтой РФ". Стоимость доставки по РФ-->
<!--                    согласовывается с Вами и включается в стоимость счета.</p>-->
<!--                <p>Доставка по Москве осуществляется на следующий день после согласования заказа.</p>-->
<!--                <p>Стоимость курьерской доставки по Москве составляет <b>250 р.</b></p>-->
<!--                <p>Доставка по Москве крупногабаритных товаров (от 5 кг) - <b>300 р.</b></p>-->
<!--                <p>Доставка за пределы МКАД - по договоренности</p>-->
<!--                <p><i>Также, Вы имеете возможность приобрести товары в нашем шоу-руме на м.Сходненская</i></p>-->
            </article>
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