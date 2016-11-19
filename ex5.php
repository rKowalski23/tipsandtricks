<?php

require_once('config/database.php');

require_once(dirname(__FILE__) . '/config/database.php');

my_debug("some debug message", __LINE__); 

my_debug("another debug message", __LINE__);
 
function my_debug($msg, $line) {
    echo "Line $line: $msg\n";

?>