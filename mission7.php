<!DOCTYPE html>
<html>
<head>
    <title>Mission 7 - JSON Loop</title>
</head>
<body>
    <h2>Mission 7: JSON Loop</h2>
    <?php
    $jsonData= '[
        {
        "name" : "John Garg",
        "age"  : "15",
        "school" : "Ahlcon Public school"
        },
        {
        "name" : "Smith Soy",
        "age"  : "16",
        "school" : "St. Marie school"
        },
        {
        "name" : "Charle Rena",
        "age"  : "16",
        "school" : "St. Columba school"
        }
    ]';
    $students= json_decode($jsonData, true);
    foreach($students as $student){
        echo "Name: " . $student['name'] . '<br>';
        echo 'age: ' .  $student['age'] . '<br>';
        echo 'School: ' . $student['school'] .'<br><br>';    
    }
    ?>
</body>
</html>