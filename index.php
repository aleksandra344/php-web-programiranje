<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odabir Vozila</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f4f4f4;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        border: 1px solid #ddd;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    h2 {
        color: #333;
        margin-bottom: 20px;
    }

    .vehicle-option {
        display: block;
        margin: 10px 0;
        font-size: 18px;
        color: #333;
        cursor: pointer;
    }

    input[type="radio"] {
        margin-right: 10px;
    }

    button {
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #0056b3;
    }

    .result {
        margin-top: 20px;
        font-size: 18px;
        color: #333;
    }
</style>

</head>
<body>

<div class="container">
    <h2>Označi vozilo</h2>

    <!-- Forma za odabir vozila -->
    <form method="post">
        <label class="vehicle-option">
            <input type="radio" name="vozilo" value="Audi" required> Audi
        </label>
        <label class="vehicle-option">
            <input type="radio" name="vozilo" value="BMW"> BMW
        </label>
        <label class="vehicle-option">
            <input type="radio" name="vozilo" value="Renault"> Renault
        </label>
        <label class="vehicle-option">
            <input type="radio" name="vozilo" value="Citroen"> Citroen
        </label>
        <br>
        <button type="submit" name="oznaciVozilo">Pošalji</button>
    </form>

    <?php
    // Provjera je li korisnik odabrao vozilo
    if (isset($_POST['oznaciVozilo']) && !empty($_POST['vozilo'])) {
        $izabranoVozilo = $_POST['vozilo'];
        echo "<div class='result'>Odabrano vozilo: $izabranoVozilo</div>";
    }
    ?>
</div>

</body>
</html>
