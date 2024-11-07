<!DOCTYPE html>
<html lang="hr">
<head>
<title>Kalkulator</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Aleksandra Blažeković">
    <meta name="viewport" content="width-device-width, intial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<body>

    <h2>Kalkulator</h2>

    <form method="post">
        <label for="num1">Upiši prvi broj *</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Upiši drugi broj *</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="operation">Odaberite operaciju:</label>
        <select name="operation" id="operation">
            <option value="add">Zbrajanje</option>
            <option value="subtract">Oduzimanje</option>
            <option value="multiply">Množenje</option>
            <option value="divide">Dijeljenje</option>
        </select><br><br>

        <button type="submit" name="submit">Izračunaj</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Dohvaćanje unosa iz forme
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        
        // Varijabla za rezultat
        $result = 0;
        
        // Switch za odabranu operaciju
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                echo "<h3>Rezultat: $num1 + $num2 = $result</h3>";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                echo "<h3>Rezultat: $num1 - $num2 = $result</h3>";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                echo "<h3>Rezultat: $num1 * $num2 = $result</h3>";
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<h3>Rezultat: $num1 ÷ $num2 = $result</h3>";
                } else {
                    echo "<h3>Greška: Dijeljenje s nulom nije moguće!</h3>";
                }
                break;
            default:
                echo "<h3>Greška: Nepoznata operacija!</h3>";
        }
    }
    ?>

</body>
</html>
