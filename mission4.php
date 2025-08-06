<!DOCTYPE html>
<html>
<head>
    <title>Mission 4 - Recursion</title>
</head>
<body>
    <h2>Mission 4: Recursion</h2>
    <?php
    echo '10-1 Recursion function' . '<br>' . '<br>';
    $number= 10;
    function printBack($num){
        if($num<1) return;
        echo $num . '<br/>';
        printBack($num-1);
    }
    printBack(10);
    echo '<br/>'
    ?>
</body>
</html>