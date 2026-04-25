<!DOCTYPE html>
<html>
<head>
    <title>Lab1 - My Favorite Fruits</title>
    <style>
body{
    background:#fafafa;
    color:#222;
    font-family:Arial,sans-serif;
    padding:50px;
}

.container{
    max-width:520px;
    margin:auto;
    background:white;
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
    margin:8px 0;
    border-radius:8px;
    font-size:15px;
}

input{
    border:1px solid #ddd;
    background:#fff;
}

button{
    background:#111;
    color:white;
    border:none;
}

button:hover{
    opacity:.9;
}

ul{
    margin-top:25px;
}

li{
    margin:8px 0;
}
</style>
</head>
<body>

<div class="container">
    <h1>My Favorite Fruits</h1>

    <form method="post">
        <input type="text" name="fruit1" placeholder="Fruit 1" required>
        <input type="text" name="fruit2" placeholder="Fruit 2" required>
        <input type="text" name="fruit3" placeholder="Fruit 3" required>
        <input type="text" name="fruit4" placeholder="Fruit 4" required>
        <input type="text" name="fruit5" placeholder="Fruit 5" required>
        <button type="submit">Save Fruits</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fruits = [
            $_POST['fruit1'],
            $_POST['fruit2'],
            $_POST['fruit3'],
            $_POST['fruit4'],
            $_POST['fruit5']
        ];

        echo "<h3>Your Favorite Fruits:</h3><ul>";

        foreach ($fruits as $fruit) {
            echo "<li>" . strtoupper($fruit) . "</li>";
        }

        echo "</ul>";

        echo "<p><strong>My favorite fruit is: " . strtoupper($fruits[0]) . "</strong></p>";
    }
    ?>
</div>

</body>
</html>
