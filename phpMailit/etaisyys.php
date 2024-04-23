<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Etäisyysmuunnos</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = $_POST["distance"];
    $conversionType = $_POST["conversionType"];
    if ($conversionType === "milesToKm") {
        $result = $distance * 1.60934;
        echo "<p>$distance mailia on $result kilometriä</p>";
    } elseif ($conversionType === "kmToMiles") {
        $result = $distance / 1.60934;
        echo "<p>$distance kilometriä on $result mailia</p>";
    } else {
        echo "<p>Virheellinen muunnostyyppi</p>";
    }
    echo "<a href='etaisyys.html'>Takaisin</a>";
} else {
    echo "<p>Virheellinen pyyntö</p>";
}
?>
</body>
</html>
