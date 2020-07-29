<?php
	foreach($news as $item){
?>
	<li class="news-item">
		<a class="news-item__link" href="news-detail.php?id=<?= $item['id']?>">
			<?= $item['name']?>
		</a>
	<span class="news-item__date"><?= $item['date']?></span>
	</li>
<?
	}
?>