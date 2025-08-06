<!DOCTYPE html>
<html>
<head>
    <title>Mission 13 - Directory Reading</title>
</head>
<body>
    <h2>Mission 13: Directory Reading</h2>
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
</body>
</html>