<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backoffice LP</title>
</head>
<body>
<div class="menu">
    <nav>
        <ul>
            <li><a href="#">Créer</a>
                <ul>
                    <li><a href="#">Créer un secteur</a></li>
                    <li><a href="#">Créer une entreprise</a></li>
                </ul>
            </li>
            <li> <a href="search.php" class="current">Rechercher</a></li>
        </ul>
    </nav>
</div>
<div class="moove-right">
    <div class="content">
        <?php
        include_once '../Model/DAO.php';
        include_once '../Model/secteur.php';

        $db = new DAO();
        $list = $db->getSecteurs();
        foreach ($list as $elem) {
            echo $elem->getLibelle();
        }

        ?>
    </div>

</div>
</body>
</html>