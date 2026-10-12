<?php 
session_start();
require_once(__DIR__."/backend/variables.php");
require_once(__DIR__."/backend/fonctions.php"); 

     $Data = $_POST;
    if (isset($Data['email']) &&  isset($Data['password'])) {
    if (!filter_var($Data['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION["login_error"] = 'Il faut un email valide pour soumettre le formulaire.';
        }else{
            foreach($users as $user){
                if(
                $user['email']===$Data['email'] &&
                $user['email']===$Data['email']){
                    $_SESSION['logguser'] =["email"=>$user["email"],
                    "user_id"=>$user["user_id"]
                ];
                }

            }
             if(!isset( $_SESSION['logguser'])){
             $_SESSION["login_error"]= sprintf(
                'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $Data['email'],
                strip_tags($Data['password'])
            );
    }
        }
          redirectToUrl('index.php');
    }
  

?>
