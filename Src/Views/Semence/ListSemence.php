<h1>Les Semences</h1>
<div>
    <table>
        <tr>
            <th>NOM</th>
        </tr>

        <?php
            foreach ($semences as $semence) {
            echo    '<tr>'.
                        '<td>'. $semence->getNomSemence() .'</td>'.
                        '<td>'.'<a href="index.php?entity=photo&action=supprimer&id=' . $semence->getIdSemence() . '">Supprimer</a>'.'</td>'.
                    '</tr>';
            }
        ?>
    </table>

</div>
