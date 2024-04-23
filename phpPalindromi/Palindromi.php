<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jono =$_POST["jono"];
    $onoj = strrev($jono);
    if ($jono == $onoj) 
    {
        echo "<br>".$jono." sana on palindromi";
    }
    else if ($jono != $onoj) { echo "sana ei ole palindromi"; }
    ?>
</body>
</html>