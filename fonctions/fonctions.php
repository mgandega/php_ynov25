<?php 
declare(strict_types=1);
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

// $nb1= 12;
// $nb2 = 24;
// function calcul(int $nb1, int $nb2):int
// {
//   $res = $nb1 + $nb2;
//   return $res;
// }
// echo calcul($nb1, $nb2);


// fonctions liées au chaines de caractères
// strtolower() permet de convertir une chaine de caractères en miniscule
// $prenom = "Jean";
// echo strtolower($prenom);
// strtoupper() permet de convertir une chaine de caractères en majuscule
// $prenom = "Jean";
// echo strtoupper($prenom);
// strlen(); permet de connaitre la longueur d'une chaine de caractères

// echo strlen($prenom);

// str_repeat(); permet de repeter ;une chaine plusieurs fois 
// echo str_repeat('hello <br>', 5);

// str_replace() // permet de remplacer une chaine de caractère par une autre dans une phrase;
// $texte = "bonjour tout le monde";
// echo str_replace('bonjour','bonsoir', $texte);

class Prenom
{
  public function presentation(){
    return "je m'appelle cheikhbi";
  }
}
$pren = new Prenom();

// $callable = [$pren,'presentation'];

// echo '<pre>';
// var_dump($callable());
// echo '</pre>';

// $res = function(){
//   return 'hello';
// };
// echo $res();

class Person{

  public static function presentation(){
    return 'hello hello ...';
  } 
}
$val =  'Person::presentation';
echo $val();





