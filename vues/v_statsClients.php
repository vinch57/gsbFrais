<hr>
<div class="panel panel-primary">
    <div class="panel-heading">Tableau de bord total des clients</div>
</div>
<div class="panel panel-info">
    <table class="table table-bordered table-responsive">
        <tr>
            <th>Client</th>
            <th>Contact</th>
            <th>Ville</th>
            <th>Nombre</th>
            <th>Montant</th>
        </tr>
        <?php
        $totalNombreFrais = 0;
        $totalMontantFrais = 0;
        foreach($lesFraisForfaitTotauxParClient as $ligneFraisClient) {
            $totalNombreFrais += $ligneFraisClient['nombreFrais'];
            $totalMontantFrais += $ligneFraisClient['montantFrais'];
        ?>
        <tr>
            <td><?php echo $ligneFraisClient['nom'] ?></td>
            <td><?php echo $ligneFraisClient['civiliteTitreContact'].' '
                .$ligneFraisClient['prenomContact'].' '.$ligneFraisClient['nomContact'] ?></td>
            <td><?php echo $ligneFraisClient['ville'] ?></td>
            <td><?php echo $ligneFraisClient['nombreFrais'] ?></td>
            <td><?php echo number_format($ligneFraisClient['montantFrais'], 2, ',', ' ') ?></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <th></th>
            <th></th>
            <th>Totaux</th>
            <th><?php echo $totalNombreFrais; ?></th>
            <th><?php echo $totalMontantFrais; ?></th>
        </tr>
    </table>
</div>