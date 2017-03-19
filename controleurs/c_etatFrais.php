<?php
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch ($action) {
    case 'selectionnerMois': {
            //Anciènne méthode
            //$lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
            
            $lesMois = getAPI('lesmoisdisponibles/'.$idVisiteur);
            // Afin de sélectionner par défaut le dernier mois dans la zone de liste
            // on demande toutes les clés, et on prend la première,
            // les mois étant triés décroissants
            $lesCles = array_keys($lesMois);
            $moisASelectionner = $lesCles[0];
            include("vues/v_listeMois.php");
            break;
        }
    case 'voirEtatFrais': {
            $leMois = $_REQUEST['lstMois'];
            $lesMois = getAPI('lesmoisdisponibles/'.$idVisiteur);
            $moisASelectionner = $leMois;
            include("vues/v_listeMois.php");
            $lesFraisHorsForfait = getAPI('fraishorsforfaits/'.$idVisiteur.'/mois/'.$leMois);
            $lesFraisForfait = getAPI('fraisforfaits/'.$idVisiteur.'/mois/'.$leMois);
            $lesInfosFicheFrais = getAPI('lesinfosfichefrais/'.$idVisiteur.'/mois/'.$leMois);
            $numAnnee = substr($leMois, 0, 4);
            $numMois = substr($leMois, 4, 2);
            $libEtat = $lesInfosFicheFrais['libEtat'];
            $montantValide = $lesInfosFicheFrais['montantValide'];
            $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
            $dateModif = $lesInfosFicheFrais['dateModif'];
            $dateModif = dateAnglaisVersFrancais($dateModif);
            include("vues/v_etatFrais.php");
        }
}
?>