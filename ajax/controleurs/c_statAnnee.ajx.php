<?php
$action = $_POST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch ($action) {
    case 'voirStatAnnee': {
            $lAnnee = $_POST['lstAnnee'];
            $lesFraisAnnuels = $pdo->getLesFraisAnnuels($idVisiteur, $lAnnee);
            include("vues/v_statAnnee.ajx.php");
        }
}
?>
