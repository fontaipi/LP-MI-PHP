<?php
include("../Model/DAO.php");

include_once ("../Model/secteur.php");

$res = $dao->getSecteurById(2);

echo $res;