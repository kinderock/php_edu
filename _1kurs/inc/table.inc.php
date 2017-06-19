<?php
  $cols  = (isset($_POST['cols']))  ? abs((int)$_POST['cols'])          : 10;
  $rows  = (isset($_POST['rows']))  ? abs((int)$_POST['rows'])          : 10;
  $color = (isset($_POST['color'])) ? strip_tags(trim($_POST['color'])) : 'yellow';
?>

<form action='' method="post">
  <label>Количество колонок: </label>
  <br />
  <input name='cols' type='text' value="<?php echo $cols?>" />
  <br />
  <label>Количество строк: </label>
  <br />
  <input name='rows' type='text' value="<?php echo $rows?>" />
  <br />
  <label>Цвет: </label>
  <br />
  <input name='color' type='text' value="<?php echo $color?>" />
  <br />
  <br />
  <input type='submit' value='Создать' />
</form>
<br>

<!-- Таблица -->
<?php drawTable($rows, $cols, $color);?>
<!-- Таблица -->
