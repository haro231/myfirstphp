<?php

//$name = $age = "";
$name = $_POST['name'];
$age = $_POST['age'];


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

echo "<h2>Your Input: </h2>";
echo $name;
echo "<br>";
echo $age;

?>