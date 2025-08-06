<!DOCTYPE html>
<html>

<head>
    <title>Mission 10 - File Reading</title>
</head>

<body>
    <h2>Mission 10: File Reading</h2>
    <?php
    //fgetss remove at php 8.0, i will use strip_tags() instead.
    $filename = "file.txt";
    //open file for reading
    $file = fopen($filename, "r");
    if ($file) {
        echo "<strong>Using fgets:</strong><br>";
        rewind($file); //point to the start of the file
        echo fgets($file) . "<br><br>"; //read the line as is

        echo "<strong>Using strip_tags (instead of fgetss):</strong><br>";
        rewind($file);
        $lineWithTags = fgets($file);
        echo strip_tags($lineWithTags) . "<br><br>";

        echo "<strong>Using fgetcsv:</strong><br>";
        rewind($file);
        $csvLine = fgetcsv($file, 1000, ",", '"', "\\");

        print_r($csvLine);

        fclose($file);
    } else {
        echo 'Could not open file.';
    }
    echo '<br>';
    ?>
</body>

</html>