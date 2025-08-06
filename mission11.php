<!DOCTYPE html>
<html>
<head>
    <title>Mission 11 - Price Comparison</title>
</head>
<body>
    <h2>Mission 11: Price Comparison</h2>
    <?php
    $quantity1 = 70;
    $price1 = 35;

    $quantity2 = 100;
    $price2 = 30;

    $unitPrice1 = $price1 / $quantity1;
    $unitPrice2 = $price2 / $quantity2;
    echo "Deal 1: Price per item = " . round($unitPrice1, 2) . " $<br>";
    echo "Deal 2: Price per item = " . round($unitPrice2, 2) . " $<br><br>";

    if ($unitPrice1 < $unitPrice2) {
        echo "Deal 1 is better.";
    } elseif ($unitPrice2 < $unitPrice1) {
        echo "Deal 2 is better.";
    } else {
        echo "Both deals are equally good.";
    }
    echo '<br>';
    ?>
</body>
</html>