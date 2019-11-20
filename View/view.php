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
    <div class="moove-right">
        <div class="content">
            <form method="post" action="">
                <h2>Créer un secteur</h2>
                <div class="champ">
                    <label for="libelle">Nom du secteur : </label>
                    <input id="libelle" type="text">
                </div>
                <input type="submit">

            </form>

            <form method="post" action="">
                <h2>Créer une entreprise</h2>
                <div class="champ">
                    <label for="libelle">Nom de l'entrprise : </label>
                    <input id="libelle" type="text">
                </div>

                <div class="champ">
                    <label for="rue">Rue : </label>
                    <input id="rue" type="text">
                </div>
                <div class="champ">
                    <label for="ville">Ville : </label>
                    <input id="ville" type="text">
                </div>
                <div class="champ">
                    <label for="cpostal">Code postal : </label>
                    <input id="cpostal" type="text">
                </div>
                <div class="champ">
                    <label id="isAsso" >Association ? : </label>
                    <input id="isAsso" type="checkbox">
                </div>
                <div class="champ">
                    <label for="nbMembre">Nombre de </label>
                    <input  id="nbMembre" type="number">
                </div>

                <input type="submit">
            </form>
        </div>

    </div>
</body>
</html>