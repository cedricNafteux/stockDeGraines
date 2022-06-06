<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Src/Assets/Css/style.css">
    <title>Stock de graines</title>
</head>
<body>
    <header>
        <h1>Mon stock de graines</h1>
    </header>
    <nav>
    <a href="index.php?entity=semence&action=list">Accueil</a>
    <a href="index.php?entity=semence&action=ajout">Ajoutez une semence</a>
    </nav>
    <main class="container">
            <?php
            include($view.'.php');
            ?>
    </main>

</body>
</html>