﻿<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeconnexion';
}
$action = $_REQUEST['action'];
switch ($action) {
    case 'demandeConnexion': {
            include("vues/v_connexion.php");
            break;
        }
    case 'valideConnexion': {
            $login = $_REQUEST['login'];
            $mdp = $_REQUEST['mdp'];
            $visiteur = $pdo->getInfosVisiteur($login, $mdp);
            if (!is_array($visiteur)) {
                ajouterErreur("Login ou mot de passe incorrect");
                include("vues/v_erreurs.php");
                include("vues/v_connexion.php");
            } else {
                $authentification = authAPI($login, $mdp);
                if ($authentification -> code == 200){
                    $id = $visiteur['id'];
                    $nom = $visiteur['nom'];
                    $prenom = $visiteur['prenom'];
                    $token = $authentification->token;
                    connecter($id, $nom, $prenom, $token);
                    header('Location: index.php');
                }
                else {
                    ajouterErreur($authentification -> message);
                    include("vues/v_erreurs.php");
                    include("vues/v_connexion.php");
                }
            }
            break;
        }
    default : {
            include("vues/v_connexion.php");
            break;
        }
}
?>