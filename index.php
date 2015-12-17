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
		<link rel="shortcut icon" href="http://www.interfax.ru/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<header>
		<div class="topbar clearfix">
			<ul class="top_navigation">
				<li class="top">Мобильная версия</li>
				<li class="top">Об "Интерфаксе"</li>
				<li class="top">Interfax.com</li>
				<li class="top">Интерфакс-Россия</li>
				<li class="top">Финмаркет</li>
				<li class="top">Туризм</li>
				<li class="top">Недвижимость</li>
				<li class="top">Религия</li>
				<li class="top">Конференции</li>
				<li class="followers">Вход для подписчиков</li>
			</ul>
		</div>
		<div class="middlebar">
			<div class="middleimg left">
				<a href="index.php">
					<img alt="Interfax" src="img/logo.png"/>
				</a>
			</div>
			<div class="middlemainbar">
				<p id="money_info">Доллар США 01.10 <b class="b_money">65,74</b> <span class="span_red">-0,50</span>   ЕВРО 1.10 <b class="b_money">73,78</b> <span class="span_red">-0,81</span>   Нефть 30.09 <b class="b_money">48,43</b> <span class="span_green">+0,00</span></p>
			</div>
		</div>
		<div class="bottombar clearfix">
			<div class="line">
				<h4 class="active"><a href="/">Главное</a></h4>
				<h4 class="inactive"><a href="/">В России</a></h4>
				<h4 class="inactive"><a class="nav_link" href="/">В мире</a></h4>
				<h4 class="inactive"><a class="nav_link" href="/">Экономика</a></h4>
				<h4 class="inactive"><a class="nav_link" href="/">Спорт</a></h4>
				<h4 class="inactive"><a class="nav_link" href="/">Культура</a></h4>
				<h4 class="inactive"><a class="nav_link" href="/">Москва</a></h4>
				<h4 class="inactive"><a class="nav_link" href="/">Все новости</a></h4>
				<h4 class="inactive"><a class="nav_link" href="/">Сюжеты</a></h4>
				<h4 class="inactive"><a class="nav_link" href="/">Фото</a></h4>
				<span class="search">
					<form action="index.php" method="post">
						<input type="text" name="search_content" placeholder="Поиск по сайту">
						<input type="hidden" name="search" value="search">
					</form>
				</span>
			</ul>
			</div>
			<div class="main">
				<a href="#"><h3>Полиция в центре Москвы задержала участников акции <span class="green">против платных парковок</span></h3></a>
				<a href="#"><h3>Путин предложил отменить транспортный налог для большегрузов <span class="green">из-за "Платона"</span></h3></a>
				<a href="#"><h3>Риски и возможности новой эры ФРС  <span class="green">для emerging markets</span></h3></a>
				<a href="#"><h3>Сбербанк устранил  <span class="green">сбои при операциях с картами</span></h3></a>
			</div>
		</div>
	</header>
	<main class="clearfix">
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
				</ul>
			</div>
		</div>
		<div class="side_bar">
			<p class="side_bar_headers"><b>СЮЖЕТЫ</b></p>
			<ul class="news_list1">
				<li><a class="news_link1" href="#">Дизельный скандал Volkswagen<a></li>
				<li><a class="news_link1" href="#">Борьба с "Исламским государством"<a></li>
				<li><a class="news_link1" href="#">Кризис на Украине<a></li>
				<li><a class="news_link1" href="#">Наплым мигрантов в Европу<a></li>
				<li><a class="news_link1" href="#">Протесты в Молдавии<a></li>
				<li><a class="news_link1" href="#">Все сюжеты<a></li>
			</ul> <br>
			<p class="side_bar_headers"><b>САМОЕ ЧИТАЕМОЕ</b></p>
			<ul class="news_list2">
				<li>
					<a class="news_link2" href="#">Москва<br><a>
						<span class="side_bar_news">Штрафы с грузовиков с 15 ноября будут взиматься только в Подмосковье</span><br><br>
						<hr noshade size="1" color="grey"><br>
				</li>
				<li>
					<a class="news_link2" href="#">В МИРЕ<br><a>
						<span class="side_bar_news">СМИ назвали противодействие РФ целью переброски в Турцию американских F-15С</span><br><br>
						<hr noshade size="1" color="grey"><br>
				</li>
				<li>
					<a class="news_link2" href="#">Экономика<br><a>
						<span class="side_bar_news">ЕС попросил Россию не вводить продуктовое эмбарго для Украины</span><br><br>
				</li>
			</ul> <br>
			<p class="side_bar_headers"><b>ФОТОГАЛЕРЕИ</b></p>
			<ul class="news_list2">
				<li>
					<a class="news_link2" href="#">
						<img src="img/photo1.png" alt="Церемония вручения"/>
					</a>
				</li>
		</div>
	</main>
	<div class="footer">
		<div class="copyright">
			<a href="index.php">
				<img alt="Interfax" src="img/flogon.png"/>
			</a>
			<span>Copyright © 1991—2015 Interfax. Все права защищены.
			Вся информация, размещенная на данном веб-сайте, предназначена только для персонального пользования и не подлежит дальнейшему воспроизведению и/или распространению в какой-либо форме, иначе как с письменного разрешения Интерфакса.
			</span>
			<div class="news_add">
				<a href="admin.php">Добавить новость</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
