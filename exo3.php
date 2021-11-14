<?php

// $valeurA=1000;

// for($i = 2021; $i <=2031; $i++)
// {
//     echo "1er Janvier $i la somme est egale a $valeurA <br>";
           
        //  $valeurA
      
// // }



/* debut
somme =1000
fin =2031
pour ($anne=2021; $anne<=$fin; $anne++)

debut pour
affiche "le 1er janvier " ".anne. "la somme est egale a ".somme  
somme= somme*1.0075;

*/


$somme=1000;
$fin=2031;
for($i=2021; $i<=$fin; $i++)
{
   
    echo "le 1er janvier $i la somme est égale à $somme <br>";
    
    $somme=$somme*1.0075;


    
   echo "test";
}

?>