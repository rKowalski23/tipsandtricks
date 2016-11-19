<?php

function foo() {
 
    // returns an array of all passed arguments
    $args = func_get_args();
 
    foreach ($args as $k => $v) {
        echo "arg".($k+1).": $v\n";
    }
 
}
 
foo();
 
foo('hello');
 
foo('hello', 'world', 'again');


?>