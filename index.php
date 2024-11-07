<?php
    $zamisljeniBroj = rand(1, 9);
    $poruka = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $korisnikovBroj = $_POST["broj"];
    
        if ($korisnikovBroj == $zamisljeniBroj) {
            $poruka = "<p style='color: green;'>Pogodak! Zamišljeni broj je $zamisljeniBroj.</p>";
        } else {
        $poruka = "<p style='color: red;'>Krivo, zamišljeni broj je $zamisljeniBroj.</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="hr">
<head>
<title>Pogodi broj</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Aleksandra Blažeković">
    <meta name="viewport" content="width-device-width, intial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <h2>Igra (pogodi broj)</h2>
    <p>Upiši jedan broj od 1 do 9:</p>

    <form method="post" action="">
        <input type="number" name="broj" min="1" max="9" required>
        <button type="submit">Pogodak, probaj ponovo!</button>
    </form>

    <?php
    // Prikazujemo poruku nakon slanja forme
    echo $poruka;
    ?>
</body>
</html>
