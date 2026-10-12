<?php 
session_start();
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
    <div>
        <?php if(!isset($_SESSION["logguser"])): ?>
  <form action="soumi.php" method="POST">
     <?php if (isset( $_SESSION["login_error"])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo  $_SESSION["login_error"];
                unset( $_SESSION["login_error"]) ?>
            </div>
        <?php endif; ?>
        <div class="logform">
            <div class="labemail">
                <label for="email" >Email :</label>
                <input type="email" name="email" id="email" size="80px"><br>
            </div>
            <label for="password">mot de passe :</label>
            <input type="password" name="password" id="password"  size="80px"><br/>
     <div class="boutton"><button type="submit" style="background-color:gainsboro; border-radius: 5px 5px 5px 5px; color:blue"> Envoyer</button>  </div>  
</div>

<?php else : ?>
    <div class="alert alert-success" role="alert">
        Bonjour  et bienvenue sur le site !<?php echo $_SESSION['logguser']; ?>
    </div>
<?php endif; ?>

    </form>
    </div>



</body>

<style>

body{
    background-image: linear-gradient(white);
}
.logform{
    color: black;
    background-color:rgb(133, 41, 220); ;
    height: 150px;
    z-index: 2;
    box-shadow: black;
    border: 1px groove black;
    border-radius: 25px 25px 25px 25px;

}
.labemail{
    padding-top: 20px;
    padding-bottom: 20px;
}
.boutton{
     padding-top: 40px;
    float: none;
    padding-left: 355px;
    box-shadow:   5px b;
}


</style>
</html>

