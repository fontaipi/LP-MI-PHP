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
                    <li><a href="../Controler/create_secteurs.controler.php">Créer un secteur</a></li>
                    <li><a href="../Controler/create_structure.conrtoler.php">Créer une structure</a></li>
                </ul>
            </li>
            <li> <a href="../Controler/liste_structures.controler.php">Rechercher</a></li>
            <li><a href="../Controler/liste_secteurs.controler.php">Secteurs</a> </li>
        </ul>
    </nav>
</div>
<div class="moove-right">
    <div class="content">
        <form class="classic-form" method="post" action="../Controler/create_structure.conrtoler.php">
            <h2>Créer une structure</h2>
            <div class="champ">
                <label for="libelle">Nom de l'entrprise : </label>
                <input name="libelle" id="libelle" type="text">
            </div>

            <div class="champ">
                <label for="rue">Rue : </label>
                <input name="rue" id="rue" type="text">
            </div>
            <div class="champ">
                <label for="ville">Ville : </label>
                <input name="ville" id="ville" type="text">
            </div>
            <div class="champ">
                <label for="cpostal">Code postal : </label>
                <input name="cpostal" id="cpostal" type="text">
            </div>
            <div class="champ">
                <label id="isAsso" >Association ? : </label>
                <input name="isAsso" id="isAsso" type="checkbox">
            </div>
            <div class="champ">
                <label for="nbMembre">Nombre de </label>
                <input  name="nbMembre" id="nbMembre" type="number">
            </div>

            <div class="champs">
                <label for="secteur">Secteur</label>
                <select name="secteurs" id="pet-select">
                    <option value="-1">--Please choose an option--</option>
                    <?php foreach ($secteurs as $secteur){  ?>
                    <option value="<?php echo $secteur->ID ?>"><?php echo $secteur->LIBELLE?></option>
                    <?php }?>
                </select>
            </div>

            <input name="submit" type="submit">
        </form>
    </div>

</div>
</body>
</html>