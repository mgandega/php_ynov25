<!--exercice1:
Calculer la moyenne des notes suivantes (sur 20): -->
<?php 
// $note_maths = 15; $note_francais = 12; $note_histoire_geo = 9; $moyenne = 0; 
// echo 'La moyenne est de '.$moyenne.' / 20.'; 

// $note_maths = 15;
// $note_francais = 12;
// $note_histoire_geo = 9;
// $moyenne = ($note_maths + $note_francais + $note_histoire_geo)/3;
// echo 'La moyenne est de '.$moyenne.' / 20.'; 

// exercice2:
// Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(), 
// faire en sorte que le type de la variable $test soit string et que la valeur soit bien de 42

// $test = "42";// ici la valeur de test est 42 et son type est une chaine de caractères
// var_dump($test);

// exercice3:
// Créer une nouvelle page index.php.
// • Définir une variable nom puis lui assigner Martin.
// • Définir une variable anneeNaissance puis lui assigner 2000.
// • Afficher à l’écran « Bonjour Mr Martin vous avez 20 ans ». Martin et 20 sont bien sûr issus des
// variables nom et anneeNaissance. La calcul de l’âge est simplement le résultat de l’année en
// cours (ici 2020) moins l’année de naissance.
// Ouvrir le code source html généré. Vérifier que le code HTML est conforme au standard HTML
// avec les balises html, title, head, body

// $nom = "martin";
// $anneeNaissance = 2000;
// $annee = 2025;
// $age = $annee - $anneeNaissance;
// echo "Bonjour Mr $nom vous avez $age ans";

// // exercice4:
// Déclarer 2 variables : nom et prénom.
// -- Les initialiser avec les valeurs « Dupont » et « Louis »  
// -- les afficher sur la page en utilisant 3 modes syntaxiques différents  
// -- en mettant un espace entre le nom et le prenom 
// -- en utilisant des apostrophes ou des guillemets sur les variables
// -- en séparant chaque affichage par un retour à la ligne (<br>) .
// le resultat final doit afficher je m'appelle Louis Dupont

// • 2 commandes echo
// • 1 commande echo avec 1 seule chaîne de caractère
// • 1 commande echo avec le point de concaténation 

$nom = "Dupont";
$prenom = "Louis";

echo "je m'appelle $prenom $nom <br>";
echo 'je m\'appelle '.$prenom.' '.$nom.' <br>';
echo "je m'appelle ".$prenom.' '.$nom." <br>";

?>
