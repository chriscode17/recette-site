<?php require_once(__DIR__."/header.php");?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRICAN KITCHEN</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/styles/contact.css">
</head>

<body>
  <h2>contactez nous</h2>
  <form action="dash.php" method="post"  enctype="multipart/form-data">
      <div class="D1">
             <label for="name" id="name ">NOM:</label>
        <input type="text" name="name" id="name" placeholder="ENTREER VOTRE NOM">
        </div>
          <div class ="D2">
 <label for="firstname" id="firstname ">PRENOM:</label>
        <input type="text" name="firstname" id="firstname" placeholder="ENTRER VOTRE PRENOM">

          </div>
<div class="D3">
  

<label for="email" id="email" > Email :</label>
  <input type="email"  name="email"  ><br/>
</div>
  

<div class="D4">
<label for="mesage">Dites nous👌</label>
  <textarea name="message" id="message" style="margin-top: 20px;" placeholder="exprimer vous"></textarea><br/>
  </div>
  <label for="photos">photo:</label>
  <input type="file" name="photo" id='photo' class="tof"><br>
  <button type="submit">Envoyer</button>
  </form> 
  
  <footer> <?php require_once(__DIR__."/footer.php");?> </footer>
</body>
</html>


