<?php
   require_once('../DAO/ArticleDAO.php');
 	require_once('../DAO/CategorieDAO.php');
  	function getArticles($categorie){
  	 $articleDAO= new ArticleDAO();
    $mesarticles=$articleDAO->getArticlesDAO($categorie);
    return $mesarticles;
 	}
 	function getCategories(){
    $categorieDAO= new CategorieDAO();
    $mescategories=$categorieDAO->getCategoriesDAO();
    return $mescategories;
 	}
?>