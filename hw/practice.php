<?php
	// Задача 1
	// -- Переменные
	$var1 = "";
	$var2 = "";
	$var3 = "";
	$var4 = "";
	$var5 = "";
	$var6 = "";
	$var7 = "";
	$var8 = "";
	$var9 = "";
	$var10 = "";
	$var11 = "";
	$var12 = "";
	$var13 = "";
	$var14 = "";
	$var15 = "";
	$var16 = "";
	$var17 = "";
	$var18 = "";
	$var19 = "";
	$var20 = "";

	// -- Цикл for
	// 2. Создать 5 циклов for с произвольными параметрами.
	for ($i = 0; $i < $var1; $i++) {
		# code...
	}

	for ($i = 0, $j = 1; $i <= 15; $i++, $j += 20) {
		# code...
	}

	for ($i = 1; ; $i++) {
		if ($i > 10) {
			break;
		}
		# code...
	}

	$i = 0;
	for (; ; $i++) {
		if ($i === 20) {
			break;
		}
		# code...
	}

	$i = 0;
	for (; $i < 15 ;) {
		# code...
		$i++;
	}


	// -- Цикл while
	// 2. Создать 5 циклов whilе с произвольными параметрами.
	$a = 1;
	while ($a <= 10) {
		# code...
		$a++;
	}

	$a = 1;
	while ($a <= 10) {
		if ($a === 7) {
			break;
		}
		# code...
		$a++;
	}

	$a = 1;
	while ($a !== 3) {
		# code...
		$a++;
	}

	$a = 1;
	do {
		# code...
		$a++;
	} while ($a <= 10);

	$a = 1;
	$finish = false;
	do {
		$a = mt_rand(1,3);
		if ($a === 2) {
			$finish = true;
		}
		# code...
	} while (!$finish);


	// -- Цикл foreach
	// 2. Создать 5 циклов foreach с произвольными параметрами.
	$array = array(1, 2, 4, 57, 87);
	foreach ($array as $value) {
		# code...
	}
	foreach ($array as &$value) {
		# code...
	}
	foreach ($array as $key => $value) {
		# code...
	}
	foreach ($array as $key => &$value) {
		# code...
	}


	// -- Массив
	$var_arr = array(
		array(
			'name' => 'John',
			'surname' => 'Doe',
			'age' => 26,
			'games' => null
		),
		array(
			'name' => 'Satah',
			'surname' => 'Connor',
			'age' => 35,
			'games' => array(
				'rpg' => array(
					'Dragon\'s Dogma',
					'Fallout: New Vegas',
					'Mass Effect',
					'Divinity: Original Sin',
					'Demon\'s Souls'
				),
				'fps'=> array(
					'Titanfall 2',
					'Doom',
					'Overwatch',
					'Counter-Strike: Global Offensive',
					'Half-Life'
				)
			)
		)
	);



	// Задача 2
	// -- Базовый набор переменных для проверки
	$var_int = 812;
	$var_float = 712.85;
	$var_true = true;
	$var_false = false;
	$var_null = null;
	$var_string = 'Simple string';
	$var_array = array(1, 2, 3, 4);


	// -- Аналог функции count()
	// Значения, которые должна вызывать функции для разных типов данных
	// array - возвращает количество элементов массива.
	// bool - возвращает 1
	// string - возвращает 1
	// int - возвращает 1
	// null - возвращает 0
	function myCount($array)
	{

		// Проверка на NULL
		if ( is_null($array) ) {
			return 0;

		// Исключаем все типы данных, кроме массива
		} else if ( !is_array($array) ){
			return 1;
		}

		// Заподим счетчик
		$count = 0;

		// В цикле увеличиваем счотчик на 1 для каждого элемента массива
		foreach ($array as $value) {
			$count++;
		}

		return $count;
	}

	echo myCount($var_array);
	echo "<br>";


	// -- Аналог функции strlen()
	// Значения, которые должна вызывать функции для разных типов данных
	// array - null
	// string - длинна строки
	// int - длинна строки
	// true - 1
	// false - 0
	// null - 0
	// float - длинна строки
	function myStrlen($string)
	{
		// Проверка на NULL и false
		// V1 - проверка на false через !$string
		// дополнительно исключаю из условия проверку на 0 (в двух видах),
		// ибо 0 и false при не строгой проверке !$string выдаст одно и то же.
		// if ( is_null($string) || !$string && !empty($string) ) {
		// if ( is_null($string) || !$string && $string != 0 ) {
		// --------------------------------------------------
		// V2 - проверка на false через строгое равенство
		// в таком случае не нужно дополнительно исключать 0
		if ( is_null($string) || $string === false ) {
			return 0;

		// Проверка на существование переменной и что переменная boolean,
		// иначе все время будет возвращать true, что бы не пришло (кроме 1 условия)
		} else if ( $string && gettype($string) === 'boolean' ){
			return 1;

		// Исключаем массив
		} else if ( is_array($string) ) {
			return null;
		}

		// V1 через подсчет массива
		// Превращаем строку в массив через str_split
		// Можно дополнительно перегнать число в строку через (string)$string,
		// но str_split спокойно переводит и числа
		// $string_array = str_split($string);

		// За подсчетом обращаемся к уже написанной функции myCount
		// return myCount($string_array);


		// V2 через простой цикл
		// Но для начала нам надо цифровые типы привести к строке
		$i = 0;
		$string = (string)$string;

		while ( isset($string{$i}) ) {
			$i++;
		};

		return $i;
	}

	echo myStrlen($var_int);
	echo "<br>";
