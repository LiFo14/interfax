<?php
	include("config.php");
	if(isset($_POST['search'])) {
		$cont = $_POST['search_content'];
		searchPost($cont);
	}
?>
<html>
	<head>
		<title>Interfax</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/functions.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<div id="page_header_top">
				<div id="nav_glob">
					<ul class="header_list">
						<li><a class="header_link" href="#">Мобильная версия<a></li>
						<li><a class="header_link" href="#">Об "Интерфаксе"<a></li>
						<li><a class="header_link" href="#">Interfax.com<a></li>
						<li><a class="header_link" href="#">Интервакс Россия<a></li>
						<li><a class="header_link" href="#">Финмаркет<a></li>
						<li><a class="header_link" href="#">Туризм<a></li>
						<li><a class="header_link" href="#">Недвижимость<a></li>
						<li><a class="header_link" href="#">Религия<a></li>
						<li><a class="header_link" href="#">Конференции<a></li>
						<li>
							<a class="extra_header_link" href="#">
								<span id="inner_head">
									Вход для подписчиков
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="page_header_center">
				<img src="img/interfax.png" title="interfax" alt="interfax" class="inter_img"/>
				<p id="money_info">Доллар США 01.10 <b class="b_money">65,74</b> <span class="span_red">-0,50</span>   ЕВРО 1.10 <b class="b_money">73,78</b> <span class="span_red">-0,81</span>   Нефть 30.09 <b class="b_money">48,43</b> <span class="span_green">+0,00</span></p>
				<!--<hr id="money_info_line">	-->
			</div>
			<div class="navigation">
				<ul class="nav_list">
					<li><a class="nav_link" href="#">Главное</a></li>
					<li><a class="nav_link" href="#">В России</a></li>
					<li><a class="nav_link" href="#">В мире</a></li>
					<li><a class="nav_link" href="#">Экономика</a></li>
					<li><a class="nav_link" href="#">Спорт</a></li>
					<li><a class="nav_link" href="#">Культура</a></li>
					<li><a class="nav_link" href="#">Москва</a></li>
					<li><a class="nav_link" href="#">Все новости</a></li>
					<li><a class="nav_link" href="#">Сюжеты</a></li>
					<li><a class="nav_link" href="#">Фото</a></li>
					<li>
						<span class="search">
							<form action=search_result.php method="post">
								<input type="text" name="search_content" placeholder="Поиск по сайту">
								<input type="submit" name="search" value="search">
							</form>
						</span>
					</li>
				</ul>
				<div class="nav_img">
					<img src="img/men.png" title="interfax" width="1125" height="95" alt="interfax"/>
				</div>
			</div>
			<div id="main">
					<hr class="news_line"/>
					<div id="posts">
						<div class="post">
							<div class="main_news_wrap">
								<p class="news">В ФБР заявили о возможных атаках террористов в США по примеру парижских</p>
								<hr class="news_splitter"/>
								<p class="news">В Москве у дипмиссии Франции усилены меры безопасности</p>
								<hr class="news_splitter"/>
								<p class="news">В Союзе туриндустрии заявили о возможной отмене туров в Париж на ближайшие дни</p>
								<hr class="news_splitter"/>
								<p class="news">Исинбаева выразила готовность сдать допинг-пробу в прямом эфире</p>
								<hr class="news_splitter"/>
								<p class="news">Запад увидел в России более близкого партнера в борьбе с терроризмом</p>
								<hr class="news_splitter"/>
								<p class="news">В СПЧ попросили отменить перевод Олега Навального на строгий режим в колонии</p>
								<hr class="news_splitter"/>
								<p class="news">Минкомсвязи вернулось к идее запретить подмену номеров</p>
								<hr class="news_splitter"/>
								<p class="news">Бельгийские власти освободили пятерых подозревавшихся в терактах в Париже</p>
								<hr class="news_splitter"/>
								<p class="news">Власти рассмотрят вопрос об увеличении роли ЦБ в надзоре за ВЭБом</p>
								<hr class="news_splitter"/>
								<p class="news">"Исламское государство" пригрозило терактами в Вашингтоне</p>
								<hr class="news_splitter"/>
								<p class="news">Глава СПЧ удивился идее ограничить доступ к Telegram</p>
								<hr class="news_splitter"/>
								<p class="news">Мутко выступил за расширение полномочий главы Минспорта</p>
								<hr class="news_splitter"/>
								<p class="news">Новосибирские дальнобойщики не смогли подключиться к системе "Платон"</p>
								<hr class="news_splitter"/>
								<p class="news">Бельгийские власти опровергли арест подозреваемого в причастности к терактам в Париже</p>
								<hr class="news_splitter"/>
								<p class="news">Сеть отелей Marriott купит конкурента Starwood за $12,2 млрд</p>
								<hr class="news_splitter"/>
								<p class="news">СМИ сообщили о задержании предполагаемого участника терактов в Париже</p>
								<hr class="news_splitter"/>
								<p class="news">Объем крупных пожертвований в 2014 году упал на 10%</p>
								<hr class="news_splitter"/>
								<p class="news">Турция предупреждала власти Франции об одном из смертников</p>
							</div>
						</div>
					</div>
					<div class="extra_post">
								<ul>
									<li>Администрация США разрешила продать Саудовской Аравии бомбы на $1,3 млрд</li><br>
									<li>Обама и лидеры ЕС заявили о необходимости усилить борьбу с ИГ</li><br>
									<li>В Кремле подтвердили возможность скорой встречи Путина и Олланда</li><br>
									<li>Украина не получала официального предложения России по реструктуризации долга</li><br>
									<li>Наличная валюта - лучшие курсы покупка	продажа<br>EUR	71,00	71,40	16.11<br>USD	66,00	66,40	16.11</li><br>
									<li>Старейший олимпиец умер в возрасте 103 лет</li><br>
									<li>Обама выступил против увеличения числа борющихся с ИГ американских военных</li><br>
									<li>Олланд назвал Бельгию местом организации парижских терактов</li><br>
									<li>Путин "на полях" саммита G20 пообщался с премьерами Канады и Австралии</li><br>
									<li>Россия не будет бомбить часть группировок сирийской оппозиции</li><br>
									<li>Арбитраж признал "ЛУКОЙЛ" победителем по Восточно-Таймырскому участку</li><br>
									<li>Нейробиологи объяснили особенности "ленивого" мозга</li><br>
									<li>В переходах более 30 станций Московского метро установят торговые автоматы</li><br>
									<!--<li>Международные компании продолжили инвестиции в развитие бизнеса в РФ</li><br>
									<li>Авиарегулятор Италии ужесточил проверки безопасности в аэропортах</li><br>
									<li>Изобретено новое покрытие для "самолетов-невидимок"</li><br>
									<li>Рособрнадзор аннулировал 15 результатов ЕГЭ-2015 в Бурятии</li><br>
									<li>Экс-сотрудник НИИ в Петербурге получил 25 лет колонии за производство метадона</li><br>
									<li>В "Лужниках" установят новейшую систему безопасности</li><br>
									<li>Улюкаев предсказал цену на нефть $50 в следующем году</li>	<br>
									<li>Падение ВВП Украины в третьем квартале замедлилось до 7%</li><br>
									<li>На Украине появятся четырехдневные каникулы на Рождество и День женщин</li><br>
									<li>Улюкаев предложил подумать о продаже ликвидных активов ВЭБа</li><br>
									<li>Число женщин во главе крупнейших британских фирм выросло</li><br>
									<li>Авиация коалиции во главе с США уничтожила 116 цистерн ИГ с топливом</li><br>
									<li>Китайцев признали самой бесчестной нацией</li><br>
									<li>Счета родственников Хорошавина оставили под арестом</li><br>
									<li>"СУ-155" проверят на предмет нецелевого расходования средств дольщиков</li><br>
									<li>Математики доказали стратегическую выгоду медлительности</li><br>
									<li>Россию назвали фаворитом товарищеского матча с Хорватией</li><br>
									<li>Louis Vuitton закрыл 3 магазина в Китае из-за сокращения спроса</li><br>
									<li>"Мемориал" признал главу Библиотеки украинской литературы политзаключенной</li><br>
									<li>Двух экс-министров в Грузии обвинили в незаконном присвоении винзавода</li><br>
									<li>Минсельхоз выступил против введения экспортной пошлины на минудобрения</li><br>
									<li>Рособрнадзор проверит профподготовку учителей русского и математики</li>
									<li>Депутаты обсудят с Мутко допинговый скандал</li>
									<li>МИД РФ не увидел причин для ограничения авиасообщения между Россией и Европой</li>
									<li>Спорное между "Роснефтью" и "Газпромом" Мурманское месторождение выставят на аукцион</li>
									<li>Демонтированную стелу Дружбы между Украиной и РФ в Харькове вернут на место</li>
									<li>Путин и Си Цзиньпин обсудили проект "Ямал СПГ"</li>
									<li>В ДНР заявили о 20 оставшихся пленных украинских силовиках</li>
									<li>Россия и Япония активизируют торговое сотрудничество</li>
									<li>Мировые продажи смартфонов в третьем квартале выросли на 6,8%</li>
									<li>Соучастник теракта на Дубровке предстанет перед судом</li>
									<li>Брату Навального ужесточили режим в колонии</li>
									<li>Госдума во вторник назовет "глубинные причины" терактов в Париже</li>
									<li>Китай задумал реконструировать объекты времен СССР для турпоездок</li>
									<li>Эйфелева башня откроется в понедельник</li>
									<li>Трое рабочих получили ожоги на Челябинском металлургическом комбинате</li>
									<li>GM снизил количество отзываемых в РФ Opel Meriva с 9,3 тыс до 584 штук</li>
									<li>Минздрав России разработает единые правила диагностики</li>
									<li>Правительство намерено ликвидировать ряд ядерных объектов</li>
									<li>Предоплаченных поставок российского газа Украине хватит до конца недели</li>
									<li>Турция и Россия обсудят "Турецкий поток" на встрече в декабре</li>
									<li>Индекс оптимизма глав азиатских компаний упал до рекордного минимума</li>
									<li>В столкновениях беженцев с израильскими военными убиты двое палестинцев</li>
									<li>В Москве налетчики с битами разгромили узбекское кафе</li>
									<li>Власти Франции задумались об изменении формата конференции ООН по климату</li>
									<li>На Керченской переправе объявлено штормовое предупреждение</li>
									<li>"НОВАТЭК" потратил около $2 млн на выкуп своих акций</li>			-->
								</ul>
						</div>
					<div class="side_bar">
						<p class="side_bar_headers"><b>СЮЖЕТЫ</b></p>
						<ul class="news_list1">
							<li><a class="news_link1" href="#">Дизельный скандал Volkswagen<a></li>
							<li><a class="news_link1" href="#">Борьба с "Исламским государством"<a></li>
							<li><a class="news_link1" href="#">Кризис на Украине<a></li>
							<li><a class="news_link1" href="#">Наплым мигрантов в Европу<a></li>
							<li><a class="news_link1" href="#">Протесты в Молдавии<a></li>
							<li><a class="news_link1" href="#">Дело Надежды Савченко<a></li>
							<li><a class="news_link1" href="#">Все сюжеты<a></li>
						</ul> <br>
						<p class="side_bar_headers"><b>САМОЕ ЧИТАЕМОЕ</b></p>
						<ul class="news_list2">
							<li>
								<a class="news_link2" href="#">Москва<br><a>
								<span class="side_bar_news">Штрафы с грузовиков с 15 ноября будут взиматься только в Подмосковье</span>
								<hr noshade size="1" color="grey">
							</li>
							<li>
								<a class="news_link2" href="#">В МИРЕ<br><a>
								<span class="side_bar_news">СМИ назвали противодействие РФ целью переброски в Турцию американских F-15С</span>
								<hr noshade size="1" color="grey">
							</li>
							<li>
								<a class="news_link2" href="#">В МИРЕ<br><a>
								<span class="side_bar_news">СМИ узнали о таймере на борту разбившегося в Египте А321</span>
								<hr noshade size="1" color="grey">
							</li>
							<li>
								<a class="news_link2" href="#">Экономика<br><a>
								<span class="side_bar_news">ЕС попросил Россию не вводить продуктовое эмбарго для Украины</span>
							</li>
						</ul> <br>
						<p class="side_bar_headers"><b>ФОТОГАЛЕРЕИ</b></p>
						<ul class="news_list2">
							<li>
								<a class="news_link2" href="#">
									<img src="img/photo1.png" alt="Церемония вручения"/>
								</a>
							</li>
							<li>
								<a class="news_link2" href="#">
									<img src="img/photo2.png" alt="Церемония вручения"/>
								</a>
							</li>
							<li>
								<a class="news_link2" href="#">
									<img src="img/photo3.png" alt="Церемония вручения"/>
								</a>
							</li>
							<li>
								<span style="color: grey;">Все фотографии</span>
							</li>
					</div>
			</div>
			<div class="footer">
				<p>Копирасты</p>
			</div>
		</div>
	</body>
</html>
