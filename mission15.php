<!DOCTYPE html>
<html>
<head>
    <title>Mission 15 - XML Processing</title>
</head>
<body>
    <h2>Mission 15: XML Processing</h2>
    <?php
    // Load XML file
    $xml = simplexml_load_file("people.xml") or die("Error: Cannot load XML file");

    // Loop through each element
    foreach ($xml->person as $person) {
        echo "Name: " . $person->name . "<br>";
        echo "Age: " . $person->age . "<br>";
        echo "Gender: " . $person->gender . "<br><br>";
    }
    ?>
</body>
</html>