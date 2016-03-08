<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<?php
// define variables and set to empty values
$name = $age = "";

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
<form method = "post" action ="index.php">
    Name: <input type = "text" name = "name">
    Age: <input type = "number" name="age">
    <input type = "submit" name = "submit" value=" Submit">
</form>

<?php

//$name = $age = "";
$name = $_POST['name'];
$age = $_POST['age'];




echo "<h2>Your Input: </h2>";
echo $name;
echo "<br>";
echo $age;
echo "<br>";

if ($age >= 21){
    print "You can buy specs, mugs & sausages";
}
elseif($age >= 18 && $age < 21 ) {
    print "You can buy specs & mugs";
}
elseif ($age >= 16 && $age < 18) {
    print "You can buy only specs";
}
elseif ($age > 0 && $age < 16 ){
    print "COME BACK WHEN YOU ARE 16 OR OVER!!!!!";
}

?>


</body>
</html>
