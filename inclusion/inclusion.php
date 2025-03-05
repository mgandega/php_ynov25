<?php 
// include(), include_once(), require(), require_once()
// methode DRY (Don't Repeat Yourself)

// include() permet d'inclure le contenu d'un fichier sur une page, 
// on peut inclure le même fichier plusieurs fois .
// en cas d'erreur, le message d'erreur s'affichera 
// mais on parviendra à voir le rete de la page
// include("sdfghjkl.php");
// include("page1.php");
// include("page1.php");
// echo "hello";

// include_once() permet d'inclure le contenu d'un fichier sur une page, 
// on peut inclure le même fichier une et une seule fois .
// en cas d'erreur, le message d'erreur s'affichera 
// mais on parviendra à voir le rete de la page

// once veut dire une seule fois
// ici le contenu de la page1.php s'affichera une seule fois
// include_once("sdfghjkl.php");
// include_once("page1.php");
// include_once("page1.php");
// echo "hello";

//require() permet d'inclure le contenu d'un fichier sur une page, 
// on peut inclure le même fichier plusieurs fois .
// en cas d'erreur, le message d'erreur s'affichera 
// mais on ne parviendra pas à voir le reste de la page
// require("sdfghjkl.php");
// require("page1.php");
// require("page1.php");
// echo "hello";

//require_one() permet d'inclure le contenu d'un fichier sur une page, 
// on peut inclure le même fichier une seule fois .
// en cas d'erreur, le message d'erreur s'affichera 
// mais on ne parviendra pas à voir le reste de la page
// require("sdfghjkl.php");
// require_once("page1.php");
// require_once("page1.php");
// echo "hello";