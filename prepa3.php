<?php
$n=1000;
$rate=1.0075;
$year=2031;
for($i=2021; $i<=$year; $i++){
    echo "1er janvier $n <br>";
    $n=($n*$rate);


}


?>