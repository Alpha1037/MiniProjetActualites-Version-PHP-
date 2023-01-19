<?php
require_once('../Model/connexion.php');
 class CategorieDAO 
 {
   	function getCategoriesDAO(){
 		$req1;
 		$db = connexion();
 		$req1 = $db->prepare('select * from categorie');
 		$req1->execute(); 
 		$req = $req1->fetchAll();
	  	return $req;
 	}
 }
?>