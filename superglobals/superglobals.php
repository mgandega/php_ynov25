<?php 
// un superglobal est une variable(tableau) qui est présent (definie) partout 

// exemple
// on va travailler aujourd'hui sur la superglobals $_GET et $_POST
// print_r($_GET);

// $_GET nous permet de passer ou de recuperer une variable de page en page via  l'url

// exemple: 
// les superglobals commancent toujours par un underscore et sont toujours en majuscule à l'exception de globals

echo "<pre>";
print_r($_GET);
echo "</pre>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
// si prenom existe bien sur l'url affiche moi sa valeur
// if(isset($_GET['prenom'])){
//     echo "vous êtes bien ".$_GET["prenom"];
// }
// if(isset($_GET["fruit"])){
//     echo "j'aime bien ce fruit <br>";
// }
// if(isset($_GET['prenom']) && $_GET['nom']){
//     echo "vous êtes ".$_GET['prenom']." ".$_GET['nom']."<br>";
// }

if(isset($_GET["plat"])){
    echo "vous préférez manger ".$_GET["plat"]."<br>";
}
?>
 <!-- le point d'interrogation veut dire que ce qui va suivre sera les parametres #}
prenom est un parametre et jean est la valeur 
-->
<!--ici on est sur la meme page et on fait passer sur l'url prenom=jean-->

<!--<a href="?fruit=banane">cliquez moi </a> -->

<!--ici on va sur la page page2.php et on fait passer prenom=jean-->
<!--<a href="page2.php?prenom=jean">cliquez moi </a>-->

<!-- Avec les superglobals, il y'a toujours 2 phases, la premiere c'est le fait de passer les informations et la deuxieme c'est les testes -->

<!--afficher vous êtes jean macron -->
<!--<a href="?prenom=jean&nom=macron">cliquez moi </a>-->

<!--créons une page "page1.php", en cliquant sur "cliquez moi" afficher "vous êtes jean macron " sur la page page1.php --> 

<!--<a href="page1.php?prenom=jean&nom=macron">cliquez moi</a>-->

<!--
<h3>Que preferez vous manger ?</h3>
<ul>
    <li><a href="?plat=pizza">pizza</a></li>
    <li><a href="?plat=hamburger">hamburger</a></li>
    <li><a href="?plat=kebab">kebab</a></li>
    <li><a href="?plat=steak">steak</a></li>
</ul>
-->
<!--si on clique sur un choix, on affiche vous preferez manger pizza, hamburger,kebab ou steak (le choix cliqué)-->


<?php 
// $_POST est un superglobal qui est surtout utilisé dans les formulaire, il permet de recuperer ou d'afficher les informations d'un formulaire
if(!empty($_POST)){
    echo "votre prenom est : ". $_POST["prenom"]."<br>";
    echo "votre nom est : ".$_POST["nom"]."<br>" ;
    echo "votre message est : ". $_POST["message"]."<br>";
}
?>
<!-- action="" signifie que l'on va faire le tratement du formulaire sur la meme page -->
<!--les methodes des formulaires sont en GET par defaut , donc il faut definir method="post" pour faire passer les données en post -->

<!--faites des phrases avec toutes les informations envoyées par le formulaire -->
<form action=""  method="post">
   prenom: <input type="text" name="prenom" placeholder="le prenom"> <br><br>
   nom: <input type="text" name="nom"> <br><br>
   age: <input type="number" name="nombre"> <br><br>
   date: <input type="date" name="date"> <br><br>
   message: <textarea name="message"> </textarea><br><br>

   votre fruit préféré :<br>
      <select name="fruit">
        <option value="banane">banane</option>
        <option value="pomme">pomme</option>
        <option value="poire">poire</option>
      </select><br><br>

   votre sport préféré : <br>
   football: <input type="radio" name="sport" value="football"><br>
   basketball: <input type="radio" name="sport" value="basketball"><br>
   volleyball: <input type="radio" name="sport" value="volleyball"><br><br>


   <input type="submit" value="envoyer">



</form>

<!-- action="page1.php" signifie que l'on va faire le tratement du formulaire sur la page1.php -->
<!--<form action="page1.php" method="post">

</form>-->