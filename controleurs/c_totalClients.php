<?php

$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch ($action) {
    case 'tableauClient': {
        $lesFraisForfaitTotauxParClient = getAPI('totauxfraisparclients/'.$idVisiteur);
        include("vues/v_statsClients.php");
    } break;
}
?>