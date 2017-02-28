<?php

$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch ($action) {
    case 'selectionnerAnnee': {
        $lesAnnees = $pdo->getLesAnneesDisponibles($idVisiteur);
        // Afin de sélectionner par défaut la dernière année dans la zone de liste
        // on demande toutes les clés, et on prend la première,
        // les années étant triées de manière décroissante
        $lesCles = array_keys($lesAnnees);
        $anneeASelectionner = $lesCles[0];
        include("vues/v_listeAnnee.php");
    } break;
}
?>
