<?php include "header.php";?>
	<div class="wrapper">
        <div class="breadcrumbs">
            <a href="index.php">Главная</a>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span>Каталог</span>
        </div>
		<div class="aside-wrapper">
			<?php include "aside.php";?>
			<div class="container-content">
				<div class="search-container">
					<a href="#" class="map-search">Поиск на карте</a>
					<form class="search-content" action="">
						<input type="text" name="search" id="search" placeholder="Я ищу...">
						<button>Найти</button>
					</form>
				</div>
				<div class="taxonomy-content">
					<h1>Каталог</h1>
					<form action="" class="sort">
						<label for="sorting">Сортировать</label>
						<select name="sorting" id="sortting">
							<option value="popular">По популярности</option>
							<option value="price">По цене</option>
							<option value="date">По дате</option>
                        </select>
                        <div>
                            <input type="checkbox" name="shares" id="shares">
                            <label for="shares">Акции</label>
                            <input type="checkbox" name="discounts" id="discounts">
                            <label for="discounts">Скидки</label>
                            <input type="checkbox" name="installments" id="installments">
                            <label for="installments">Рассрочки</label>
                            <input type="checkbox" name="sales" id="sales">
                            <label for="sales">Распродажи</label>
                        </div>
					</form>
					<span class="hr"></span>
					<div class="taxonomy-products catalog masonry">
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_1.jpg" alt=""></div>
                            <div class="products__title">Новая коллекция кед Dislabel по низким ценам до 26 мая</div>
                        </div>
                        <div class="products__item discount">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale green"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/disc_1.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                            <div class="products__descr">Блины со сладкой, лёгкой или сытной начинкой, ароматные горячие супы и салаты из свежих овощей — сеть ресторанов «Теремок» приглашает пообедать быстро и вкусно. </div>
                            <span class="hr"></span>
							<div class="products__date">16 ноября 2017 – 16 января 2018 9:00–22:30</div>
							<span class="hr"></span>
							<div class="products__subinfo"><span class="comments">12</span><span class="likes">12</span></div>
							<div class="products__get-sales"><a href="#">Получить скидку</a></div>
                        </div>
                        <div class="products__item sale">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale green"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/sale_5.jpg" alt=""></div>
							<div class="products__title">Пылесос puppyoo WP606</div>
							<div class="products__price">914 руб.</div>
							<div class="products__old-price">3900 руб.</div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_9.jpg" alt=""></div>
                            <div class="products__title">Где попробовать новые блюда со скидкой -50%</div>
                            <div class="products__subinfo"><span class="comments">12</span><span class="likes">12</span><span class="views">1250</span></div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_6.jpg" alt=""></div>
                            <div class="products__title">Акция 1+1 купи часы Apple Watch и получи спортивный ремешок бесплатно</div>
                        </div>
                        <div class="products__item sale">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale fillet"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/sale_6.jpg" alt=""></div>
							<div class="products__title">Пылесос puppyoo WP606</div>
							<div class="products__price">914 руб.</div>
							<div class="products__old-price">3900 руб.</div>
                        </div>
                        <div class="products__item share top">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_4.jpg" alt=""></div>
                            <div class="products__title">Акция от Diamant -35% на все товары</div>
                        </div>
                        <div class="products__item sale">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale fillet"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/sale_2.jpg" alt=""></div>
							<div class="products__title">Пылесос puppyoo WP606</div>
							<div class="products__price">914 руб.</div>
							<div class="products__old-price">3900 руб.</div>
                        </div>
                        <div class="products__item installment">
							<a href="#" class="link-overlay"></a>
							<div class="products__termin green"><span>на 12 месяцев</span></div>
							<div class="products__img"><img src="img/products/installment_6.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
                            <div class="products__img"><img src="img/products/share_13.jpg" alt=""></div>
                            <div class="products__up-title">1+1</div>
                            <div class="products__title">При покупке обуви из летней коллекции любая вторая в подарок</div>
                        </div>
						<div class="products__item discount">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale green"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/disc_7.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                            <div class="products__descr">Блины со сладкой, лёгкой или сытной начинкой, ароматные горячие супы и салаты из свежих овощей — сеть ресторанов «Теремок» приглашает пообедать быстро и вкусно. </div>
                            <span class="hr"></span>
							<div class="products__date">16 ноября 2017 – 16 января 2018 9:00–22:30</div>
							<span class="hr"></span>
							<div class="products__subinfo"><span class="comments">12</span><span class="likes">12</span></div>
							<div class="products__get-sales"><a href="#">Получить скидку</a></div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
                            <div class="products__img"><img src="img/products/share_17.jpg" alt=""></div>
                            <div class="products__title">Акция; при аокупке любых очков Ray ban вторые в подарок</div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_15.jpg" alt=""></div>
                            <div class="products__title">Купи часы BRAUN и получи кожаный ремешок в подарок</div>
                        </div>
                        <div class="products__item share large">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_3.jpg" alt=""></div>
                            <div class="products__title">Молодежная одежда крупных брендов со скидкой -60%</div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
                            <div class="products__img"><img src="img/products/share_11.jpg" alt=""></div>
                            <div class="products__title">10 развлечений не дороже 50 рублей</div>
                        </div>
                        <div class="products__item share top">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_2.jpg" alt=""></div>
                            <div class="products__title">ТЫ ЗВЕЗДА костюмы и платья для вечеринки со скидкой -40%</div>
                        </div>
                        <div class="products__item installment">
							<a href="#" class="link-overlay"></a>
							<div class="products__termin fillet"><span>на 12 месяцев</span></div>
							<div class="products__img"><img src="img/products/installment_7.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
                            <div class="products__img"><img src="img/products/share_5.jpg" alt=""></div>
                            <div class="products__title">Скидки на осеннюю обувь -50%</div>
                        </div>
                        <div class="products__item discount">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale fillet"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/disc_2.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                            <div class="products__descr">Блины со сладкой, лёгкой или сытной начинкой, ароматные горячие супы и салаты из свежих овощей — сеть ресторанов «Теремок» приглашает пообедать быстро и вкусно. </div>
                            <span class="hr"></span>
							<div class="products__date">16 ноября 2017 – 16 января 2018 9:00–22:30</div>
							<span class="hr"></span>
							<div class="products__subinfo"><span class="comments">12</span><span class="likes">12</span></div>
							<div class="products__get-sales"><a href="#">Получить скидку</a></div>
                        </div>
                        <div class="products__item installment">
							<a href="#" class="link-overlay"></a>
							<div class="products__termin green"><span>на 12 месяцев</span></div>
							<div class="products__img"><img src="img/products/installment_3.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                        </div>
                        <div class="products__item sale">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale green"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/sale_1.jpg" alt=""></div>
							<div class="products__title">Пылесос puppyoo WP606</div>
							<div class="products__price">914 руб.</div>
							<div class="products__old-price">3900 руб.</div>
                        </div>
                        <div class="products__item sale">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale fillet"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/sale_3.jpg" alt=""></div>
							<div class="products__title">Пылесос puppyoo WP606</div>
							<div class="products__price">914 руб.</div>
							<div class="products__old-price">3900 руб.</div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_7.jpg" alt=""></div>
                            <div class="products__title">10 развлечений не дороже 50 рублей</div>
                        </div>
                        <div class="products__item installment">
							<a href="#" class="link-overlay"></a>
							<div class="products__termin fillet"><span>на 12 месяцев</span></div>
							<div class="products__img"><img src="img/products/installment_5.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                        </div>
                        <div class="products__item share top">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_18.jpg" alt=""></div>
                            <div class="products__title">Xiaomi Mi MIX 2 по акции</div>
                            <div class="products__price">1140</div>
							<div class="products__old-price">1500</div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
                            <div class="products__img"><img src="img/products/share_8.jpg" alt=""></div>
                            <div class="products__title">Акция «Новогодний беспредел» от клуба «Гепард»</div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
                            <div class="products__img"><img src="img/products/share_14.jpg" alt=""></div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_9.jpg" alt=""></div>
                            <div class="products__title">Где попробовать новые блюда со скидкой -50%</div>
                            <div class="products__subinfo"><span class="comments">12</span><span class="likes">12</span><span class="views">1250</span></div>
                        </div>
                        <div class="products__item discount">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale green"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/disc_5.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                            <div class="products__descr">Блины со сладкой, лёгкой или сытной начинкой, ароматные горячие супы и салаты из свежих овощей — сеть ресторанов «Теремок» приглашает пообедать быстро и вкусно. </div>
                            <span class="hr"></span>
							<div class="products__date">16 ноября 2017 – 16 января 2018 9:00–22:30</div>
							<span class="hr"></span>
							<div class="products__subinfo"><span class="comments">12</span><span class="likes">12</span></div>
							<div class="products__get-sales"><a href="#">Получить скидку</a></div>
                        </div>
                        <div class="products__item installment">
							<a href="#" class="link-overlay"></a>
							<div class="products__termin fillet"><span>на 12 месяцев</span></div>
							<div class="products__img"><img src="img/products/installment_2.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_10.jpg" alt=""></div>
                            <div class="products__title">10 привлекательных акций для поклонников квестов</div>
                        </div>
                        <div class="products__item sale">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale fillet"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/sale_8.jpg" alt=""></div>
							<div class="products__title">Пылесос puppyoo WP606</div>
							<div class="products__price">914 руб.</div>
							<div class="products__old-price">3900 руб.</div>
                        </div>
                        <div class="products__item discount">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale green"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/disc_3.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                            <div class="products__descr">Блины со сладкой, лёгкой или сытной начинкой, ароматные горячие супы и салаты из свежих овощей — сеть ресторанов «Теремок» приглашает пообедать быстро и вкусно. </div>
                            <span class="hr"></span>
							<div class="products__date">16 ноября 2017 – 16 января 2018 9:00–22:30</div>
							<span class="hr"></span>
							<div class="products__subinfo"><span class="comments">12</span><span class="likes">12</span></div>
							<div class="products__get-sales"><a href="#">Получить скидку</a></div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
							<div class="products__img"><img src="img/products/share_12.jpg" alt=""></div>
                            <div class="products__title">Игры виртуальной реальности по акции до 68%</div>
                        </div>
                        <div class="products__item installment">
							<a href="#" class="link-overlay"></a>
							<div class="products__termin fillet"><span>на 12 месяцев</span></div>
							<div class="products__img"><img src="img/products/installment_8.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                        </div>
                        <div class="products__item sale">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale green"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/sale_7.jpg" alt=""></div>
							<div class="products__title">Пылесос puppyoo WP606</div>
							<div class="products__price">914 руб.</div>
							<div class="products__old-price">3900 руб.</div>
                        </div>
                        <div class="products__item discount">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale green"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/disc_3.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                            <div class="products__descr">Блины со сладкой, лёгкой или сытной начинкой, ароматные горячие супы и салаты из свежих овощей — сеть ресторанов «Теремок» приглашает пообедать быстро и вкусно. </div>
                            <span class="hr"></span>
							<div class="products__date">16 ноября 2017 – 16 января 2018 9:00–22:30</div>
							<span class="hr"></span>
							<div class="products__subinfo"><span class="comments">12</span><span class="likes">12</span></div>
							<div class="products__get-sales"><a href="#">Получить скидку</a></div>
                        </div>
                        <div class="products__item installment">
							<a href="#" class="link-overlay"></a>
							<div class="products__termin fillet"><span>на 12 месяцев</span></div>
							<div class="products__img"><img src="img/products/installment_4.jpg" alt=""></div>
                            <div class="products__title">Скидка 30% на всё меню и напитки в сети ресторанов «Теремок»</div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
                            <div class="products__img"><img src="img/products/share_11.jpg" alt=""></div>
                            <div class="products__title">10 развлечений не дороже 50 рублей</div>
                        </div>
                        <div class="products__item share bottom">
							<a href="#" class="link-overlay"></a>
                            <div class="products__img"><img src="img/products/share_16.jpg" alt=""></div>
                            <div class="products__title">Зимние куртки по акции</div>
                        </div>
                        <div class="products__item sale">
							<a href="#" class="link-overlay"></a>
							<div class="products__sale fillet"><span>-96%</span></div>
							<div class="products__img"><img src="img/products/sale_4.jpg" alt=""></div>
							<div class="products__title">Пылесос puppyoo WP606</div>
							<div class="products__price">914 руб.</div>
							<div class="products__old-price">3900 руб.</div>
						</div>
					</div>
					<div class="pagination">
						<a href="#">Загрузить еще</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include "footer.php";?>