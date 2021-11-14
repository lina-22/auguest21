<?php


/*
variable
alea en entier
fin en entier
i en entier
fin=10
pour(i=1; i<=fin;i++)
{
    alea=nombre aleatoire entre 1 et 6
}
*/


$fin= 10;
$alea;

for ($i=1; $i<=$fin; $i++)
{
    
   $alea=rand(1,6);
   
   echo "Tirage n°$i le nombre = $alea <br>";
}






/*$alea=rand(1,6);//5
echo "$alea<br>";//5
echo "$alea<br>";//5


$alea=rand(1,6);//3
echo "$alea<br>";//3*/





?>