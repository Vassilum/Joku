<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Table</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Tulostettu Taulukko</h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rows = $_POST["rows"];
            $columns = $_POST["columns"];
            $background_color = isset($_POST["background_color"]) ? $_POST["background_color"] : "white";

            echo "<table style='background-color: $background_color;'>";
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $columns; $j++) {
                    echo "<td>Rivi $i, Sarake $j</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>
