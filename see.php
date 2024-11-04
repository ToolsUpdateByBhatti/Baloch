<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        .output-box {
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .line-count {
            color: #333;
            font-size: 18px;
        }

        .refresh-button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="output-box">
    <?php
    echo "<p class='line-count'>Bhatti Sahab</p>";
    $fileToCount = 'ABCBALOCH.txt'; // Replace with the path to your PHP file

    if (file_exists($fileToCount)) {
        $lines = count(file($fileToCount));
        echo "<p class='line-count'>Total Active User : <span class='blue-text'>$lines</span></p>";
    } else {
        echo "<p class='line-count'>File not found: $fileToCount</p>";
    }
    ?>
</div>

<button class="refresh-button" onclick="refreshPage()">Refresh</button>

<script>
    function refreshPage() {
        location.reload();
    }
</script>

</body>
</html>