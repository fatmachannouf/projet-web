<?php
include('C:\xampp\htdocs\projet\controller\OffreController.php');
$OffreController = new OffreController();
$OffreController->deleteOffre($_GET["id"]);
header('Location:OffreList.php');