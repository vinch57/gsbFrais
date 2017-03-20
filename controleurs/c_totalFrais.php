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
        $tabTotalTotal = array();
        for($i=0;$i<count($lesFraisForfaitTotaux);$i++)
        {
            $tabTotal[$i][0] = $lesFraisForfaitTotaux[$i][0];
            $tabTotal[$i][1] = $lesFraisForfaitTotaux[$i][1]. ' €';
            $tabTotal[$i][2] = (isset($lesFraisHorsForfaitTotaux[$i][1])) ? $lesFraisHorsForfaitTotaux[$i][1].' €' : '-';
            $tabTotal[$i][3] = $tabTotal[$i][1]+$tabTotal[$i][2] .' €';
        }
        include("vues/v_totalFrais.php");
    } break;
}
?>