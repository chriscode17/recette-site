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
   <?php
   $Data=$_POST;
if (isset($Data['email']) &&  isset($Data['password'])) {
        if(!filter_var($Data['email'], FILTER_VALIDATE_EMAIL )){
            $errmess="Il faut un email valide pour soumettre le formulaire";
        }else{
              require_once(__DIR__."/backend/fonctions.php");
          foreach($users as $user){
       if($user["password"]===$Data['password'] && $user["email"] ===$Data['email']) {
         echo $mesage0= " Bienvenue a vous {$user["full_name"]}";
         

         echo afficherTout($recettes);
       
          
      $mesage0;
        }elseif($user["password"]!==$Data['password'] && $user["email"] !==$Data['email']){
        echo $mesage0="CONNEXION IMPOSSIBLE";
        
        }
       
    }
    
            
        
    
        }
     }




?>


    <footer>
         <?php require_once(__DIR__."/footer.php");?> 
    </footer>
    <style>
       
</style>
 
</body>
</html>