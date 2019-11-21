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
                    <li><a href="new_secteur.view.php">Créer un secteur</a></li>
                    <li><a href="new_structure.view.php">Créer une structure</a></li>
                </ul>
            </li>
            <li> <a class="current" href="search.view.php">Rechercher</a></li>
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
        <?php
        include_once '../Model/DAO.php';
        include_once '../Model/secteur.php';

        $db = new DAO();
        $listStruct = $db->getStructures();
        ?>
            <ul class="listItem">
        <?php
        foreach ($listStruct as $elem) { ?>
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
                <div class="admin">

                </div>
            </li>
        <?php  } ?>
    </div>

</div>
</body>
</html>