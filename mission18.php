<!DOCTYPE html>
<html>

<head>
    <title>Mission 18 - Fibonacci Series</title>
</head>

<body style="direction: ltr">
    <h2>Mission 18: Fibonacci Series</h2>
    <?php
    $n = 10; //how much numbers to show
    $fib1 = 0;
    $fib2 = 1;
    echo "$fib1, $fib2";
    for ($i = 3; $i <= $n; $i++) {
        $next = $fib1 + $fib2;
        echo " , $next";

        //update the previews two numbers
        $fib1 = $fib2;
        $fib2 = $next;
    }
    ?>
</body>

</html>