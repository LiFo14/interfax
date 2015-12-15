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
		<link rel="stylesheet" type="text/css" href="../css/post_style.css">
		<script type="text/javascript" src="js/img_switch.js"></script>
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
			<div class="navigation">
				<img src="../img/interfax.png" title="interfax" alt="interfax" class="inter_img"/>
				<ul class="nav_list">
					<li><a class="nav_link" href="index.php">Главное</a></li>
					<li><a class="nav_link" href="#">В России</a></li>
					<li><a class="nav_link" href="#">В мире</a></li>
					<li><a class="nav_link" href="#">Экономика</a></li>
					<li><a class="nav_link" href="#">Спорт</a></li>
					<li><a class="nav_link" href="#">Культура</a></li>
					<li><a class="nav_link" href="#">Москва</a></li>
					<li><a class="nav_link" href="#">Все новости</a></li>
					<li><a class="nav_link" href="#">Сюжеты</a></li>
					<li><a class="nav_link" href="#">Фото</a></li>
				</ul>
			</div>
			<div id="main">
				<div class="post">
					<div>
						<form action=admin.php method="post" enctype="multipart/form-data">
						<p><label for="">Выберите файл со статьей: </label>
						<input type="file" name="text" accept="text/plain"></p>
						<p><input type="submit" name="add" value="Добавить"></p><br>
						<input type="submit" name="remove" value="Удалить">
						<input type="text" name="id" placeholder="Введите ID поста"><br>
						<?php
							$data = getFullData();
							echo"<h4>Список загруженных статей:</h4>";
							echo "<form action=admin.php method=post>";
							echo "<table >";
							echo "<tr>
								<td>ID</td>
								<td>Путь к посту</td>
							</tr>";
							while ($row = mysql_fetch_array($data)) {
								echo "<tr>
									<td>".$row['id']."</td>
									<td>".$row['news_path']."</td>
								</tr>";
							}
							echo "</table></form>";
						?>
				</form>
			</div>
				<!--</div>
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
									<img src="../img/photo1.png" alt="Церемония вручения"/>
								</a>
							</li>
							<li>
								<a class="news_link2" href="#">
									<img src="../img/photo2.png" alt="Церемония вручения"/>
								</a>
							</li>
							<li>
								<a class="news_link2" href="#">
									<img src="../img/photo3.png" alt="Церемония вручения"/>
								</a>
							</li>
							<li>
								<span style="color: grey;">Все фотографии</span>
							</li>
					</div>
			</div>
			<div class="footer">
				<p>Копирасты</p>
			</div>-->
		</div>
	</body>
</html>
