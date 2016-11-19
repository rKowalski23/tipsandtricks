<?php

echo "Initial: ".memory_get_usage()." bytes \n";

 
for ($i = 0; $i < 100000; $i++) {
    $array []= md5($i);
}
 
for ($i = 0; $i < 100000; $i++) {
    unset($array[$i]);
}
 
echo "Final: ".memory_get_usage()." bytes \n";

 
echo "Peak: ".memory_get_peak_usage()." bytes \n";

?>