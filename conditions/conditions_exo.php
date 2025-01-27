<?php
// exercice 1 :
// Affecter respectivement les valeurs 150, 350 et 10 aux variables prix_table, 
// prix_armoire et nombre.
// • Afficher le prix pour les 10 armoires.
// • Comparer le prix de l’armoire et de la table et afficher quel est le prix le 
// plus élevé. (ici on va mettre un "if", un "elseif" et un "else")

// $prix_table = 150;
// $prix_armoire = 350;
// $nombre = 10;

// $prix = $prix_armoire * $nombre;
// echo "le prix des 10 armoires est $prix <br>";

// if( $prix_armoire>$prix_table ){
//     echo "le prix le plus élevé est le prix de l'armoire <br>";
// }elseif($prix_armoire<$prix_table){
//     echo "le prix le plus élevé est le prix de la table <br>";
// }else{
//     echo "ils ont le même prix";
// }

// Exercice 2 :
// Déclarer une variable $heure qui contient la valeur de type integer de votre 
// choix comprise entre 0 et 24. Créer une condition qui affiche un message si 
// l'heure est le matin, l'après-midi ou la nuit.

// $heure = 18;
// if($heure <0 || $heure >24){
//     echo "heure invalide";
// }elseif($heure >0 && $heure <12){
//     echo "on est le matin";
// }elseif($heure >= 12 && $heure <18){
//     echo "on est à l'après midi <br>";
// }elseif($heure>= 18 && $heure <=0){
//     echo "c'est le soir";
// }else{
//     echo "caractère invalide";
// }

// Exercice 3
// Tester ces differents pays en utilisant un switch et d'afficher un message de bienvenue comme: bienvenue en france , italie...
// Ces pays sont: france , italie, espagne, angleterre.
// N'oublier pas de mettre un defaultau cas où 

// $pays = "france";
// switch ($variable) {
//     case 'espagne':
//         echo "bienvenue en espagne";
//         break;
//     case 'france':
//         echo "bienvenue en france";
//         break;
//     default:
//         echo "au revoir";
//         break;
// }