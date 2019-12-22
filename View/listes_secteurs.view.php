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
        <div class="search">
            <form>
                <input id="textSearch" type="text" placeholder="Votre recherche ?"><input id="submitSearch" type="submit">
            </form>
        </div>
        <h1>Secteurs</h1>
        <ul class="listItem">
            <?php
            foreach ($listeSecteurs as $secteur) { ?>
                <li class="item">
                    <div class="secteurs">
                        <?php if($secteur->LIBELLE != null){ echo $secteur->LIBELLE ;}   ?>
                    </div>

                    <form action="../Controler/update_secteurs.controler.php" method="post">
                        <input type="number" name="idSecteur" hidden="hidden" value="<?php echo $secteur->ID ; ?>">
                        <input class="update" type="submit" name="submitUpdate" value="Update">
                    </form>
                    <form action="../Controler/listes_secteurs.controler.php" method="post">
                        <input type="number" name="idSecteur" hidden="hidden" value="<?php echo $secteur->ID ; ?>">
                        <input class="delete" type="submit" name="submitDelete" value="Delete">
                    </form>

                </li>
            <?php  } ?>


    </div>
        <?php
            if(isset($error_message)){
                echo "<script> alert( \"$error_message \" )</script>";
            }
            if(isset($ok_message)){
                echo "<script> alert(\" $ok_message \")</script>";

            }
        ?>
</div>
</body>
</html>