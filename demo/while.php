<?php
$str = 'HELLO';
$a = 0;
$limit = strlen($str);

while ($a < $limit) {
  echo $str{$a}.'<br>'; // V1 через конкатинацию
  // echo "{$str{$a}} <br>"; // V2 через строку с экранированием переменной через фигурные скобки
  $a++;
}
