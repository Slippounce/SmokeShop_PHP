
<div class="sidebar">
    <section class="catalog">
        <h2 class="sidebar__headline">Каталог</h2>
        <ul class="catalog-list">
            <?php
            foreach($categories as $item){
                ?>
                <li class="catalog-list__item"><a class="catalog-list__link" href="catalog.php?id=<?= $item['id']?>"><?= $item['name']?></a></li>
                <?php
            }
            ?>
        </ul>
    </section>
    <section class="news">
        <h2 class="sidebar__headline news__headline">Новости</h2>
        <ul class="news-list">
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
        </ul>
        <span class="archive"><a class="archive__link" href="#">Архив новостей</a></span>
    </section>
</div>
</div>
</div>
<footer class="page-footer">
		<div class="wrapper page-footer__wrapper">
			<div class="copyright">
				<span class="copyright__part copyright__lifetime">Copyright ©2007-2010</span>
				<span class="copyright__part copyright__company-lifetime"><b>© "Company"</b>, 2010</span>
				<img class="copyright__image" src="img/logo.png" alt="Company-logo">
				<span class="copyright__part copyrhigt__company-name">Company</span>
			</div>
			<nav class="footer-nav">
				<ul class="footer-nav__list">
					<li class="footer-nav__list-item"><span class="footer-nav__link">Главная</span></li>
					<li class="footer-nav__list-item"><a class="footer-nav__link" href="catalog.html">Каталог</a></li>
					<li class="footer-nav__list-item"><a class="footer-nav__link" href="#">О компании</a></li>
					<li class="footer-nav__list-item"><a class="footer-nav__link" href="#">Новости</a></li>
					<li class="footer-nav__list-item"><a class="footer-nav__link" href="shipment.html">Доставка и оплата</a></li>
					<li class="footer-nav__list-item"><a class="footer-nav__link" href="contacts.html">Контакты</a></li>
				</ul>
			</nav>
			<div class="developer">
				<span class="developer__ref">Разработка сайта - <a class="developer__link" href="#">ITConstruct</a></span>
				<img class="counter" src="img/counter.png" alt="Page-counter">
			</div>
		</div>
	</footer>
</body>
</html>