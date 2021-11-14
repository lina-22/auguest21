<?php
// $n=1000;
// $rate=1.0075;
// $year=2031;
// for($i=2021; $i<=$year; $i++){
//     echo "1er janvier $n <br>";
//     $n=($n*$rate);


// }





$anné=2021;
$taux=1.0075;
$prix=1000;

for($i=$anné; $i<=2031; $i++ ){
    echo " la somme est $i = $prix <br>";
    $prix =($prix*$taux);
}
?>