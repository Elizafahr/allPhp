<?php
$cols = 5;
$rows = 6;

echo '<table border="1"; cellpadding = "3px"; cellspacing = "0px" >';
for ($i = 1; $i <= $rows; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $cols; $j++) {
        echo '<td';
        echo '>' . $i .'*' .$j .'=' .$i*$j . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>