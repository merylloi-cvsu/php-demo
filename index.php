<!DOCTYPE html>
<html>
<head>
    <title>PHP Labs</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #121212;
            color: #ffffff;
        }

        .container {
            text-align: center;
            padding: 80px 20px;
        }

        h1 {
            margin-bottom: 40px;
        }

        .nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background: #1f1f1f;
            padding: 25px;
            width: 220px;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            transition: 0.2s;
        }

        .card:hover {
            background: #2c2c2c;
            transform: translateY(-5px);
        }

        .card h2 {
            margin: 10px 0;
        }

        .card p {
            font-size: 14px;
            color: #ccc;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>PHP Laboratory Activities</h1>

    <div class="nav">

        <a href="lab1.php" class="card">
            <h2>Lab 1</h2>
            <p>Fruits Array with Form Input</p>
        </a>

        <a href="lab2.php" class="card">
            <h2>Lab 2</h2>
            <p>Temperature Converter</p>
        </a>

        <a href="lab3.php" class="card">
            <h2>Lab 3</h2>
            <p>ATM Machine Simulation</p>
        </a>

    </div>
</div>

</body>
</html>