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

	<?php 
		require "application/views/includes/template_header.php"
	?>
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

	<?php 
		require "application/views/includes/template_footer.php";
	?>