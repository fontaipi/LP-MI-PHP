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
        <form class="classic-form" method="post" action="">
            <h2>Créer un secteur</h2>
            <div class="champ">
                <label for="libelle">Nom du secteur : </label>
                <input id="libelle" type="text">
            </div>
            <input type="submit">

        </form>
    </div>

</div>
</body>
</html>