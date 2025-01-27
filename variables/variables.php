<?php 

// Une variable est un espace mémoire qui stocke une information temporaire

// le = est un signe d'affectation ou d'assignation
// la valeur jean est affectée (assignée) à la variable prenom
// il ne faut pas oublier d'entourer la valeur de double ou simple quote car c'est une chaine de caractères
// $prenom = "jean ccgffhfhggugug"; // type string (chaine de caractères)
// $prenom ="paul";
// echo $prenom;
// // echo "Bonjour $prenom <br>";

// $age = 12; // type int, ou integer (entier)
// $nombre = 22.5; // type float ou double (decimal)
// $permission = true;  // ou false // type boolean ou bool (booléen)

// afficher je m'appelle jean et j'ai 12 ans
// echo "je m'appelle $prenom et j'ai $age ans ";

// var_dump($prenom); // permet de debogger une variable ou une condition 


// concaténation 
// cacaténation c'est le fait de lier une variable et une chaine de caractères avec un point

// echo "je m'appelle $prenom et j'ai $age ans ";
// echo "je m'appelle ".$prenom." et j'ai ".$age." ans ";
// l'antislash est un symbole d'échappement, il permet de dire dire que le caractère qui suit fait parti du texte
// echo 'je m\'appelle '.$prenom.' et j\'ai '.$age.' ans ';
// afficher je m'appelle jean et j'ai 12 ans en entourant le "et" de double quote
// echo "je m'appelle $prenom \"et\" j'ai $age ans ";

//déclarer une variable nombre1, nombre2 et lui assigner respectivement la valeur 25 et 35
// affiches moi : la somme est : $resultat avec le resultat en gras
// exemple : la somme est : 34 (avec 34 en gras)
// $nombre1 = 25;
// $nombre2 = 35;
// $resultat = $nombre1+$nombre2;
// echo "le resultat est: <b>$resultat</b> <br>";

// noms des variables autorisés
// $prenom, 
// $prenom23, 
// $monPrenom, camelcase
// $mon_prenom,  snakecase
// $_prenom, 
// $pren_nom
// noms des variables pas autorisés
// $1prenom, // pas de nom au deut ou au milieu
// $prenom@ // pas de caractères spéciaux
// $pre nom // pas d'espace au milieu du nom
// $ prenom // pas d'espace au début du nom

// $prenom  != $Prenom

// assignation par reference

// $fruit1 = "orange";
// $fruit2 = "mandarine";
// $fruit1 = &$fruit2; // assignation par réference de $fruit2 à $fruit1

// // avec l'assignation par réference (&) , toute modification d'une variable affectera l'autre
// // les deux variables sont partage la même réference donc elles intimement liées 
// $fruit1 = "banane";
// echo $fruit1;
// echo "<br>";
// echo $fruit2;

// les constantes

define('VILLE', 'paris');

echo "il pleût à ".VILLE;

?>
