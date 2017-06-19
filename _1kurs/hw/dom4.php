<h4> Задача №1</h4>
<?php
  $counter = 0;

  while ($counter !== 7) {
    echo "На данный момент счетчик равен $counter<br>";
    $counter = mt_rand(0, 10);
  }
?>

<br/><hr/><br/>

<h4> Задача №2</h4>
<?php
  $array = array();

  for ($i=0; $i < 200; $i++) {
    $array[$i] = mt_rand(1, 200);
  }

  echo 'Массив <b>$array</b>:<br><pre>';
  echo print_r($array);
  echo '</pre>';
?>

<br/><hr/><br/>

<h4> Задача №3</h4>
<?php
  $arr_sum = 0;

  foreach ($array as $key => $value) {
    $arr_sum += $value;
  }

  echo 'Cумма элементов массива <b>$array</b> через цикл:<br>';
  echo '<b>'.$arr_sum.'</b><br>';

  echo 'Проверочная сумма элементов массива <b>$array</b>:<br>';
  echo '<b>'.array_sum($array).'</b>';
?>

<br/><hr/><br/>

<h4> Задача №4</h4>
<?php
  // V1 через foreach, на мой взгляд, более универсальный, ключи могут быть как цифровые, так и строковые
  foreach ($array as $key => $value) {
    if ($value%2) {
      unset($array[$key]);
    }
  }

  // V2 через for(while по аналогии), менее универсальный, ибо мы привязаны к цифровым индексам
  // $limit = count($array);
  // for ($i=0; $i < $limit; $i++) {
  //   if ($array[$i]%2) {
  //     unset($array[$i]);
  //   }
  // }

  echo 'Массив <b>$array</b> без нечетных элементов:<br><pre>';
  echo print_r($array);
  echo '</pre>';
?>

<br/><hr/><br/>
