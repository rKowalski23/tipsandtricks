<?php

$files = glob('../images/a*.jpg');
 
$files = array_map('realpath',$files);

print_r($files);

?>