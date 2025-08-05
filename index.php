<!-- 1. Write a program to compare between things that are not integers. Suppose the strings are -
$str1 = "00004";
$str2 = "008";
$str3 = "00007-STR"; -->

<?php
$strings = ["00004", "008", "00007-STR"];

for ($i = 0; $i < count($strings); $i++) {
    for ($j = 0; $j < count($strings); $j++) {
        $s1 = $strings[$i];
        $s2 = $strings[$j];

        echo "Comparing '$s1' and '$s2': ";
        if ($s1 === $s2) {
            echo "equal<br>";
        } elseif (strcmp($s1, $s2) < 0) {
            echo "'$s1' comes before '$s2'<br>";
        } else {
            echo "'$s1' comes after '$s2'<br>";
        }
    }

}
echo '<br>';
?>
<!-- 2.  Write a division table program in PHP using a for loop. -->
<?php
echo 'Division table';
echo '</br>' . '<br>' ;
$numbers = [];
for ($i = 1; $i <= 10; $i++) {
    $numbers[] = $i;
}
echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr><th>%</th>';
for ($i = 0; $i < count($numbers); $i++) {
    echo '<th>' . $numbers[$i] . '</th>';
}
echo '</tr>'; 
for ($i = 0; $i < count($numbers); $i++) {
    echo '<tr>';
    echo '<th>' . $numbers[$i] . '</th>'; 

    for ($j = 0; $j < count($numbers); $j++) {
        $result = $numbers[$i] / $numbers[$j];
        echo '<td>' . round($result, 2) . '</td>';
    }

    echo '</tr>';
}

echo '</table>' . '<br>' ;
?>


<!-- 3. Write a program in PHP to print prime numbers between 1 and 10 -->
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
<!-- 4. Write a program to print numbers from 10 to 1 using a recursion function. -->
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
<!-- 5.  Write a program to store the username in a cookie and check whether the user has successfully logged in or not. -->
<?php
    //check if form send
    if($_SERVER['REQUEST_METHOD']== "POST"){
        $username = $_POST["username"] ?? "";
        $password = $_POST["password"] ?? "";

        if($username ==='ofri' && $password="ofriIsTheBest"){
            //save cookie for one week
            setcookie("username", $username, time() + 7 *24*60*60);
            $message= 'Login successful.Welcome, '. $username;
        }
        else{
            $message = 'Login failed invalid username or password';
        }
    }
?>
<html>
    <body>
    <form method="post" action=''>
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">

</form>
<p>
    <?php
    if(isset($message)){
        echo $message;
    }

    //check if user exist- there is cookie
    elseif(isset($_COOKIE["username"])){
        echo "You are already logged in as: " . $_COOKIE["username"];
    }
    else{
        echo "You are not logged in.";
    }
    ?>
</p>
    </body>
</html>

<!-- 6.Write a program to convert the given string into an array. Suppose the string is:
$a = 'Burch Jr, Philip H., The American establishment, Research in political economy 6(1983), 83-156'; -->
<?php
echo '<br>';
$a = 'Burch Jr, Philip H., The American establishment, Research in political economy 6(1983), 83-156';
$newString= explode(',', $a);
echo '<pre>';
//print_r($newString);
echo '</pre>';

?>
<!-- 7.  Write a php program to loop over the json data. Suppose, you have the following json data.
[
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
]
 -->
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
<!-- 8. Write a program in php to remove all html tags except paragraph and italics tags. -->
 <?php
    $string= '<h1>' . 'hey' . '</h1>' . '<i>' . 'hey' . '</i>' .'<p>' . 'hey' . '</p>' .'<b>' . 'hey' . '</b>';
    $cleanString= strip_tags($string, '<p><i>');
    echo $cleanString . '<br><br>';
 ?>

 <!-- 9. Write a program to loop through an associative array using foreach. Suppose an associative array is:
$a = array('one' => 'I', 'two' => 'II', 'three' =>'III', 'four' => 'IV'); -->
<?php
echo 'loop through an associative array using foreach' .'<br>';
$a = array('one' => 'I', 'two' => 'II', 'three' =>'III', 'four' => 'IV'); 
foreach($a as $key => $value){
    echo $key . " => " . $value . "<br>";
}
?>
<!-- 10. Write a program to differentiate between fgets, fgetss and fgetcsv. -->
<?php
//fgetss remove at php 8.0, i will use strip_tags() instead.
    $filename= "file.txt";
    //open file for reading
    $file= fopen($filename, "r");
    if($file){
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
    }
    else{
        echo 'Could not open file.';
    }
echo '<br>';
?>
<!-- 11. There are two deals of an item to buy. The quantities and prices of the item are given below. Write a program in PHP to find the best deal to purchase the item.

$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30; -->
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
<!-- 12. Writea program to set a session on successful login. -->
 <?php
    session_start();
    //instead of get this info from db
    $validUserName= 'ofri';
    $validPassword= 'theBest';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $userName= $_POST['userName'];
        $password= $_POST['password'];
        //check if the details correct
        if($userName ===$validUserName && password ===validPassword){
            $_SESSION['userName']= $userName;
            echo 'Login succsessfuly';
        }
        else{
            echo 'invalid password';
        }
    }
?>

    <form method="post"
    action="">
    userName:<input type="text"
    name="userName" required><br>
    Password: <input type="password"
    <input type="submit"
    value="Login">
    </form>
 

<!-- 13. Write a program to read from the directory. -->
<?php 
    $directory= ".";
    if(is_dir($directory)){
        if($dh= opendir($directory)){
            echo "<h1> files and folders in '$directory':</h1>";
            while(($file = readdir($dh)) !== false){
                echo "Name: " . $file . "<br>";
            }
            closedir($dh);
        }
        else{
            echo "failed to open directory";
        }
    }
    else{
        echo "'$directory' is not a valid directory.";
    }
?>
<!-- 14. Write a PHP program to create an image from text and save. -->
 <?php

  $text= "ofri's photo";
  $width= 200;
  $height= 200;
  $image= imagecreate($width, $height);
  $white= imagecolorallocate($image, 255,255,255);
  $black= imagecolorallocate($image, 0,0,0);
  //write the text on the photo
imagestring($image,5,50,40,$text, $black);
//save the photo as png
imagepng($image, "output.png");
imagedestroy($image);
 ?>
<!-- 15. Write a PHP program to get data from XML files in PHP. -->
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

<!-- 16. Write a PHP program to create word documents from HTML. -->

<?php
// Define HTML content
$htmlContent = "
<h1>Welcome to PHP</h1>
<p>This document is generated from HTML using PHP.</p>
";

// Set headers to force download as a Word file
header("Content-Type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=document.doc");

// Output the HTML as Word content
echo $htmlContent;
?>

<!-- 17. How do you check if a year is a leap or not? -->
<?php
$year = 2024;

// Check if leap year
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
?>

<!-- 18. Write a PHP program to print fibonacci series. -->
<?php
    $n= 10;//how much numbers to show
    $fib1= 0;
    $fib2= 1;
    echo "$fib1, $fib2";
    for($i=3;$i<= $n; $i++){
        $next= $fib1+$fib2;
        echo " , $next";
        
        //update the previews two numbers
        $fib1= $fib2;
        $fib2=$next;
    }


?>
