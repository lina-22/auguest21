<?php
$nbrQuestion=5;

for($i=0; $i<=$nbrQuestion; $i++)
{
    $score= rand(1,200);
    if($score<=10){
        echo "i am lina <br>";
    }

    elseif($score<=20){
        echo "i am Fahinur <br>";
    }

    elseif($score<=100){
        echo "i am Haque <br>";
    }

    elseif($score<=50){
        echo "i am fahinur haque lina";
    }
}
?>