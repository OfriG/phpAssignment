<!DOCTYPE html>
<html>
<head>
    <title>Mission 8 - HTML Tags</title>
</head>
<body>
    <h2>Mission 8: HTML Tags</h2>
    <?php
    $string= '<h1>' . 'hey' . '</h1>' . '<i>' . 'hey' . '</i>' .'<p>' . 'hey' . '</p>' .'<b>' . 'hey' . '</b>';
    $cleanString= strip_tags($string, '<p><i>');
    echo $cleanString . '<br><br>';
    ?>
</body>
</html>