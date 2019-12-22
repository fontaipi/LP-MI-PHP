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
            <li><a href="../Controler/listes_secteurs.controler.php">Secteurs</a> </li>
        </ul>
    </nav>
</div>
<div class="moove-right">
    <div class="content">
        <h1>Modifier votre structure</h1>
        <form class="classic-form" method="post" action="../Controler/search.controler.php">
            <div>ID : <?php if(isset($structure)){echo $structure->ID ;} ?></div>
            <input type="text" hidden="hidden" name="idStructure" value="<?php echo $_POST['idStructure'];?>">
            <div class="champ">
                <label for="libelle">Nom de l'entrprise : </label>
                <input name="libelle" id="libelle" type="text" value="<?php if(isset($structure)){echo $structure->NOM ;} ?>">
            </div>

            <div class="champ">
                <label for="rue">Rue : </label>
                <input name="rue" id="rue" type="text" value="<?php if(isset($structure)){echo $structure->RUE ;} ?>">
            </div>
            <div class="champ">
                <label for="ville">Ville : </label>
                <input name="ville" id="ville" type="text" value="<?php if(isset($structure)){echo $structure->VILLE ;} ?>">
            </div>
            <div class="champ">
                <label for="cpostal">Code postal : </label>
                <input name="cpostal" id="cpostal" type="text" value="<?php if(isset($structure)){echo $structure->CP ;} ?>">
            </div>
            <div class="champ">
                <label id="isAsso" >Association ? : </label>
                <input name="isAsso" id="isAsso" type="checkbox" <?php if(isset($structure)){if($structure->ESTASSO == 1) {echo 'checked';}} ?>>
            </div>
            <div class="champ">
                <label for="nbMembre">Nombre de </label>
                <input  name="nbMembre" id="nbMembre" type="number" value="<?php if(isset($structure)){if($structure->ESTASSO == 1) {echo $structure->NB_DONATEURS;}else {echo $structure->NB_ACTIONNAIRES;}} ?>">
            </div>
            <div class="champs">
                <label for="secteur">Secteur</label>
                <select name="secteurs" id="pet-select">
                    <option value="-1">--Please choose an option--</option>

                    <?php foreach ($secteurs as $secteur){  ?>
                        <option value="<?php echo $secteur->ID ?>" <?php if($idSecteur == $secteur->ID){echo 'selected="selected"';}?>><?php echo $secteur->LIBELLE?></option>
                    <?php }?>
                </select>
            </div>

            <input name="submit" type="submit">
        </form>
    </div>

</div>
</body>
</html>