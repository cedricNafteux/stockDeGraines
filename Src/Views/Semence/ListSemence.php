<h1>Les Semences</h1>
<div>
    <?php
    foreach ($semences as $semence) {
        echo '<p>'. $semence->getNomSemence() . '</p>';
    }
    ?>
</div>