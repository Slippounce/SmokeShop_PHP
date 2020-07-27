<?php
	foreach($news as $item){
?>
	<li class="news-item">
		<a class="news-item__link" href="#">
			<?= $item['name']?>
		</a>
	<span class="news-item__date"><?= $item['date']?></span>
	</li>
<?
	}
?>