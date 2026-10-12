<?php
$serveur="localhost";
$nom_utilisateur="root";
$motpasse="root";
$mabd="sharerecet";
//crée la connexion 
$connect=mysqli_connect($serveur,$nom_utilisateur,$motpasse,$mabd);

//verifier la connection
if(!$connect){
    die("la connexion a échouée:".mysqli_connect_error());

}
echo"connexion reussit";
//cree la base de données 
$sql ="CREATE TABLE  ";
if(mysqli_query($connect,$sql)){
    echo "base de données crée avec succès";
} else{
    echo "erreur lors de la creation de la bd:".mysqli_error($connect);
}

mysqli_close($connect);

?>