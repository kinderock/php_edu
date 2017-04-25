<?php
	function drawTable($rows=10, $cols=10, $color='ff0000')
	{
		echo "<table border=\"1\" width=\"200\">";

		for ($i=1; $i <= $cols; $i++) {
			echo "<tr>";
			for ($j=1; $j <= $rows; $j++) {
				if ($i === 1 || $j === 1) {
					echo '<th style="background: '.$color.';" align="center">'.($i*$j).'</th>';
				} else {
					echo "<td>".($i*$j)."</td>";
				}
			}
			echo "</tr>";
		}

		echo "</table>";
	}

	function drawMenu($leftMenu, $vertical=true)
	{
		if ($vertical) {
			$style = '';
		} else {
			$style = ' style="display:inline-block; margin-right: 10px;"';
		}

		echo '<ul>';
		foreach ($leftMenu as $value) {
			echo '<li'.$style.'><a href="'.$value["href"].'">'.$value["link"].'</a></li>';
		}
		echo '</ul>';
	}
