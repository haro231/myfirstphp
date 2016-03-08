<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<h2>
    SPECS, MUGS & SAUSAGES
</h2>
<form method = "post" = action="<?php
    echo htmlspecialchars($_SERVER [PHP_SELF]);?>">
    Name: <input type = "text" name = "name">
    Age: <input type = "number" age = "age">
</form>


</body>
</html>
