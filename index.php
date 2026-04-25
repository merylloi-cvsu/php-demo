<!DOCTYPE html>
<html>
<head>
    <title>PHP Labs</title>

    <style>
body{
    margin:0;
    font-family:Arial,sans-serif;
    background:#f7f7f7;
    color:#222;
}

.container{
    text-align:center;
    padding:90px 20px;
}

h1{
    font-size:40px;
    font-weight:300;
    margin-bottom:50px;
    letter-spacing:1px;
}

.nav{
    display:flex;
    justify-content:center;
    gap:25px;
    flex-wrap:wrap;
}

.card{
    background:#ffffff;
    width:220px;
    padding:35px 25px;
    border-radius:12px;
    text-decoration:none;
    color:#222;
    border:1px solid #e5e5e5;
    box-shadow:0 2px 8px rgba(0,0,0,.04);
    transition:.2s;
}

.card:hover{
    transform:translateY(-4px);
    box-shadow:0 5px 14px rgba(0,0,0,.08);
}

.card h2{
    margin-bottom:12px;
    font-weight:500;
}

.card p{
    color:#666;
    font-size:14px;
    line-height:1.5;
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
