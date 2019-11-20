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
            <li> <a href="#">Rechercher</a></li>
        </ul>
    </nav>
</div>
    <div class="content">
        <form method="post" action="">
            <p>Créer un secteur</p>
            <input type="text">
            <br>
            <input type="submit">
        </form>

        <form method="post" action="">
            <p>Créer une entreprise</p>
            <label for="libelle">Nom de l'entrprise : </label>
            <input id="libelle" type="text">
            <br>
            <label for="rue">Rue : </label>
            <input id="rue" type="text">
            <br>
            <label for="ville">Ville : </label>
            <input id="ville" type="text">
            <br>
            <label for="cpostal">Code postal : </label>
            <input id="cpostal" type="text">
            <br>
            <label id="isAsso" >Association ? : </label>
            <input id="isAsso" type="checkbox">
            <br>
            <label for="nbMembre">Nombre de </label>
            <input  id="nbMembre" type="number">
            <br>
            <input type="submit">
        </form>
    </div>
</body>
</html>