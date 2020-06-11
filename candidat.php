<?php
session_start();
//var_dump($_SESSION['pseudo']);

if (!$_SESSION['pseudo']){
        header('Location: index.php');
        exit();
}


require "utilisateurs.php";
require "request.php";
require "Offres2.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="style/style.css" rel="Stylesheet" type="text/css" >
</head>
<body>
	<?php include "header.php" ?>

	<h3 class="titreoffres" >creer une offre</h3>

            <div id="offre" class="offreformulaire">

                <form method="post">

                    <p>Entrez les informations suivantes :</p>

                    <ul>
                        <li><label for="nomA">titre de votre offre :</label></br><input type="text" id="nomA" name="nomA"/></li>
                        <li><label for="nomE">Entreprise :</label></br><input type="text" id ="'nomE'" name="nomE"/></li>
                        <li><label for="lieux">Lieux :</label></br><input type="text" id ="lieux" name="lieux"/></li>
                        <li><label for="debut">date de debut</label></br><input type="date" id="debut" name="debut"/></li>
                        <li><label for="fin">date de fin</label></br><input type="date" id="fin" name="fin"/></li>
                        <li><label for="salaire">Salaire :</label></br><input type="text" id="salaire" name="salaire"/></li>
                        <li><label for="descri">Déscription du poste :</label></br><input type="text" id="descri" name="descri"/></li>
                    </ul>

                    

                    <button class="bvalid" type="submit" value="">Valider mon offre</button>

                </form>
            
            </div>

        </div>
        
<?php
//echo "coucou je suis là";
$bdd = new Request('mysql', 'localhost', 'didax', 'root', 'root');
// echo "je suis encore là";
$bdd->getmybdd();

/**
* envoi données à la bdd apres verification que la variable de stockage des données transmises par le formulaire n'est pas vide
*/

if(sizeof($_POST)>0){
$offres = new Offres ($_POST['nomA'],$_POST['nomE'],$_POST['lieux'],$_POST['debut'], $_POST['fin'], $_POST['salaire'],$_POST['descri']);
//var_dump($offres)
$bdd->setInsertoffre($offres->getNomA(), $offres->getnomE(), $offres->getlieux(), $offres->getdebut(), $offres->getfin(), $offres->getsalaire(), $offres->getdescri());
//echo $bdd;
//echo $aviateur;
}
?>

</body>
</html>