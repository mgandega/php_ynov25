<?php 
// $prenom = "jean";
// $prenom = "paul"; // $prenom stocke une et une seule information .
// $prenom = "pierre, paul, jacques"; // ceci est une seule information malgré 
// qu'il ait plusieurs mots ;

/*********** tableau numéroté **************/

//  $prenoms = ["pierre","paul","jacques"]; // là on stocke plusieurs valeur
// un tableau est une variable qui peut stocker plusieurs valeurs (éléments)
// syntaxe 
// $nomVariable = ["valeur1","valeur2","valeur3","valeur4","valeur5"];
// on compte à partir de 0
// pierre a comme index 0
// paul a comme index 1
// jacques a comme index 2
// $prenoms = ["pierre","paul","jacques"]; // plus moderne 
// $prenoms = array("pierre","paul","jacques"); // ancienne methode
// si on veut afficher un élément du tableau , on écrit le nom de la variable suivi 
// de crochet, et mettre à l'interieur des crochets l'index .

// echo $prenoms[1];
// autre façon d'inserrer des valeurs dans un tableau
// $prenoms[] = "pierre";
// $prenoms[] = "paul";
// $prenoms[] = "jacques";

// $fruits = ["pomme","banane","mandarine",["poire","kiwi"]];

// afficher mon fruit préfèré est kiwi
// echo '<pre>';
// print_r($fruits);
// echo '</pre>';  

// echo '<pre>';
// print_r($fruits[3]);
// echo '</pre>';

// echo '<pre>';
// print_r($fruits[3][1]);
// echo '</pre>';

// parcourir les éléments du tableau

// $prenoms = ["pierre","paul","jacques"];
// count($prenoms);
// for($i=0; $i<3; $i++){
//     echo $prenoms[$i]."<br>";
// }
// count() permet de compter le nombre d'éléments d'un tableau
// echo count($prenoms); // affiche 3

// en s'inspirant de count() et de la boucle for, afficher 
// le nombre d'éléments du tableau prenom
// $prenoms = ["pierre","paul","jacques"];
// //count($prenoms)  => 3
// for($i=0; $i< count($prenoms); $i++){
//     echo $prenoms[$i]."<br>";
// }

// $fruits = ["pomme",["poire",["kiwi"]],"banane", "mandarine"];

// echo "<pre>";
// print_r($fruits);
// echo "<pre>";
// echo "<hr>";
// echo "<pre>";
// print_r($fruits[1]);
// echo "<pre>";
// echo "<hr>";
// echo "<pre>";
// print_r($fruits[1][1]);
// echo "<pre>";
// echo "<hr>";
// echo "<pre>";
// print_r($fruits[1][1][0]);
// echo "<pre>";
// affichons j'aime bien le kiwi
// echo "j'aime bien le ".$fr

// tableau associatif
// un tableau associatif est un tableau dont chaque valeur
//  est associée à un index nominatif

// prenom est une clé (index)
// pierre est une valeur
// $prenoms = ["prenom"=>"pierre","nom"=>"macron","age"=>49];
// // echo $prenoms["age"]; // affiche 49
// // echo $prenoms["nom"]; // affiche macron

// // pour chaque élément du tableau récupére moi 
// // la valeur correspondante
// // un élément est composé de clé et de valeur
// foreach($prenoms as $valeur){
//     echo $valeur."<br>";
// }

// créer un tableau associatif identite qui a comme clés 
// et valeurs: 

// prenom => robert
// genre => masculin
// ville => paris

// afficher bonjour robert tu es du genre masculin et tu habites 
// à paris

// $identite = ["prenom"=>"robert", "genre"=>"masculin", "ville"=>"paris" ];

// // echo "Bonjour ".$identite["prenom"]." tu es du genre ".$identite["genre"].
// // " et tu habites à ".$identite["ville"];

// foreach ($identite as $cle => $value) {
//    echo "la cle $cle correspond à la valeur $value <br>";
// }

// la fonction rand() affiche des nombres aléatoire allant du minumum au maximum
// echo rand(10, 20);

// stocker la valeur 25 dans le tableau tab
// $tab = [];
// function nombre($valeur){
//     // global permet de rendre la variable disponible dans la fonction
//     global $tab; 
//     $tab[] = $valeur;
//     return $tab;
// }

// nombre(25);

// echo "<pre>";
//     print_r($tab);
// echo "</pre>";

// afficher les nombres allant de 50 à 60 et les stocker dans un tableau
// en utilisant la boucle for

// $monTab = [];
// for ($i=50; $i <=60 ; $i++) { 
//     $monTab[] = $i;
// }

// echo "<pre>";
//     print_r($monTab);
// echo "</pre>";

// foreach ($monTab as  $value) {
//     echo $value."<br>";
// }

// dernier element du tableau
// $prenoms = ["pierre","paul","jacques"];

// // comment faire pour connaitre toujours le dernier élément du tableau
// count($prenoms); // affiche 3 car il y'a 3 éléments
// echo $prenoms[2];
// echo $prenoms[3-1];
// // entre l'index et l'élément , il y'a une différence de 1 
// echo $prenoms[count($prenoms)-1];

$texte = "bonjour tout le monde";

echo str_replace("bonjour","bonsoir", $texte);