<?php
// les conditions permettent d'execution ce qui se trouve entre les accolades si telle condition est vrai (retourne true)
// syntaxe:
// si ce qui se trouve entre les parenthéses retourne true, le code qui se trouve entre les accolades s'execute
// if (condition à tester){
//     // code à éxecuter
// }

// exemple:
$age = 23;
// == est l'égalité mathématique , ici on teste si $age (23) est égale à 23, si c'est vraie la condition retourne true et ce qui se trouve entre les accolades s'executera
// il y'a que deux endroit ou écrire du code, la premiere c'est entre les parentheses et la deuxieme c'est entre les accolades
// if($age == 23){
//     echo "il a l'age qu'il faut";
// }else{
//     // le else est la condition par défaut, si aucun if ne correspond (ne retourne pas true), c'est le else qui s'executera dans tous les cas
//     echo "il n'a pas l'age qu'il faut";
// }

// if($age == 23){
//     echo "il a l'age qu'il faut <br>";
// }
// if($age == 22){
//     echo "il a l'age qu'il faut <br>";
// }
// if($age == 24){
//     echo "il a l'age qu'il faut <br>";
// }else{
//     echo "il n'a pas l'age qu'il faut <br>";
// }

// if / elseif / else
// if($age == 23){
//     echo "il a l'age qu'il faut <br>";
// }
// elseif($age == 22){
//     echo "il a l'age qu'il faut <br>";
// }
// elseif($age == 24){
//     echo "il a l'age qu'il faut <br>";
// }else{
//     echo "il n'a pas l'age qu'il faut <br>";
// }

// si le if qui précède le else ne s'éxecute pas c'est le else qui s'executera par défaut

// les opérateurs
// >, >=, <, <= : superieur, superieur ou égal, inferieur , inferieur ou égal
// != : différent de
// ! : contraire de 
// == : égalité (mathématique) en valeur
// === : égalité (mathématique) en valeur et type

// les comparaisons
// and ou && : et
// or ou || : ou
// xor : ou (exclusif)

// $age = '23';
// if('23' == 23) => true (ils ont la même valeur)
// if('23' === 23) => false (ils ont la même valeur mais pas le même type car le 1er est une chaine de caractères et le 2e est un entier)

// le switch / case ne teste que les égalités c'est comme un if / elseif / else
// $prenom = "jean";
// switch($prenom){
//     case $prenom: 'jean';
//         echo "bonjour jean";
//         break;
//     case $prenom :'paul';
//         echo "bonjour paul";
//         break;
//     case $prenom: 'martin';
//         echo "bonjour martin";
//         break;
//     default;
//         echo "je ne te connais pas";
// }

// créons 2 variables ville et age et affectons le respectivement la valeur "paris" et "23"
// affichons "le profil est bon" si l'age est compris entre 20 et 25 et que la ville soit paris

// $ville = "paris";
// $age = 23;
// if(($age >=20 and $age <=25) and $ville == "paris"){
//     echo "le profil est bon";
// }else{
//     echo "c'est pas le bon profil";
// }


// Rédiger une expression conditionnelle pour tester si un nombre est à la fois un 
// multiple de 3 et de 5.

// le modulo est le reste de la division

// 15/5 => 3 et il reste 0 , donc 0 est le modulo
// 15 % 3 == 0 => (15 modulo 3 égale à 0)

$nombre = 15;
if($nombre%3 == 0 and $nombre %5 == 0){
    echo "$nombre est multiple de 3 et de 5";
}