<?php 

/********************************* EXERCICE 1 ************************/
// Déclarer une variable de type array qui stocke les informations suivantes :
// France : Paris
// Allemagne : Berlin
// Italie : Rome
// Afficher les valeurs de tous les éléments du tableau en utilisant la boucle foreach.

// $pays = ['France'=>'Paris','Allemagne'=>'Berlin','Italie'=>'Rome'];

// foreach($pays as $cle => $valeur){
//     echo $cle.' correspond à '.$valeur.'<br>';
// }

/********************************* EXERCICE 2 ************************/
// En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires.
//  Puis, tester si le chiffre 42 est dans le tableau et afficher un message en conséquence. Enfin, afficher le contenu de votre tableau avec var_dump.

// initialisation du tableau
// $tableau = [];
// for($i=0; $i<10; $i++){
//     // rand() permet d'afficher une valeur aléatoire
//     $tableau[$i] = rand(10, 100);
//     if($tableau[$i]==42){
//         echo 'bravo vous avez trouve, c\'est le chiffre 42';
//     }
// }

// echo "<pre>";
// print_r($tableau);
// echo "<pre>";

/********************************* EXERCICE 3 ************************/
// En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. Puis, trier les valeurs dans deux tableaux distincts. Le premier contiendra les valeurs inférieures à 50 et le second contiendra les valeurs supérieures ou égales à 50. Enfin, afficher le contenu des deux tableaux.

// $tableau = [];
// $tableau1 = [];
// $tableau2 = [];

// for($i=0; $i<10; $i++){
//     $tableau[$i] =  rand(10,100);
//     if($tableau[$i]<50){
//         $tableau1[$i] = $tableau[$i];
//     }else{
//         $tableau2[$i] = $tableau[$i];
//     }
// }

// echo "<pre>";
//     print_r($tableau);
// echo "<pre>";

// echo '<hr>';

// echo "<pre>";
//     print_r($tableau1);
// echo "<pre>";

// echo '<hr>';

// echo "<pre>";
//     print_r($tableau2);
// echo "<pre>";

/********************************* EXERCICE 4 ************************/

// En utilisant le tableau ci-dessous, afficher seulement les pays qui ont une population supérieure ou égale à 20 millions d'habitants.


//    $pays_population = array(
//       'France' => 67595000,
//       'Suede' => 9998000,
//       'Suisse' => 8417000,
//       'Kosovo' => 1820631,
//       'Malte' => 434403,
//       'Mexique' => 122273500,
//       'Allemagne' => 82800000,
//    );

//    // pour chaque élément du tableau on récupére sa clé et sa valeur correspondante
//    echo "<h3>les pays qui ont une population supérieure à 20 millions</h3>";
//    foreach($pays_population as $cle => $valeur){
//         if($valeur >= 20000000){
//             echo '- '.$cle.'<br>';
//             // echo '- ';
//             // echo $cle;
//         }   
//    }

/********************************  EXERCICE 5 ************************/
// En utilisant le tableau ci-dessous, compter le nombre d'éléments du tableau.

//    $pays_population = array(
//       'France' => 67595000,
//       'Suede' => 9998000,
//       'Suisse' => 8417000,
//       'Kosovo' => 1820631,
//       'Malte' => 434403,
//       'Mexique' => 122273500,
//       'Allemagne' => 82800000,
//    );

//    echo count($pays_population);
//    echo sizeof($pays_population);


/********************************  EXERCICE 6 ************************/

// Quelle syntaxe permet d'afficher le deuxième élément du tableau $cocktails ?

//    $cocktails = array('Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule');

//     echo $cocktails[1];


/********************************  EXERCICE 7 ************************/
// Quelle syntaxe permet d'afficher l'âge de Manuel ?


//    $personnes = array(
//      'Jean' => 16,
//       'Manuel' => 19,
//       'André' => 66
//    );
//    echo '<pre>';
//    print_r($personnes);
//    echo '<pre>';
// echo $personnes['Manuel'];

/********************************  EXERCICE 8 ************************/
// Créer une fonction from scratch qui s'appelle dernierElementTableau(). Elle prendra un argument de type array. 
// Elle devra retourner le dernier élement du tableau. Si l'array est vide, il faudra retourner null;

// $tableau = ['pierre','paul','jacques'];

// function dernierElementTableau($tableau){

//     // echo count($tableau);
//     if(sizeof($tableau)==0){
//         $resultat =  'null';
//     }else{
//         $resultat =  $tableau[count($tableau)-1];
//     }
//     return $resultat;
// }

// $res =  dernierElementTableau($tableau);
// echo $res;

/********************************  EXERCICE 9 ************************/
// Créer une fonction from scratch qui s'appelle verificationPassword(). Elle prendra un argument de type string. 
// Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.
// $pass = 'salutation';
// function verificationPassword($pass){
//     if(strlen($pass) >= 8){
//         // echo 'true<br>';
//          return 'true';
//         }else{
//             // echo 'false<br>';
//             return 'false'; 
//         }
// }
// echo verificationPassword($pass);

/********************************  EXERCICE 10 ************************/
// Créer une fonction from scratch qui s'appelle remplacerLesLettres(). Elle prendra un argument de type string. 
// Elle devra retourner cette même string mais en remplacant les e par des 3, les i par des 1 et les o par des 0 Exemple :

// input : "Bonjour les amis" ==> Output : B0nj0ur l3s am1s
// input : "Les cours de programmation Web sont trops cools" ==> Output : L3s c0urs d3 pr0grammat10n W3b s0nt tr0ps c00ls

// $texte = "Bonjour les amis";
// function remplacerLesLettres($texte){
//      $texte = str_replace('e',3,$texte);
//      $texte = str_replace('i',1,$texte);
//      $texte = str_replace('o',0,$texte);
//      return $texte;
// }

// echo remplacerLesLettres($texte);


// $texte = "Bonjour les amis";
// $tab1 = ['e','i','o'];
// $tab2 = ['3','1','0'];
// function remplacerLesLettres($texte){
//     // global $tab1;
//     // global $tab2;
//      $texte = str_replace($tab1,$tab2,$texte);
//      return $texte;
// }

// echo remplacerLesLettres($texte);


