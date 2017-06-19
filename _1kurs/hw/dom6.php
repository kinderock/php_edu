<?
// Настройка валидации
// Првоерка полей
?>



<form action="<?=$_SERVER["REQUEST_URI"]?>" method="post">

<?php if (empty($_POST)):?>
  <input type="text" name="count" value="">
  <br>
  <br>
  <input type="submit" value="Отправить">

<?php elseif (isset($_POST['count'])): ?>
  <?php
    if (ini_get('max_input_vars') >= $_POST['count']) {
      # code...
    }
    for($i = 0; $i < $_POST['count']; $i++):?>
    <input type="text" name="factor[]" value="">
    <br>
  <?php endfor;?>
  <br>
  <input type="submit" value="Посчитать">

<?php elseif (isset($_POST['factor'])): ?>
  <?=array_sum($_POST['factor']); ?>
  <br>
  <br>
  <a href="<?=$_SERVER["REQUEST_URI"]?>">Еще раз!</a>
<?php endif; ?>

</form>
