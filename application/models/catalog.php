<?php
	foreach($categories as $item){
?>
	<li class="catalog-list__item"><a class="catalog-list__link" href="#"><?= $item['name']?></a></li>
<?php
	}
?>