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
                $tab=array();
                for($i=0;$i<count($lesFraisForfaitTotaux);$i++)
                {
                    $tab[$i][0] = $lesFraisForfaitTotaux[$i][0];
                    $tab[$i][1] = $lesFraisForfaitTotaux[$i][1]. ' €';
                    $tab[$i][2] = (isset($lesFraisHorsForfaitTotaux[$i][1])) ? $lesFraisHorsForfaitTotaux[$i][1].' €' : '-';
                    $tab[$i][3] = $tab[$i][1]+$tab[$i][2] .' €';
                }
                //var_dump($tab);
                foreach ($tab as $ligne)
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