<?php 
// $prenom = "jean";
// $prenom = "paul"; // $prenom stocke une et une seule information .
// $prenom = "pierre, paul, jacques"; // ceci est une seule information malgré 
// qu'il ait plusieurs mots ;

//  $prenoms = ["pierre","paul","jacques"]; // là on stocke plusieurs valeur
// un tableau est une variable qui peut stocker plusieurs valeurs (éléments)
// syntaxe 
$nomVariable = ["valeur1","valeur2","valeur3","valeur4","valeur5"];
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

$prenoms = ["pierre","paul","jacques"];
for($i=0; $i<=2; $i++){
    echo $i."<br>";
}



