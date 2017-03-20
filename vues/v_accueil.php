﻿<div id="accueil">
    <h2>Gestion des frais<small> - Visiteur : <?php echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ?></small></h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span> Navigation</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <a href="index.php?uc=gererFrais&action=saisirFrais" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-plus-sign"></span> <br/>Saisir fiche de frais</a>
                        <a href="index.php?uc=etatFrais&action=selectionnerMois" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Mes fiches de frais</a>
                        <a href="index.php?uc=statAnnee&action=selectionnerAnnee" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-stats"></span> <br/>Statistiques annuelles</a>
                        <a href="index.php?uc=statGlobal&action=voirTotalFrais" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-folder-close"></span> <br/>Total des frais</a>
                        <a href="index.php?uc=statClients&action=tableauClient" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon glyphicon-user"></span> <br/>Tableau clients</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>