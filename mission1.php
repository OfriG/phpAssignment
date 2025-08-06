<!DOCTYPE html>
<html>

<head>
    <title>Mission 1 - String Comparison</title>
</head>

<body>
    <h2>Mission 1: String Comparison</h2>
    <?php
    $strings = ["00004", "008", "00007-STR"];

    for ($i = 0; $i < count($strings); $i++) {
        for ($j = $i+1; $j < count($strings); $j++) {
            $s1 = $strings[$i];
            $s2 = $strings[$j];

            echo "Comparing '$s1' and '$s2': ";
            if ($s1 === $s2) {
                echo "equal<br>";
            } elseif (strcmp($s1, $s2) < 0) {
                echo "'$s1' comes before '$s2'<br>";
            } else {
                echo "'$s1' comes after '$s2'<br>";
            }
        }
    }
    echo '<br>';
    ?>
</body>

</html>