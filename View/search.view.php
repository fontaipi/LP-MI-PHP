<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../View/style.css">
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
            <li><a class="current" href="#">Créer</a>
                <ul>
                    <li><a href="../Controler/">Créer un secteur</a></li>
                    <li><a href="../Controler/create_structure.conrtoler.php">Créer une structure</a></li>
                </ul>
            </li>
            <li> <a href="../Controler/search.controler.php">Rechercher</a></li>
        </ul>
    </nav>
</div>
<div class="moove-right">
    <div class="content">
        <div class="search">
            <form>
                <input id="textSearch" type="text" placeholder="Votre recherche ?"><input id="submitSearch" type="submit">
            </form>
        </div>
        <div class="filtres">
            <form action="../Controler/search.controler.php" method="post">
                <label for="searchEntreprise">Entreprise</label>
                <input type="checkbox" id="searchEntreprise" name="searchEntreprise">
                <label for="searchAsso">Association</label>
                <input type="checkbox" id="searchAsso" name="searchAsso">
                <input id="submitFiltre" type="submit" name="submitFiltre" value="Appliquer les filtres">
            </form>
        </div>
            <ul class="listItem">
        <?php
        foreach ($listStructures as $elem) { ?>
            <li class="item">
                <div class="nom">
                    <?php echo $elem->NOM ?>
                </div>
                <div class="adresse">
                    <?php echo $elem->RUE.' '.$elem->CP.' '.$elem->VILLE ?>
                </div>
                <div class="type">
                    <?php if ($elem->ESTASSO) {
                        echo 'Association';
                    } else {
                        echo 'Entreprise';
                    } ?>
                </div>
                <div class="nbOf">
                    <?php if ($elem->ESTASSO) {
                        echo 'Nombre de donateurs : '.$elem->NB_DONATEURS;
                    } else {
                        echo 'Nombre d\'actionnaires : '.$elem->NB_ACTIONNAIRES;
                    } ?>
                </div>
                <a href="google.fr" class="update">
                </a>
                <a href="debile.fr" class="delete">
                </a>

            </li>
        <?php  } ?>
    </div>

</div>
</body>
</html>