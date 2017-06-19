<?php
$array = array(1, 4, 5);

foreach ($array as $key => &$value) {
	$value += 4;
}

print_r($array);

?>
