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
        <form class="classic-form" method="post" action="../Controler/liste_secteurs.controler.php">

           <h2>Mettre à jour le secteur</h2>

            <div class="champ">
                <div>ID : <?php if(isset($secteur)){echo $secteur->ID ;} ?></div>
                <input type="text" hidden="hidden" name="idSecteur" value="<?php echo $_POST['idSecteur'];?>">
                <label for="libelle">Nom du secteur : </label>
                <input  name="libelle" id="libelle" type="text" value="<?php if(isset($secteur)){echo $secteur->LIBELLE ;} ?>">

            </div>
            <input name="submit"  type="submit" required>
            <?php if (isset($error_message)) {
                echo '<div class="error_message">'. $error_message . '</div>';
            } else if (isset($ok_message)) {
                echo '<div class="ok_message">'. $ok_message .'</div>';
            }?>
        </form>

    </div>


</div>
</body>