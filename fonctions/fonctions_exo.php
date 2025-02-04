<?php 
declare(strict_types=1);
// /**************************** ExO 1 *****************************/
// Créer une fonction from scratch qui s'appelle concatenation(). 
// Elle prendra deux arguments de type string. Elle devra retourner la concatenation 
// des deux. Exemple : argument 1 = Antoine Argument 2 = Griezmann; 
// Resultat : je m'appelle Antoine Griezmann (on mettra la chaine Griezmann comme important)

// $arg1 = "antoine";
// $arg2 = "greizmann";
// function concatenation(string $arg1, string $arg2 ){
//     return 'je m\'appelle '.$arg1.' '.$arg2;
// }

// concatenation($arg1, $arg2);

/**************************** ExO 2 *****************************/

// Créer une fonction from scratch qui s'appelle somme(), elle prendra seulement 
// un paramètre par defaut $argument2 (avec sa valeur) . 
// Elle devra retourner la somme de deux variables ($argument1 et $argument2) 

// $arg1 = 30;
// function somme(int $param2=20){
//     global $arg1;
//     $resultat =  $arg1 + $param2;
//     return "la somme est : $resultat";

// }
// echo somme();

/********************************************** exo 3 ****************/
// Créer une fonction from scratch qui s'appelle estIlMajeure(). Elle prendra un argument 
// de type int. Elle devra retourner un boolean. Si age >= 18 elle doit retourner true 
// si age < 18 elle doit retourner false Exemple : age = 5 ==> false age = 34 ==> true .
// Vous pouvez utilisez un if,elseif et else

// $age = 25;
// function estIlMajeure(int $age){
//     if($age > 18){
//         $resultat = 'true';
//     }elseif($age <18){
//         $resultat = 'false';
//     }else{
//         $resultat = "il a 18 ans";
//     }
//     return $resultat;
// }

// echo estIlMajeure($age);

/**************************** ExO 6 *****************************/

//  creer une fonction qui prend 2 paramètres (saison et temperature) et qui permet d'afficher une phrase comme ceci :
//  "Nous sommes en hiver et il fait 20 degrés" .
//  Ici "hiver" et "20" seront remplacés respectivement par les variables $saisons et $temperature
//  Il faut prévoir de mettre un "S" à la fin de dégré si dégré doit être au pluriel et sans "S" si c'est le contraire .

// $saison = "printemps";
// $temperature = 1;
// function meteo($saison, $temperature){

//     $deg = ($temperature>1 || $temperature <-1)?'degres':'degre';
//     $val = ($saison == 'printemps')?'au':'en';
//     echo "nous sommes $val $saison et il fait $temperature $deg";
// }

// meteo($saison, $temperature);
