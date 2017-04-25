<?php
function drawTable($cols=10, $rows=10, $color='ff0000')
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
