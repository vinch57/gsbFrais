<?php

$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch ($action) {
    case 'voirTotalFrais': {
        //Anciènne méthode
        //$lesFraisHorsForfaitTotaux = $pdo->getLesFraisHorsForfaitTotaux($idVisiteur);
        //$lesFraisForfaitTotaux = $pdo->getLesFraisForfaitTotaux($idVisiteur);
        
        $lesFraisForfaitTotaux = getAPI('fraisforfaittotauxes/'.$idVisiteur);
        $lesFraisHorsForfaitTotaux = getAPI('fraishorsforfaittotauxes/'.$idVisiteur);
        include("vues/v_totalFrais.php");
    } break;
}
?>