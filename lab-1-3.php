<?php
define("NUM_E", 2.71828);

$output = "Число e равно " . NUM_E . "<br>";

$num_e1 = NUM_E;
$output .= "\$num_e1 = $num_e1    " . gettype($num_e1) . "<br>";

$num_e1 = (string) $num_e1;
$output .= "\$num_e1 = $num_e1    " . gettype($num_e1) . "<br>";

$num_e1 = (int) $num_e1;
$output .= "\$num_e1 = $num_e1    " . gettype($num_e1) . "<br>";

$num_e1 = (bool) $num_e1;
$output .= "\$num_e1 = $num_e1    " . gettype($num_e1) . "<br>";

echo $output;
?>
