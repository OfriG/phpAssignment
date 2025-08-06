<!DOCTYPE html>
<html>

<head>
    <title>Mission 14 - Image Creation</title>
</head>

<body>
    <h2>Mission 14: Image Creation</h2>
    <?php
    $text = "ofri's photo";
    $width = 200;
    $height = 200;
    $image = imagecreate($width, $height);
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    //write the text on the photo
    imagestring($image, 5, 50, 40, $text, $black);
    //save the photo as png
    imagepng($image, "output.png");
    echo '<img src="output.png" alt="Generated Image">';

    imagedestroy($image);
    ?>
</body>

</html>