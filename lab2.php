<!DOCTYPE html>
<html>
<head>
    <title>Lab 2 - Temperature Converter</title>
    <style>
        body {
            background: #121212;
            color: #fff;
            font-family: Arial;
            padding: 40px;
        }

        .box {
            max-width: 400px;
            margin: auto;
        }

        input, button {
            padding: 10px;
            width: 100%;
            margin: 5px 0;
            border-radius: 5px;
            border: none;
        }

        input {
            background: #2a2a2a;
            color: white;
        }

        button {
            background: #2196F3;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Temperature Converter</h1>

    <form method="post">
        <input type="number" name="celsius" placeholder="Enter Celsius" required>
        <button type="submit">Convert</button>
    </form>

    <?php
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST['celsius'];
        $fahrenheit = celsiusToFahrenheit($celsius);

        echo "<h3>Result:</h3>";
        echo "<p>$celsius °C = " . number_format($fahrenheit, 1) . " °F</p>";
    }
    ?>
</div>

</body>
</html>