<?php
	require "includes/lib.php";
	require "includes/config.php";
	//TODO: some argumants check?
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
		require "application/views/includes/template_header.php";
        require "application/views/index.php";
        require "application/views/includes/template_footer.php";
	?>

