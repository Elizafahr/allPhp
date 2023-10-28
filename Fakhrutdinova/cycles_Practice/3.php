<?php
$cols = rand(2, 10);
$rows = rand(2, 10);

echo '<table border="1">';
for ($i = 1; $i <= $rows; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $cols; $j++) {
        $value = $i * $j;
        
        echo '<td';
        if ($i == 1 || $j == 1) {
            echo ' style="font-weight: bold;  background-color: lightblue;"';
        }
        if ($i == 1 && $j == 1) {
            echo ' style="background-color: lightgray;"';
        }
        echo '>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>