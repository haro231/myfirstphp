<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<?php
// define variables and set to empty values


/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $age = test_input($_POST["age"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
*/
?>
<h2>
    SPECS, MUGS & SAUSAGES
</h2>
<form method ="post" action="process.php">
    Name: <input type = "text" name = "name">
    Age: <input type = "number" name = "age">
    <input type = "submit" name = "submit" value=" Submit">
</form>




</body>
</html>
