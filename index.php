<?php
session_start();										// d�marre la session php si pas de session en cours

require_once("include/fct.inc.php");					// inclut (une seule fois) les fonctions requises pour cette application
require_once("include/class.pdogsb.inc.php");			// inclut (une seule fois) la classe pdogsb requise pour acc�der � la base de donn�es
include("vues/v_entete.php") ;							// inclut la vue entete des pages html

$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();

if(!isset($_REQUEST['uc']) || !$estConnecte){
	$_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];

switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");
		break;
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");
		break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");
		break; 
	}
}

include("vues/v_pied.php") ;

