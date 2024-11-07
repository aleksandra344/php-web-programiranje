<!DOCTYPE html>
<html lang="hr">
<head>
    <title>PHP web aplikacije</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Aleksandra Blažeković">
    <meta name="viewport" content="width-device-width, intial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" htef="favicon.ico">
    <title>Izračun varijable</title>
</head>
<body>
    <form method="post" action="">
        <label for="a">Vrijednost a: </label>
        <input type="number" name="a" id="a" required>
        <br><br>

        <label for="b">Vrijednost b: </label>
        <input type="number" name="b" id="b" required>
        <br><br>

        <input type="submit" value="Pošalji">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $a = $_POST["a"];
        $b = $_POST["b"];
        
        
        $c = (3 * $a - $b) / 2;
        
    
        echo "<p>Vrijednost varijable c je: " . $c . "</p>";
    }
    ?>
</body>
</html>