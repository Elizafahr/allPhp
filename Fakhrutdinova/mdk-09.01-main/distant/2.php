<form method="post">
    <label>Введите день рождения:</label><br>
    <input type="number" name="day" min="1" max="31" required><br>
    <label>Введите месяц рождения:</label><br>
    <input type="number" name="month" min="1" max="12" required><br>
    <label>Введите год рождения:</label><br>
    <input type="number" name="year" min="1900" max="<?php echo date('Y'); ?>" required><br>
    <input type="submit" value="Отправить">
</form>

<?php
    $birthday = strtotime($_POST['day'] . '-' . $_POST['month'] . '-' . $_POST['year']);
    $today = time();
    $diff = $birthday - $today;

    if ($diff < 0) {
        $birthday = strtotime($_POST['day'] . '-' . $_POST['month'] . '-' . (date('Y')));

        if(($birthday - $today)<0){
            $birthday = strtotime($_POST['day'] . '-' . $_POST['month'] . '-' . (date('Y') + 1));
            $diff = $birthday - $today;
        }
        elseif (($birthday - $today)>0){
            $birthday = strtotime($_POST['day'] . '-' . $_POST['month'] . '-' . (date('Y')));
            $diff = $birthday - $today;
        }

    }

  
    $days = floor($diff / 86400);
    $hours = floor(($diff % 86400) / 3600);
    $minutes = floor(($diff % 3600) / 60);
    $seconds = $diff % 60;
    echo 'До дня рождения осталось: ' . $days . ' дней, ' . $hours . ' часов, ' . $minutes . ' минут, ' . $seconds . ' секунд.';

?>