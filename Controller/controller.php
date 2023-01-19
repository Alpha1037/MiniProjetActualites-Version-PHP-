<?php
	require_once('../Model/model.php');
	$articles = getArticles(isset($_GET['categorie'])? $_GET['categorie']: null );
	$categories = getCategories();
?>