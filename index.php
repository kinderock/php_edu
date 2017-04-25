<?php
	require_once './inc/lib.inc.php';
	require_once './inc/data.inc.php';

	$id = '';
	if (isset($_GET['id'])) {
		$id = strtolower(strip_tags(trim($_GET['id'])));
	}

	switch($id){
		case 'about':
			$title = 'О сайте';
			$header = 'О нашем сайте';
			$content = './inc/about.inc.php';
			break;

		case 'contact':
			$title = 'Контакты';
			$header = 'Обратная связь';
			$content = './inc/contact.inc.php';
			break;

		case 'table':
			$title = 'Таблица умножения';
			$header = 'Таблица умножения';
			$content = './inc/table.inc.php';
			break;

		case 'calc':
			$title = 'Он-лайн калькулятор';
			$header = 'Калькулятор';
			$content = './inc/calc.inc.php';
			break;

		default:
			$title = 'Сайт нашей школы';
			$header = "$welcome, Гость!";
			$content = './inc/index.inc.php';
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
</head>

<body>

	<div id="header">
		<!-- Верхняя часть страницы -->
		<img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
		<span class="slogan">приходите к нам учиться</span>
		<!-- Верхняя часть страницы -->
	</div>

	<div id="content">
		<!-- Заголовок -->
		<?php require_once './inc/top.inc.php'; ?>
		<!-- Заголовок -->
		<!-- Область основного контента -->
		<?php require_once $content;?>
		<!-- Область основного контента -->
	</div>
	<div id="nav">
		<!-- Навигация -->
		<?php require_once './inc/menu.inc.php'; ?>
		<!-- Навигация -->
	</div>
	<div id="footer">
		<!-- Нижняя часть страницы -->
		<?php require_once './inc/bottom.inc.php'; ?>
		<!-- Нижняя часть страницы -->
	</div>
</body>

</html>
