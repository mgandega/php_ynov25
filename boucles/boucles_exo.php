<?php
// Exercice 1
// Afficher des nombres allant de 100 à 5.

// for($i=100; $i>=5; $i--){
//     echo $i.'<br>';
// }

// Exercice 2
// Afficher des nombres allant de 20 à 100 avec le chiffre 50 en rouge.

// for($i=20; $i<=100; $i++){
//     if($i==50){
//         echo '<span style="color:red">'.$i.'</span><br>';
//     }else{
//         echo '<span>'.$i.'</span><br>';
//     }   
// }
// Exercice 3
// Afficher des nombres allant de 2000 à 1930.
// $nb = 2000;
// while($nb >= 1930){
//     echo $nb.'<br>';
//     $nb--;
// }

// Exercice 4
// Afficher le titre suivant 100 fois : <h1>Titre à afficher 100 fois</h1>
// exple: <h1>Titre à afficher 1 fois</h1><h1>Titre à afficher 2 fois</h1> ...

// for($i=1; $i<=100; $i++){
//     echo "<h1>Titre à afficher $i fois</h1>";
// }

// Exercice 6
// Essayez de proposer un champ date de naissance en prévoyant les 31 jours 
// existants dans notre calendrier .
// Résultat attendu : un select qui permet de choisir une date .

// echo "<select>";
// echo "<option>selctionner une date</option>";
//     for($i =1; $i<=31; $i++){
//        echo  "<option>$i</option>";
//     }
// echo "</select>";


// Exercice 7
// En utilisant la boucle for, afficher la table de multiplication du chiffre 5.
// exemple: 5x1 = 5

// for($i=1; $i<=10; $i++){
//     echo "5x$i = ".(5*$i).'<br>';
// }

// Exercice 9
// Déclarer une variable avec le nom de votre choix et avec la valeur 0. 
// Tant que cette variable n'atteint pas 20, il faut :

// - l'afficher .
// - incrémenter sa valeur de 2 .
// Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée.

$i = 0;
while($i<20){
    if($i==10){
        continue;
        echo "<span style='color:red'>".$i."</span><br>";
    }else{
        echo "<span>".$i."</span><br>";
    }
    $i+=2; // $i = $i+2
}
?>
