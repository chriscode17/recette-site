<?php session_start()  ?> 
 
 <?php
    require_once(__DIR__."/header.php");
     require_once(__DIR__."/backend/variables.php");
     require_once(__DIR__."/backend/fonctions.php");
     
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRICAN KITCHEN</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">

</head>
<body>
   <!-- <a href="dash.php?nom=Dupont&amp;prenom=Jean &amp;age=20ans &amp;niveau=1">Dis-moi bonjour !</a> -->
<h1>site de recettes</h1>
          <?php //require_once(__DIR__."/login.php");?>  


        
            <article>
         <?php  afficherTout($recettes) ;?>
         </article>
    <footer>
         <?php require_once(__DIR__."/footer.php");?> 
    </footer>
    <style>
       
</style>
 
</body>
</html>