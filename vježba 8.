<!DOCTYPE html>
<html lang="hr">
<head>
<title>Kamen, škare i papir</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Aleksandra Blažeković">
    <meta name="viewport" content="width-device-width, intial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }
        .game-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            border: 2px solid #ddd;
        }
        h2 {
            color: #333;
        }
        .choices img {
            width: 100px;
            margin: 10px;
            cursor: pointer;
        }
        .result {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="game-container">
        <h2>Igra Kamen, Škare, Papir</h2>

        <p>Odaberite opciju:</p>
        <div class="choices">
            <a href="?choice=kamen"><img src="kamen.png" alt="Kamen"></a>
            <a href="?choice=škare"><img src="škare.png" alt="Škare"></a>
            <a href="?choice=papir"><img src="papir.png" alt="Papir"></a>
        </div>

        <?php
        if (isset($_GET['choice'])) {
            
            $player_choice = $_GET['choice'];

            $options = ['kamen', 'škare', 'papir'];
            $computer_choice = $options[array_rand($options)];

            echo "<p>Vaš odabir: <strong>" . ucfirst($player_choice) . "</strong></p>";
            echo "<p>Računalo je odabralo: <strong>" . ucfirst($computer_choice) . "</strong></p>";

            if ($player_choice == $computer_choice) {
                echo "<p class='result'>Neriješeno!</p>";
            } elseif (($player_choice == 'kamen' && $computer_choice == 'škare') ||
                      ($player_choice == 'škare' && $computer_choice == 'papir') ||
                      ($player_choice == 'papir' && $computer_choice == 'kamen')) {
                echo "<p class='result'>Pobijedili ste!</p>";
            } else {
                echo "<p class='result'>Izgubili ste!</p>";
            }
        }
        ?>

    </div>

</body>
</html>
