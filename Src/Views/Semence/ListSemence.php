<h1>Les Semences</h1>
<div>
    <table>
        <tr>
            <th>NOM</th>
        </tr>

        <?php
            foreach ($semences as $semence) {
            echo '<tr>'.'<td>'. $semence->getNomSemence() . '</td>'.'</tr>';
            }
        ?>


    </table>




</div>