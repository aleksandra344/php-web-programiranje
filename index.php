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
<?php
// Provjera postoji li kolačić
if(isset($_COOKIE["korisnik"])) {
    $korisnik = $_COOKIE["korisnik"];
    echo "Dobrodošli nazad, $korisnik!";
} else {
    echo "Korisnik nije postavljen. Posjetite news.php za postavljanje kolačića.";
}
?>


</body>
</html>
