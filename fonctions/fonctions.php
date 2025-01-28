<?php 
// une fonction permet d'automatiser des traitements oubien de donner un affichage particulier par rapport à un ou plusieurs parametres 

// syntaxe:

// function nomDeLaFonction(les paramètres){
//     // code à exécuter
// }
// nomDeLaFonction(les arguments)

// exemple:

// function addition($a, $b){
//     $res = $a + $b;
//     echo "le résultat est :  $res";
// }
// addition(25, 15);

// ici, la valeur 15 va écrasé la valeur 18 donc $b = 15
// function addition($a, $b=18){
//     $res = $a + $b;
//     echo "le résultat est :  $res";
// }
// addition(25, 15);

// ici, la valeur 15 va écrasé la valeur 18 donc $b = 15
// function addition($a, $b=18){
//     $res = $a + $b;
//     echo "le résultat est :  $res";
// }
// addition(25);

// $nombre = 25;
// function add($a, $b=18){
//     $res = $a + $b;
//     echo "le résultat est :  $res";
// }
// add($nombre);

// $nombre = 25;
// function addition($a, $b=18){
//     $res = $a + $b;
//     $resultat = "le résultat est :  $res";
//     // return permet de retourner l'information dans l'espace global
//     return $resultat;
// }
// $res = addition($nombre);
// echo $res;

// espace local et espace global
// $nombre = 25;
// function addition($a, $b=10){
//    $a = $a +5;
//    return $a;
//     // $res = $a + $b;
//     // $resultat = "le résultat est :  $res";
//     // return $resultat;
// }
// // echo addition($nombre);
// // oubien
// $res = addition($nombre);
// echo $res;
// echo "<br>";
// echo $a;

// function theo(){
//   // après un return tous les quôtes ne seront pas interprétés
//   return "mon prenom est théo";
//   $age = 22;
// }
// echo theo();
// echo "<br>";
// echo $age;
// $a = 25;
// function addition($b=20){
//     global $a;
//     $res = $a + $b;
//     $resultat = "le résultat est :  $res";
//     return $resultat;
// }
// echo addition();
// $a = 25;
// function addition(&$a, $b=30){
// //on assigne la valeur 5 par réference
//     $a = 5;
//     $res = $a + $b;
//     $resultat = "le résultat est :  $res";
//     return $resultat;
// }
// echo addition($a);
// echo "<br>";
// echo $a;

// $fruit1 = "pomme"; 
// $fruit2 = "banane";
// $fruit1 = &$fruit2;
// $fruit2 = "goyave";

// echo $fruit1;
// echo "<br>";
// echo $fruit2;

