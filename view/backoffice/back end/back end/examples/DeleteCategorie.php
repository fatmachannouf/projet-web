<?php
include('C:\xampp\htdocs\projet\controller\CategorieController.php');
$categorieController = new CategorieController();
$categorieController->deleteCategorie($_GET["id_categorie"]);
header('Location:categorieList.php');