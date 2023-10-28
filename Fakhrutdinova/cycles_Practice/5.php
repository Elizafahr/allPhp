<?php
$tableWidth = 270;
$cellSize = 30;

$cols = $tableWidth / $cellSize;
$rows = $cols;

echo '<table border="1" width="' . $tableWidth . '">';

for ($i = 1; $i <= $rows; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $cols; $j++) {

        if( ($i + $j) % 2 == 0)
        {
            echo '<td style = " background-color: black;" border: 1px; ></td>';
        }
        else{
            echo '<td style = " background-color: white;" border: 1px; height="30" ></td>';
        }
    }
    echo '</tr>';
}

echo '</table>';
?>
