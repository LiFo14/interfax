<?php
	include("config.php");
	if (isset($_POST['add'])) {
		addPost();
	}
	if (isset($_POST['remove'])) {
		removePost($_POST['id']);
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
	</header>
	<main class="clearfix">
				<div class="posts">
					<div>
						<form action=admin.php method="post" enctype="multipart/form-data">
						<p><label for="">Выберите файл со статьей: </label>
						<input type="file" name="text" accept="text/plain"></p>
						<p><input type="submit" name="add" value="Добавить"></p><br><br>
						<input type="submit" name="remove" value="Удалить">
						<input type="text" name="id" placeholder="Введите ID поста"><br><br>
						<?php
							$data = getFullData();
							makeAdminStuff($data);
						?>
				</form>
			</div>
		</div>
	</main>
	<footer>
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
	</footer>
	</body>
</html>
