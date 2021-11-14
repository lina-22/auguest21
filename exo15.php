<?php

/*

Exercice :
L'utilisateur tire un dé entre 1 et 6 
Tant que la valeur du dé est supérieur a 1 l'utilisateur
tire de nouveau le dé

Exemple : 
4 
3 
6 
1 
0
Exemple : 
4
1 



L'utilisateur renseigne un nombre 
Si le nombre est positif 
par exemple 4 
on affiche 
0 
1 
2 
3 
4 

Si le nombre est negatif 
par exemple -5 on affiche 
0 
-1 
-2 
-3 
-4 
-5 
*/

// Lina task

// $nb=4;
// for($i=0; $i<=4; $i++)
// {echo "$i <br>";
// }

// $nb=-5;
// for($i=0; $i>=-5; $i--)
// {
//     echo "$i <br>";
// }
          //fin  Lina task
            // class work
$nombre=-5;
if($nombre>=0)
{for($i=0;$i<=$nombre;$i++)
    {
        echo "$i <br>";
    } 
}
else{
    for($i=0;$i>=$nombre;$i--)
    {
        echo "$i <br>";
    }
}

?>