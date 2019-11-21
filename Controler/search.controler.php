<?php
    include_once ("../Model/DAO.php");
    include_once ("../Model/structure.php");
    $listStructures = $dao->getStructures();

    include_once ("../View/search.view.php");