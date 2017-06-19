<?php
	//Функция для отрисовки таблицы умножения
	function drawTable($rows=10, $cols=10, $color='ff0000')
	{
		echo "<table border=\"1\" width=\"200\">";

		for ($i=1; $i <= $cols; $i++) {
			echo "<tr>";
			for ($j=1; $j <= $rows; $j++) {
				if ($i === 1 || $j === 1) {
					echo '<th style="background: '.$color.';" align="center">'.($i*$j).'</th>';
				} else {
					echo "<td>".($i*$j)."</td>";
				}
			}
			echo "</tr>";
		}

		echo "</table>";
	}



	//Функция для отрисовки таблицы умножения
	function drawMenu($leftMenu, $vertical=true)
	{
		if ($vertical) {
			$style = '';
		} else {
			$style = ' style="display:inline-block; margin-right: 10px;"';
		}

		echo '<ul>';
		foreach ($leftMenu as $value) {
			echo '<li'.$style.'><a href="'.$value["href"].'">'.$value["link"].'</a></li>';
		}
		echo '</ul>';
	}



	//Функция для калькулятора
	function calculate($num1, $num2, $operator)
	{
		// Заводим переменную, куда будем сохранять ошибки при проверке полученных данных
		$errors = '';

		// Заводим корректные операторы для калькулятора
		$operators = array('+', '-', '*', '/', '%', 'plus', 'minus');

		// Проверяем, является ли значение строки числом
		// Если нет, то добавляем ошибку
		if (!is_numeric($num1) && !is_numeric($num2)) {
			$errors .= 'Поля "Число 1" и "Число 2" должны содержать числа<br>';
		}

		// Проверяем, есть ли полученный оператор в списке разрешенных ($operators)
		// Если нет, то добавляем ошибку
		if (!in_array($operator, $operators)) {
			$errors .= "Оператор должен быть одним из следующих: ".implode(", ",$operators)."<br>";
		}

		// Если мы записали какие-либо ошибки, то выводим их
		if (strlen($errors) > 0) {
			return $errors;
		}

		// Приводим $num1 и $num2 к типу float для того,
		// чтобы иметь возможность работать как с целыми, так и с дробными числами
		$num1 = (float)$num1;
		$num2 = (float)$num2;

		// Считаем результат, исходя из полученного оператора
		switch ($operator) {
			case '+':
			case 'plus':
				$result = $num1 + $num2;
				break;
			case '-':
			case 'minus':
				$result = $num1 - $num2;
				break;
			case '*':
				$result = $num1 * $num2;
				break;
			case '/':
				$result = $num1 / $num2;
				break;
			case '%':
				$result = $num1 % $num2;
				break;
		}

		// Возвращаем результат
		return "Результат операции: $num1 $operator $num2 = $result";
	}
