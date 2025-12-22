<?php 
 require_once(__DIR__.'/backend/variables.php');
 require_once(__DIR__.'/backend/fonctions.php');


?>
<?php require_once(__DIR__."/header.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AFRICAN KITCHEN</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">

</head>
<body>
  
<?php  afficherTout($recettes) ;?>


  <footer> <?php require_once(__DIR__."/footer.php");?> </footer>

</body>
</html>