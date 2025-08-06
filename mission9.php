<!DOCTYPE html>
<html>
<head>
    <title>Mission 9 - Associative Array</title>
</head>
<body>
    <h2>Mission 9: Associative Array</h2>
    <?php
    $a = array('one' => 'I', 'two' => 'II', 'three' =>'III', 'four' => 'IV'); 
    foreach($a as $key => $value){
        echo $key . " => " . $value . "<br>";
    }
    ?>
</body>
</html>