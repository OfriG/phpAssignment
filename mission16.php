<!DOCTYPE html>
<html>

<head>
    <title>Mission 16 - Word Documents</title>
</head>

<body>
    <h2>Mission 16: Word Documents</h2>
    <?php
    // Define the HTML content that will be placed inside the Word document
    $htmlContent = "
    <h1>Welcome to PHP</h1>
    <p>This document is generated from HTML using PHP.</p>
    ";

    // Set the appropriate HTTP headers so that the browser understands
    // the output is a Microsoft Word file and prompts the user to download it
    header("Content-Type: application/vnd.ms-word"); // Tells the browser this is a Word document
    header("Content-Disposition: attachment; filename=document.doc"); // Forces download with the given filename

    // Output the HTML content, which Word can interpret and render as a document
    echo $htmlContent;
    ?>
</body>

</html>