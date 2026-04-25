<!DOCTYPE html>
<html>
<head>
    <title>Lab 2 - Temperature Converter</title>
<style>
body{
    background:#f8f8f8;
    color:#222;
    font-family:Arial,sans-serif;
    padding:50px;
}

.box{
    max-width:430px;
    margin:auto;
    background:#fff;
    padding:40px;
    border-radius:14px;
    box-shadow:0 4px 12px rgba(0,0,0,.05);
}

h1{
    text-align:center;
    font-weight:300;
    margin-bottom:30px;
}

input,button{
    width:100%;
    padding:13px;
    margin:10px 0;
    border-radius:8px;
    font-size:15px;
}

input{
    border:1px solid #ddd;
}

button{
    background:#111;
    color:white;
    border:none;
}

button:hover{
    opacity:.9;
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
