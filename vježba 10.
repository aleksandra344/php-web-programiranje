<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brojanje riječi</title>

</head>
<body>

<div class="container">
    <h2>Brojanje riječi</h2>

    <!-- Forma za unos rečenice -->
    <form method="post">
        <label for="inputText">Ulazni niz:</label>
        <input type="text" name="inputText" id="inputText" placeholder="Unesite rečenicu" required>
        <button type="submit" name="countWords">Broj riječi</button>
    </form>

    <?php
    // Provjera je li korisnik poslao formu
    if (isset($_POST['countWords'])) {
        // Dohvat unesene rečenice
        $inputText = $_POST['inputText'];
        
        // Brojanje riječi koristeći str_word_count
        $wordCount = str_word_count($inputText);
        
        // Prikaz broja riječi
        echo "<div class='result'>Broj riječi: $wordCount</div>";
    }
    ?>
</div>

</body>
</html>
