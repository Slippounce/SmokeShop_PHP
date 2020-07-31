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


	<?php 
		require "application/views/includes/template_footer.php";
	?>