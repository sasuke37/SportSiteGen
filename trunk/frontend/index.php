<?php
/**
 * Date: 15/01/14
 *
 * Script d'administration du cms
 *
 */
session_start();
if(isset($_GET['page']) || isset($_POST['page'])) {
	$page = $_REQUEST['page'];

	switch($page) {
		case 'connexion':
			include("html/connexion.html");
			break;
		case 'deconnexion':
			include("php/logout.php");
			break;
		case 'inscription':
			include("html/inscription.html");
			break;
		case 'about':
			include("html/about.html");
			break;
		case 'calendrier':
			include("html/calendrier.html");
			break;
		case 'equipe':
			include("html/equipe.html");
			break;
		case 'fiche_joueur':
			include("html/fiche_joueur.html");
			break;
		case 'membre_equipe':
			include("html/membre_equipe.html");
			break;
		case 'news':
			include("php/news.php");
			break;
		case 'news_simple':
			include("html/news_simple.html");
			break;
		case 'new_commentaire':
			include("php/new_commentaire.php");
			break;
		default:
			include("html/index.html");
	}
} else {
	include("html/index.html");
}

?>