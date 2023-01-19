<?php
 require_once('../Controller/controller.php');
 ?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="./font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="page.css">

    <body>
        <header> 
            <div class="div1"> 
               <a class="titrepage"href="view.php" ><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;&nbsp;Actualites</a>&nbsp;&nbsp;<img src="..\images\icone2.jpg">   
            </div>
            <?php foreach($categories as $categorie){ ?>      
            <div class="categories">
                  <?='<a href=view.php?categorie='.$categorie['id'].'>'.$categorie['nom'].'</a>'; ?>         
            </div>
            <?php
                }
            ?>
        </header>
        <?php foreach ($articles as $article) {
            
        ?>
        <div class="container">
            <h3><?=$article['titre']?></h3>
            <p><?=$article['description']?></p>
               
        </div>
        <?php
         }
        ?>
        <footer>
            <strong>
                <i class="fa fa-copyright" aria-hidden="true"></i> Copyright News@2022-2023&nbsp;&nbsp;<i class="fa fa-instagram" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-twitter" aria-hidden="true"></i>
            </strong>
        </footer>
    </body> 
</html>