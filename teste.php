<?php
$calcA = 10;//float
$calcB = 20;
$calcC = 69;
//$calcB = $calcA;
$calcB = &$calcA;

$calcA = 45;
$calcC = $calcA;
$calcA = 100;

echo "<pre>";
var_dump([
    "a" => $calcA,
    "b" => $calcB,
    "c" => $calcC
]);

//junior A:45 B:100 C:100
//abilio A:100 B:100 C:100
//maciel A:100 B:45 C:45

?>
