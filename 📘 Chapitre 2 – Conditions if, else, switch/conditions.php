<?php
$age = 18;
if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}
 
$note = 14;
if ($note >= 16) {
    echo "Très bien";
} elseif ($note >= 10) {
    echo "Passable";
} else {
    echo "Échec";
}

$jour = "Lundi";
switch ($jour) {
    case "Lundi":
        echo "Début de semaine";
        break;
    case "Vendredi":
        echo "Dernier jour avant le week-end";
        break;
    default:
        echo "Jour normal";
}

$age = 20;
$carte = true;

if ($age >= 18 && $carte == true) {
    echo "Vous pouvez entrer.";
}

$note = 8;
$rattrapage = true;

if ($note >= 10 || $rattrapage == true) {
    echo "Vous passez.";
}

