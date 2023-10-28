<form method="POST" action="3.php">
    <label for="month">Выберите месяц:</label>
    <select name="month" id="month">
      <?php
      for ($m = 1; $m <= 12; $m++) {
        echo "<option value=\"$m\">$m</option>";
      }
      ?>
    </select>
  
    <label for="year">Выберите год:</label>
    <select name="year" id="year">
      <?php
      for ($y = 2000; $y <= 2023; $y++) {
        echo "<option value=\"$y\">$y</option>";
      }
      ?>
    </select>
    <button type="submit">Отправить</button>
  </form> 

<?php
  $month = $_POST["month"];
  $year = $_POST["year"];

  $timestamp = strtotime("$year-$month-01");
  $daysInMonth = date("t", $timestamp);

  echo "<table>";
  echo "<tr><th>Пн</th><th>Вт</th><th>Ср</th><th>Чт</th><th>Пт</th><th>Сб</th><th>Вс</th></tr>";

  $dayOfWeek = date("N", $timestamp);

  echo "<tr>";
  for ($i = 1; $i < $dayOfWeek; $i++) {
    echo "<td></td>";
  }

  for ($day = 1; $day <= $daysInMonth; $day++) {
    $dayOfWeek = date("N", strtotime("$year-$month-$day"));

    echo "<td>$day</td>";

    if ($dayOfWeek == 7) {
      echo "</tr><tr>";
    }
  }

  echo "</tr>";
  echo "</table>";

?>
