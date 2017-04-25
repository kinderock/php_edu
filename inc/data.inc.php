<?php
// Установка локали и выбор значений даты
setlocale(LC_ALL, "russian");

$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');
$hour = (int) strftime('%H');

$welcome = ''; // Инициализируем переменную для приветствия

if ($hour >= 0 and $hour < 6) {
	$welcome = "Доброй ночи";
} else if ($hour >= 6 and $hour < 12) {
	$welcome = "Доброе утро";
} else if ($hour >= 12 and $hour < 18) {
	$welcome = "Добрый день";
} else {
	$welcome = "Добрый вечер";
}


// Массив для генерации боковой навигации
$leftMenu = array(
	'1' => array(
		'link' => 'Домой',
		'href' => 'index.php',
	),
	'2' => array(
		'link' => 'О нас',
		'href' => 'about.php',
	),
	'3' => array(
		'link' => 'Контакты',
		'href' => 'contact.php',
	),
	'4' => array(
		'link' => 'Таблица умножения',
		'href' => 'table.php',
	),
	'5' => array(
		'link' => 'Калькулятор',
		'href' => 'calc.php',
	),
);


// Заготовки для таблицы
$cols = 10;
$rows = 10;
$color = '#ff9797';
