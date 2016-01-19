<!DOCTYPE html>
<html lang="en">
<body>

<?php

echo (random_string('alnum', 8));
    $string = " mike,,pike,,bryndza,,";
echo (reduce_multiples($string,","));

$string = "\n";
echo repeater($string, 30);

$string = "http://example.com//index.php";
echo reduce_double_slashes($string);
// сделает "http://example.com/index.php"

?>

</body>
</html>