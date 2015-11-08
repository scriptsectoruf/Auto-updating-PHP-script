<?php
//Here is your PHP code that will be updated every 200 miliseconds

//Example code!
$first = '1';
$second = '2';
$third = '3';

$array = array($first, $second, $third);
for ($i=0; $i<5; $i++) {
    echo $array[rand(0, count($array) - 1)] . "\n";
}

?>
