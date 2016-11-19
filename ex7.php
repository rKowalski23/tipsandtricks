<?php

$myvar = array(
    'hello',
    42,
    array(1,'two'),
    'apple'
);
 
// convert to a string
$string = json_encode($myvar);
 
echo $string;
/* prints
["hello",42,[1,"two"],"apple"]
*/
 
// you can reproduce the original variable
$newvar = json_decode($string);
 
print_r($newvar);

?>