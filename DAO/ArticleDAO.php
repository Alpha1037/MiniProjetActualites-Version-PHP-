<?php
require_once('../Model/connexion.php');
 class ArticleDAO
 {
    function getArticlesDAO($categorie){
    $req2;
    $db = connexion();
    if(empty($categorie)){
     $req2=$db->prepare('select  titre, description  from categorie join article on id=idarticle');
   $req2->execute();  
    return $req2;
    }  
    else{
        $req2=$db->prepare('select  titre,description from article where id="'.$categorie.'"'); 
        $req2->execute(); 
        $req = $req2->fetchAll();
        return $req;
    }

    }
    }

    ?> 