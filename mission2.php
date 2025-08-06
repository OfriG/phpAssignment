<!DOCTYPE html>
<html>

<head>
    <title>Mission 2 - Division Table</title>
</head>

<body>
    <h2>Mission 2: Division Table</h2>
    <?php
    echo 'Division table';
    echo '</br>' . '<br>';
    //create array of nums
    $numbers = [];
    for ($i = 1; $i <= 10; $i++) {
        $numbers[] = $i;
    }
    echo '<table border="1" cellpadding="5" cellspacing="0">';
    //header row
    echo '<tr><th>%</th>';
    for ($i = 0; $i < count($numbers); $i++) {
        echo '<th>' . $numbers[$i] . '</th>';
    }
    //create row
    echo '</tr>';
    for ($i = 0; $i < count($numbers); $i++) {
        echo '<tr>';
        echo '<th>' . $numbers[$i] . '</th>';

        for ($j = 0; $j < count($numbers); $j++) {
            $result = $numbers[$i] / $numbers[$j];
            echo '<td>' . round($result, 2) . '</td>';
        }

        echo '</tr>';
    }

    echo '</table>' . '<br>';
    ?>
</body>

</html>