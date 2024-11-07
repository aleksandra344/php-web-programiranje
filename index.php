<!DOCTYPE html>
<html lang="hr">
<head>
<title>Izračun prosjeka i konačne ocjene</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Aleksandra Blažeković">
    <meta name="viewport" content="width-device-width, intial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css"> <!-- Link na CSS -->
</head>
<body>

    <div class="container">
        <h2>Izračun prosjeka i konačne ocjene</h2>

        <form method="post">
            <label for="kolokvij1">Ocjena I. kolokvija:</label>
            <input type="number" name="kolokvij1" id="kolokvij1" min="1" max="5" step="0.01" required><br><br>

            <label for="kolokvij2">Ocjena II. kolokvija:</label>
            <input type="number" name="kolokvij2" id="kolokvij2" min="1" max="5" step="0.01" required><br><br>

            <button type="submit" name="submit">Izračunaj</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // Unos ocjena
            $kolokvij1 = $_POST['kolokvij1'];
            $kolokvij2 = $_POST['kolokvij2'];
            
            // Provjera da li su obje ocjene pozitivne
            if ($kolokvij1 < 1 || $kolokvij2 < 1) {
                echo "<h3>Greška: Jedan od kolokvija je negativan. Konačna ocjena je negativna.</h3>";
            } else {
                // Izračun prosjeka
                $prosjek = ($kolokvij1 + $kolokvij2) / 2;

                // Provjera uvjeta za konačnu ocjenu
                if ($kolokvij1 < 1 || $kolokvij2 < 1) {
                    echo "<h3>Konačna ocjena: Negativna</h3>";
                } else {
                    // Ovisno o prosjeku, dodijelit ćemo konačnu ocjenu
                    if ($prosjek >= 4.5) {
                        $final_grade = 5;
                    } elseif ($prosjek >= 3.5) {
                        $final_grade = 4;
                    } elseif ($prosjek >= 2.5) {
                        $final_grade = 3;
                    } elseif ($prosjek >= 1.5) {
                        $final_grade = 2;
                    } else {
                        $final_grade = 1;
                    }

                    echo "<h3>Prosjek: $prosjek</h3>";
                    echo "<h3>Konačna ocjena: $final_grade</h3>";
                }
            }
        }
        ?>

    </div>

</body>
</html>
