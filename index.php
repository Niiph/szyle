<html lang="pl">
<head>
    <title>Kalkulator</title>
    <link rel="Stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div>
    <div class="calculate">
        <p>Podaj wartości wyrażone w centymetrach:</p>
        <form method="POST" action="valid.php">
            <span class="input_description">wysokość:</span> <input type="number" name="height" required><br>
            <span class="input_description">szerokość:</span> <input type="number" name="weight" required><br>
            <span class="input_description">długość:</span> <input type="number" name="length" required><br>
            <input class="button" type="submit">
        </form>
    </div>
</div>
</body>
</html>
