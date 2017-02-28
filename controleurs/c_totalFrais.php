<?php

$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch ($action) {
    case 'voirTotalFrais': {
        $lesFraisHorsForfaitTotaux = $pdo->getLesFraisHorsForfaitTotaux($idVisiteur);
        $lesFraisForfaitTotaux = $pdo->getLesFraisForfaitTotaux($idVisiteur);
        include("vues/v_totalFrais.php");
    } break;
}
?>