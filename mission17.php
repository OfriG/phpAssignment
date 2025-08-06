<!DOCTYPE html>
<html>

<head>
    <title>Mission 17 - Leap Year</title>
</head>

<body style="direction: ltr">
    <h2>Mission 17: Leap Year</h2>
    <?php
    $year = 2024;

    // Check if leap year
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "$year is a leap year.";
    } else {
        echo "$year is not a leap year.";
    }
    ?>
</body>

</html>