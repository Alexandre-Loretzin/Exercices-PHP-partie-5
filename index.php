<?php

// Exercice 1

$months = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre"
];

// Exercice 2

echo $months[2];
echo "<br><br>";

// Exercice 3

echo $months[5];
echo "<br><br>";

// Exercice 4

$months[7] = "août";

// Exercice 5

 //Aisne (02) Nord (59) Oise (60) Pas-de-Calais (62) Somme (80)
$hdf = [
    2 => "Aisne",
    59 => "Nord",
    60 => "Oise",
    62 => "Pas-de-Calais",
    80 => "Somme",
];

// Exercice 6

echo $hdf[59];
echo "<br><br>";

// Exercice 7

$hdf [51] = "Marne";
echo "<br><br>";

// Exercice 8

foreach ($months as $i){
    echo "$i <br>";
}
echo "<br><br>";

// Exercice 8 

foreach ($hdf as $i){
    echo "$i <br>";
}

echo "<br><br>";

// Exercice 10

foreach($hdf as $key => $value)
{
  echo "Le departement ".$value." a le numero ". $key."<br>";
}