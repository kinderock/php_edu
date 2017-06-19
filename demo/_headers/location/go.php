<?php
if (isset($_GET["url"])) {
	$url = strip_tags($_GET["url"]);
	if ($url) {
		header("Location: $url");
		exit;
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Идем куда-то</title>
</head>

<body>
<form action="<?=$_SERVER["PHP_SELF"]?>">
	Пойти:
	<select name="url" size="1">
		<option value="http://www.google.ru">В гугл</option>
		<option value="http://www.yandex.ru">В яндекс</option>
		<option value="http://www.mail.ru">в мейлрушечку</option>
	</select>
	<input type="submit" value="GO!">
</form>

</body>
</html>
