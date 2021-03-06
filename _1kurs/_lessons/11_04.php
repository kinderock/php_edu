<?php
// Циклы

// -- Операторы декремента и инкремента
$i = 1;
$i++; // Increment
$i--; // Decrement

echo ++$i; // Прибавляем по 1 до обработки $i
echo "<br>";
echo $i += 10; // Прибавляем по 10



// -- Цикл for
echo '<br><hr>';

// V1 верный
for ($i=0; $i < 10; $i++) {
  echo $i."<br>";
}

// V2 неверный
// $i=0;
// for ( ; $i < 10; ) {
//   echo $i."<br>";
//   $i++;
// }



// -- Цикл while
echo '<br><hr>';

// Лучше использовать не для перебора, а при ожидании TRUE от условия в скобках.
// $a = 2;
// while ($a <= 10) {
//   echo "$a<br>";
//   $a++;
// }

// Для запуска цикла, даже если условие не выполняется, использовать do...while
// do {
//   # code...
// } while ($a <= 10);



// -- Выход из цикла
// ---- break;
// for ($i=0; $i < 10; $i++) {
//   if ($i === 7) {
//     echo 'Пришло '.$i;
//     break; // Выбросит цикл
//     // break 2; // Указываем, сколько циклов прервать при разных уровнях вложенности (2 и более)
//   }
//
//   echo $i.'<br>';
// }

// ---- continue
// for ($i=0; $i < 10; $i++) {
//   if ($i === 7) {
//     echo 'Пришло '.$i.'<br>';
//     continue; // Пропустит выполнение данного условия и вернется к циклу
//   }
//
//   echo $i.'<br>';
// }



// -- Цикл foreach
echo '<br><hr>';

$arr = array(
  'name' => 'John',
  'age' => 25,
  'login' => 'root'
);

foreach ($arr as $key => $value) { // При таком указании создаются временные переменные-копии
// foreach ($arr as $key => &$value) { // при таком указании создается ссылка на значение массива, если изменять значение в цикле, то изменится и в массиве
  echo $key.' -- '.$value.'<br/>';

  if ($key === 'age') {
    $value = 45;
  }
}

echo "<pre>";
echo print_r($arr);
echo "</pre>";
