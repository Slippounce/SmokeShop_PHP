<?php
	require "includes/lib.php";
	require "includes/config.php";
	$categories = selectAllCategories();
	$news = selectSidebarNews();
	if($categories === false || $news === false){
		echo "ERROR!";
		exit;
	}
	if(!count($categories) || !count($news)){
		echo "EMPTY!";
		exit;
	}

?>
	<?php 
		require "application/views/includes/template_header.php"
	?>
			<main class="categories">
				<h1 class="invisible">Company - Электронные сигареты</h1>
				<ul class="categories">
				<?php
				foreach($categories as $category){
				?>
					<li class="category">
						<a class="category__link" href="#">
							<img class="category__image" src="<?= $category['image']?>" alt="category-image-1">
							<span class="category__name-container"><span class="category__name-inner"><?= $category['name']?></span></span>
						</a>
					</li>
				<?
				}
				?>
				</ul>
			</main>

	<?php 
		require "application/views/includes/template_footer.php";
	?>


</html>