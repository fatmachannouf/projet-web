<?php
include '../../controller/CategorieController.php';
$categorieController = new CategorieController();
$categorieController->deleteCategorie($_GET["id"]);
header('Location:categorieList.php');
