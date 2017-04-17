<?php
	// Функции

	// count($array, 1); // Подсчет количества элементов массива, цифровой параметр указывает на количество уровней вложенности.

  // -- Базовая конструкция
	// function sayHello($arg='Guest') // Если аргумент не пришел, то берем заранее подготовленный
	// {
	// 	echo "Hello, $arg!!<br>";
  //
  // }
  //
  // sayHello('World');
  //
  // $arg = 'Man';
  // sayHello($arg);
  //
  // sayHello('John');
  // sayHello();


  // -- Области видимости
  // Для изенения глобальной переменной внутри функции
  // $GLOBALS; // Глобальный массив переменной, все созданные перменные хранятся здесь.
  // $arg = 'Mike' то же самое, что и $GLOBALS['arg'] = 'Mike';


  // function sayHello($arg='Guest', $h) // Параметры передаются через запятую
	// {
  //   $arg = (!$arg) ? 'GUEST' : $arg; // Если пришла не та переменная или ее нет, то присваиваем дефолт
	// 	echo "<h$h>Hello, $arg!!</h$h><br>";
  //   // global $arg; // Второй способ - создаем глобальную переменную и присваиваем ей имя
  //   // $arg = 'Bacja';
  // }
  //
  // $arg = 'Mike';
  // sayHello(false, 1);
  // sayHello($arg, 2);
  // sayHello($arg, 3);


  // -- Вызовы функций
  // myFunction();
  // function myFunction()
  // {
  //   echo "JOPA!";
  // }


  // -- Обращение через переменную

  // $var = "myFunction"; // Создаем переменноую со строковым значением
  // function myFunction() // Создаем функцию с таким же названием
  // {
  //   echo "1";
  // }
  //
  // $var(); // Выводим функцию через переменную


  // -- Статические переменные
  // function myFunction() // Заводим функцию
  // {
  //   $i = 0; // Объявляем счетчик
  //   static $i; // static позволяет переменной сохраняться внутри функции, при каждом новом вызове функции сохраняется предыдущий вариант обработки этой функции
  //   $i++; // Прибавляем счетчик
  //   echo $i.'<br>';
  // }
  //
  // myFunction();
  // // echo $i;
  // myFunction();
  // // echo $i;
  // myFunction();
  // // echo $i;


  // -- Возврат результата
  function myFunction($num) // Заводим функцию и объявляем параметр
  {
    $return = $num*$num; // Заводим переменную, которая будет держать результат выполнения какой-либо операции

    return $return; // return возвращает результат
    echo "string"; // не обработает, ибо return действует, как break для циклов
  }

  $var = myFunction(4); // присваиваем результат функции переменной
  echo $var;
?>
