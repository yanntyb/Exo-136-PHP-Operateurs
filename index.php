<?php

// Premiere ligne
echo 10*5;
echo "<br>";
//Deuxieme ligne
echo 10/2;

//Troisieme ligne
$a = 1;
$b = 1;
if($a===$b) {
    echo "<br><br>a est identique à b";
}

//Quatrieme ligne
if($a!==$b) {
    echo"<br><br>a n'est pas identique à b";
}


//Cinquieme ligne
$arr1 = ["machin", "truc"];
$arr2 = ["truc", "machin"];
if(sort($arr1)==sort($arr2)) {
    echo "<br><br>les tableaux ont le même contenu";
}

