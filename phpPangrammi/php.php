

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pangrammi tarkistaja</title>
</head>
<body>
    <h2>Syötä sana tai lause:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="input">
        <input type="submit" value="Tarkista">
    </form>
    <?php
function isPangram($input) {
    $input = strtolower($input);
    $alphabet = range('a', 'z');
    
    foreach ($alphabet as $letter) {
        if (strpos($input, $letter) === false) {
            return false;
        }
    }
    
    return true;
}

// Tarkistetaan, onko käyttäjä lähettänyt lomakkeen
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tarkistetaan, onko syöte annettu
    if (isset($_POST["input"]) && !empty($_POST["input"])) {
        $input = strtolower($_POST["input"]);

        // Tarkistetaan, onko syöte pangrammi
        if (isPangram($input)) {
            echo "Sana tai lause on pangrammi.\n";
        } else {
            echo "Sana tai lause ei ole pangrammi.\n";
        }
    } else {
        echo "Syötä sana tai lause.\n";
    }
}
?>
</body>
</html>