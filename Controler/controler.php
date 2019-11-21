<?php
include("../Model/DAO.php");

include_once ("../Model/secteur.php");

$res = $dao->getSecteurs();
echo $res[0]->LIBELLE;

