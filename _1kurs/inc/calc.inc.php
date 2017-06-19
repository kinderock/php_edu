<form action='<?=$_SERVER['REQUEST_URI']?>' method="post">
  <label>Число 1:</label>
  <br />
  <input name='num1' type='text' />
  <br />
  <label>Оператор: </label>
  <br />
  <input name='operator' type='text' />
  <br />
  <label>Число 2: </label>
  <br />
  <input name='num2' type='text' />
  <br />
  <br />
  <input type='submit' value='Считать'>
</form>

<?php
  // Проверяем, есть ли запрос от формы
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Передаем переменной $result результат выполнения функции calculate().
    // Можно было бы передать в функцию просто $_POST и там уже разобрать массив,
    // но мне кажется, что более логичным будет передать именно значения
    $result = calculate($_POST['num1'], $_POST['num2'], strtolower($_POST['operator']));

    // Выводим результат
    echo "<br>";
    echo $result;
  }
?>
