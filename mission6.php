<!DOCTYPE html>
<html>
<head>
    <title>Mission 6 - String to Array</title>
</head>
<body>
    <h2>Mission 6: String to Array</h2>
    <?php
    $a = 'Burch Jr, Philip H., The American establishment, Research in political economy 6(1983), 83-156';
    $newString= explode(',', $a);
    echo '<pre>';
    print_r($newString);
    echo '</pre>';
    ?>
</body>
</html>