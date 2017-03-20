<hr>
<div class="panel panel-primary">
    <div class="panel-heading">Tableau de bord total des notes de frais</div>
</div>
<div class="panel panel-info">
    <table class="table table-bordered table-responsive">
        <tr>
            <th>Année</th>
            <th>Montant au forfait</th>
            <th>Montant hors forfait</th>    
            <th>Total des notes de frais</th>
        </tr>
                <?php
                foreach ($tabTotal as $ligne)
                {
                    echo '<tr>';
                    echo '<td>'.$ligne[0].'</td>';
                    echo '<td>'.$ligne[1].'</td>';
                    echo '<td>'.$ligne[2].'</td>';
                    echo '<td>'.$ligne[3].'</td>';
                    echo '</tr>';
                }
                ?>          
    </table>
</div>