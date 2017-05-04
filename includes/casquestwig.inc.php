<?php
// Inclusion de Twig
include_once('Twig/Autoloader.php');
Twig_Autoloader::register();
try {
		// Requête SQL
		$cnx = new PDO('mysql:host=127.0.0.1;dbname=nolark', 'nolarkuser', 'nolarkpwd');
		$req = 'SELECT * FROM casques INNER JOIN type ON casques.type=type.id';
		$req .= ' INNER JOIN marques ON casques.marque=marque.id';
		$req .= ' WHERE libelle="' . substr($pageActuelle, 0, -4) . '"';
		$res = $cnx->prepare($req);
		$res->execute();
		$res->fetch(PDO::FETCH_OBJ);
		// Fermeture connexion
		unset($cnx);
		// Définition du répertoire vers les templates
		$loader = new Twig_Loader_Filesystem('../tpl');
		// Initialisation de l'environnement Twig
		$twig = new Twig_Environment($loader, array(
		'cache' => false,
		));
		// Chargemement du template
		$template = $twig->loadTemplate('casques.twig');
		// Affectation des variables du template
		echo $template->render(array(
		'casques' => $res
		));
	} catch (PDOException $e) {
		echo 'Erreur: ' . $e->getMessage();
	}
?>