<?php
$idVisiteur = $_SESSION['idVisiteur'];
$mois = getMois(date("d/m/Y"));
$numAnnee = substr($mois, 0, 4);
$numMois = substr($mois, 4, 2);
$action = $_REQUEST['action'];

switch ($action) {
    case 'saisirFrais': {
            if (getAPI('estpremierfrais/'.$idVisiteur.'/mois/'.$mois)) {
                //$pdo->creeNouvellesLignesFrais($idVisiteur, $mois);
                actionAPI(
                    'fichefrais',
                    'POST',
                    array(
                        'idVisiteur' => $idVisiteur,
                        'mois' => $mois
                    )
                );
            }
            break;
        }
    case 'validerMajFraisForfait': {
            $lesFrais = $_REQUEST['lesFrais'];
            if (lesQteFraisValides($lesFrais)) {
                actionAPI(
                    'majfraisforfait',
                    'PUT',
                    array(
                        'idVisiteur' => $idVisiteur,
                        'mois' => $mois,
                        'lesFrais' => $lesFrais
                    )
                );
            } else {
                ajouterErreur("Les valeurs des frais doivent être numériques");
                include("vues/v_erreurs.php");
            }
            break;
        }
    case 'validerCreationFrais': {
            $dateFrais = $_REQUEST['dateFrais'];
            $libelle = $_REQUEST['libelle'];
            $montant = $_REQUEST['montant'];
            valideInfosFrais($dateFrais, $libelle, $montant);
            if (nbErreurs() != 0) {
                include("vues/v_erreurs.php");
            } else {
                $data = array(
                    'idVisiteur' => $idVisiteur,
                    'mois' => $mois,
                    'date' => $dateFrais,
                    'libelle' => $libelle,
                    'montant' => $montant
                );
                actionAPI(
                    'fraishorsforfaits',
                    'POST',
                    $data
                );
            }
            break;
        }
    case 'supprimerFrais': {
            $idFrais = $_REQUEST['idFrais'];
            actionAPI(
                'fraishorsforfait',
                'DELETE',
                array(
                    'idFrais' => $idFrais
                )
            );
            break;
        }
}

$lesFraisHorsForfait = getAPI('fraishorsforfaits/'.$idVisiteur.'/mois/'.$mois);
if($lesFraisHorsForfait == null) {
    $lesFraisHorsForfait = array();
}
$lesFraisForfait = getAPI('fraisforfaits/'.$idVisiteur.'/mois/'.$mois);
include("vues/v_listeFraisForfait.php");
include("vues/v_listeFraisHorsForfait.php");
?>