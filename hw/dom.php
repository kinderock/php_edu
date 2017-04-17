<?php
//$arr = array('John', 'root', '1234', true);
//$arr[] = "sdfsdf23wfwf2f3f23f";
$arr = array(
	'name' => 'John',
	'login' => 'root',
	'password' => 1234,
	'info' => array(
		'age' => 23,
		'sex' => 'female',
		'params' => array(
			'param1' => 1,
			'param2' => 2,
		),
	),
	'logged' => true,
	'hash' => "1231231sdfsdf23",
);
unset($arr['password']);
//echo "Ваше имя - {$arr['name']}";
echo "<pre>";
print_r($arr);
echo "</pre>";
?>