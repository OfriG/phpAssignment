<!DOCTYPE html>
<html lang="he" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Missions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .nav-menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .mission-card {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: #333;
        }

        .mission-card:hover {
            border-color: #667eea;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.2);
            text-decoration: none;
            color: #333;
        }

        .mission-number {
            font-size: 24px;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 10px;
        }

        .mission-title {
            font-size: 14px;
            line-height: 1.4;
            color: #666;
        }

        .content-area {
            padding: 20px;
            min-height: 400px;
        }

        .mission-content {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
        }

        .back-button {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        .back-button:hover {
            background: #5a6fd8;
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>PHP Missions Collection</h1>
        </div>

        <?php
        $mission = $_GET['mission'] ?? '';

        if ($mission && file_exists("mission{$mission}.php")) {
            echo '<div class="content-area">';
            echo '<a href="index.php" class="back-button">Back to menu</a>';
            echo '<div class="mission-content">';
            include "mission{$mission}.php";
            echo '</div>';
            echo '</div>';
        } else {
        ?>
            <div class="nav-menu">
                <a href="?mission=1" class="mission-card">
                    <div class="mission-number">1</div>
                    <div class="mission-title">String Comparison</div>
                </a>

                <a href="?mission=2" class="mission-card">
                    <div class="mission-number">2</div>
                    <div class="mission-title">Division Table</div>
                </a>

                <a href="?mission=3" class="mission-card">
                    <div class="mission-number">3</div>
                    <div class="mission-title">Prime Numbers</div>
                </a>

                <a href="?mission=4" class="mission-card">
                    <div class="mission-number">4</div>
                    <div class="mission-title">Recursion</div>
                </a>

                <a href="?mission=5" class="mission-card">
                    <div class="mission-number">5</div>
                    <div class="mission-title">Cookies</div>
                </a>

                <a href="?mission=6" class="mission-card">
                    <div class="mission-number">6</div>
                    <div class="mission-title">String to Array</div>
                </a>

                <a href="?mission=7" class="mission-card">
                    <div class="mission-number">7</div>
                    <div class="mission-title">JSON Loop</div>
                </a>

                <a href="?mission=8" class="mission-card">
                    <div class="mission-number">8</div>
                    <div class="mission-title">HTML Tags</div>
                </a>

                <a href="?mission=9" class="mission-card">
                    <div class="mission-number">9</div>
                    <div class="mission-title">Associative Array</div>
                </a>

                <a href="?mission=10" class="mission-card">
                    <div class="mission-number">10</div>
                    <div class="mission-title">File Reading</div>
                </a>

                <a href="?mission=11" class="mission-card">
                    <div class="mission-number">11</div>
                    <div class="mission-title">Price Comparison</div>
                </a>

                <a href="?mission=12" class="mission-card">
                    <div class="mission-number">12</div>
                    <div class="mission-title">Session Login</div>
                </a>

                <a href="?mission=13" class="mission-card">
                    <div class="mission-number">13</div>
                    <div class="mission-title">Directory Reading</div>
                </a>

                <a href="?mission=14" class="mission-card">
                    <div class="mission-number">14</div>
                    <div class="mission-title">Image Creation</div>
                </a>

                <a href="?mission=15" class="mission-card">
                    <div class="mission-number">15</div>
                    <div class="mission-title">XML Processing</div>
                </a>

                <a href="?mission=16" class="mission-card">
                    <div class="mission-number">16</div>
                    <div class="mission-title">Word Documents</div>
                </a>

                <a href="?mission=17" class="mission-card">
                    <div class="mission-number">17</div>
                    <div class="mission-title">Leap Year</div>
                </a>

                <a href="?mission=18" class="mission-card">
                    <div class="mission-number">18</div>
                    <div class="mission-title">Fibonacci Series</div>
                </a>
            </div>
        <?php } ?>
    </div>
</body>

</html>