<!DOCTYPE html>
<html>
<head>
    <title>Mission 3 - Prime Numbers</title>
</head>
<body>
    <h2>Mission 3: Prime Numbers</h2>
    <?php
    echo 'Prime numbers:' . '<br>' . '<br>';
    function isPrime($number){
        if($number<=1) return false;
        for($i=2;$i<=sqrt($number);$i++){
            if($number % $i == 0) return false;
        }
        return true;
    }
    for($j=1;$j<=10;$j++){
        if(isPrime($j)){
            echo $j . '<br>';
        };
    }
    echo '<br>'
    ?>
</body>
</html>