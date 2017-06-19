<?php
// Подключение файлов
// include "../includes/test.inc.php"; // В случае ошибки работа скрипта не прерывается, лучше использовать для дополнительных файлов
// include_once "../inc/test.inc.php"; // Подключает файл лишь однажды, если запросили еще раз, то будет проигнорировано
// require "../includes/test.inc.php"; // В случае ошибки работа скрипта останавливается, лусше использовать для библиотек
// require_once "../inc/test.inc.php"; // Подключает файл лишь однажды, если запросили еще раз, то будет проигнорировано
?>

<?php
// Формы
// По умолчанию используется метод GET
?>

<form action="25_04.php" method="post">
  <input type="text" name="name" value="">
  <input type="text" name="age" value="">

  <input type="submit" value="Отправить">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo "name: ".trim(strip_tags($_POST['name'])); // trim убирает пробелы в начале и в конце строки; strip_tags убирает все теги из строки
  echo "<br>";
  echo "age: ".abs((int)$_POST['age']); //abs делает число положительным
}
?>
