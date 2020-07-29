<?php
   require "includes/lib.php";
	require "includes/config.php";
	$categories = selectAllCategories();
	$news = selectAllNews();
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
				<h1 class="invisible">Список новостей</h1>
				<nav class="bread-crumbs-container">
					<ul class="bread-crumbs">
						<li class="bread-crumb"><a class="bread-crumb__link" href="index.html">Главная</a></li>
						<li class="bread-crumb bread-crumb_current">Новости</li>
					</ul>
				</nav>
				<ul class="categories categories__reposition">
					<?php require "application/models/news.php"?>
				</ul>
<!--				<ul class="paginator catalog-page__paginator">-->
<!--					<li class="paginator__elem"><a href="#" class="paginator__link">1</a></li>-->
<!--					<li class="paginator__elem"><a href="#" class="paginator__link">2</a></li>-->
<!--					<li class="paginator__elem"><a href="#" class="paginator__link">3</a></li>-->
<!--					<li class="paginator__elem paginator__elem_current"><span class="paginator__link">4</span></li>-->
<!--					<li class="paginator__elem"><a href="#" class="paginator__link">5</a></li>-->
<!--					<li class="paginator__elem"><a href="#" class="paginator__link">6</a></li>-->
<!--					<li class="paginator__elem"><a href="#" class="paginator__link">7</a></li>-->
<!--					<li class="paginator__elem paginator__elem_next"><a href="#" class="paginator__link">Следующая страница</a></li>-->
<!--				</ul>-->
			</main>
			<div class="sidebar">
				<?php require "application/views/catalog.php"?>
				<?php include "application/views/news.php"?>
			</div>
		</div>
	</div>
	<?php 
		require "application/views/includes/template_footer.php";
	?>
</body>

</html>