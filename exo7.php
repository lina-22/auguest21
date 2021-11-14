<?php



/*
Impossible
Faut pas rêver
C'est non
Peu probable
Repose ta question
Une chance sur deux
Le sort en est jeté
Très probable
Oui 
C'est certain


if($score<=10)
for($i=0; $i<$nbA; $i++)


*/

$nbrQuestion=7;
for($i=0;$i<=$nbrQuestion;$i++)

{

$score=rand(1,100);

if($score<=10){
    echo "Impossible <br>";
}
elseif($score<=20){
    echo "Faut pas réver <br>";
}
elseif($score<=30){
    echo "C'est non <br>";
}
elseif($score<=40){
    echo "Peu probable <br>";
}
elseif($score<=50){
    echo "Reponse ta question <br>";
}
elseif($score<=60){
    echo "Une chance sur deux <br>";
}
elseif($score<=70){
    echo "le sort en est jeté <br>";
}
elseif($score<=80){
    echo "Trés probable <br>";
}
elseif($score<=90){
    echo "oui <br>";
}

elseif($score<=100){
    echo"C'est certain";
}
}


?>