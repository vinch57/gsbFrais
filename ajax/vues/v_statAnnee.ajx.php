<?php
echo '<br/><br/><br/>';
echo '<div class="panel panel-primary">';
echo '<div class="panel-heading">Frais remboursés de l\'année ' . $lAnnee . ' :</div>';
echo '<table class="table table-bordered table-responsive">';
echo '<th>Mois</th>';
echo '<th>Montant remboursé</th>';
echo '<th>Nombre justificatifs</th>';
foreach ($lesFraisAnnuels as $uneLigne) {
    echo '<tr>'
    . '<td>' . $uneLigne[0] . '</td>'
    . '<td>' . $uneLigne[1] . '</td>'
    . '<td>' . $uneLigne[2] . '</td>'
    . '</tr>';
}
echo '</table>';
echo '</div>';
?>