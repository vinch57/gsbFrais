<h2>Statistiques annuelles <small> - Visiteur : <?php echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ?></small></h2>
<div class="row">
    <div class="col-md-4">
        <h3>Sélectionner une année : </h3>
    </div>
    <div class="col-md-4">
        <form action="index.php?uc=statAnnee&action=voirEtatFrais" method="post" role="form">
            <div class="form-group">
                <label for="lstAnnee" accesskey="n">Année : </label>
                <select id="lstAnnee" name="lstAnnee" class="form-control">
                    <?php
                    foreach ($lesAnnees as $uneAnnee) {
                        $annee = $uneAnnee['annee'];
                        if ($annee == $anneeASelectionner) {
                            ?>
                            <option selected value="<?php echo $annee ?>"><?php echo $annee ?> </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $annee ?>"><?php echo $annee ?> </option>
                            <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <input id="ok" value="Valider" class="btn btn-success" role="button" onclick="afficherStatAnnee()";/>
            <input id="annuler" type="reset" value="Effacer" class="btn btn-danger" role="button" />
        </form>
    </div>
</div>
<div id="zoneStat">
</div>

