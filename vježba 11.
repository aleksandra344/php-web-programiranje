<!DOCTYPE html>
<html lang="hr">
<head>
<title>Provjera prostog broja</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Aleksandra Blažeković">
    <meta name="viewport" content="width-device-width, intial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  

</head>
<body>

<div class="container">
    <h2>Provjera prostog broja</h2>

    <form method="post">
        <label for="numberInput">Unesite broj:</label>
        <input type="number" name="numberInput" id="numberInput" placeholder="Unesite broj" required>
        <button type="submit" name="checkPrime">Provjera broja</button>
    </form>

    <?php
    function jeProst($broj) {
        if ($broj <= 1) {
            return false; 
        }
        for ($i = 2; $i <= sqrt($broj); $i++) { 
            if ($broj % $i == 0) {
                return false; 
            }
        }
        return true; 
    }
    if (isset($_POST['checkPrime'])) {
        $broj = $_POST['numberInput'];
        
        if (jeProst($broj)) {
            echo "<div class='result'>Broj $broj je prost!</div>";
        } else {
            echo "<div class='result'>Broj $broj nije prost.</div>";
        }
    }
    ?>
</div>

</body>
</html>
