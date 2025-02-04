<?php
// Les boucles permettent de repeter un bout de quôte si certaines conditions est vraies
// parmis les boucles, les plus utilisées sont : la boucle for, while et foreach

// la boucle for
// syntaxe:
// le premier argument est la phase d'initialisation
// le deuxieme est la condition 
// le troisieme est l'incrémentation ou la décrémentation
// $i++ c'est le pas (il avance de 1)

// for(/*phase d'initialisation*/, /* la condition */, /* l'incrémentation */ ){
//     // code à executer
// }

// for ($i=0; $i <=10 ; $i++) { 

//     echo $i."<br>";
//     if($i == 4){
//         break; // le mot clé break permet de sortir de la boucle
//     }
// }

// for ($i=0; $i <=10 ; $i++) { 

//     if($i == 4){
//         continue; // le mot clé continue continue de boucler sans executer le reste du quôte
//     }
//     echo $i."<br>";
// }


// while 
// syntaxe

// // phase d'initialisation

// while(/*la condition */){

//     // phase d'incrémentation
// }

// $i = 1;
// while($i<=10){
//     echo $i."<br>";
//     $i++; // $i = $i + 1
// }