<?php

$title = "Da Vincijev kod";
$text = "Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.";

?>


<!DOCTYPE html>
<html lang="hr">
<head>
    <title>PHP web aplikacije</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="Da Vincijev kod je kriminalistički triler koji govori o misterijama i tajnama povezanima s poviješću i religijom.">
    <meta name="keywords" content="Da Vincijev kod, knjiga, Dan Brown, triler">
    <meta name="author" content="Aleksandra Blažeković">
    <meta name="viewport" content="width-device-width, intial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" htef="favicon.ico">

    <title>
        <?php

        echo $title;

        ?>
    </title>
</head>
<body>
    <h1>
        <?php

        echo $title;

        ?>
    </h1>
    <p>
    <?php

    echo $text;

    ?>
    </p>

    <!-- Ime dokumenta: index.php -->
</body>
</html>