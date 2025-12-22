<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRICAN KITCHEN</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">

</head>
<body>
    <?php 
    $postData =$_POST;

    if(!isset($postData['name']) && !isset($postData['firstname']) && !isset($postData['email']) && !isset($postData['message']) && !isset($postData['photo'])){
        if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL ) && empty($postData['message']) ||trim($postData['message'])=== ''){
            
            
            echo('il faut enetrer toutes les informations ');

               
        }
    }




$fData= $_FILES;
    if(isset($fData["photo"])&& $fData["photo"]["error"]==0){
    
    

    if($fData["photo"]["size"]>1000000){
        echo "fichier trop lourd";


    }else{
        echo "image enreigistrer"."</br>";
    }
    $chemin= __DIR__."/uploads";

    if(!is_dir($chemin)){
        echo "L'envoi n'a pas pu être effectué, le dossier uploads est manquant";
        return;
    }

    $fichier=pathinfo($fData["photo"]["name"]);
 $extension=$fichier["extension"];
 $extenauto=["jpg","jpeg","gif","png"];

 if(!in_array($extension , $extenauto)){
    echo "{$extension} de l'image ne correspond pas";
    return;
 }


  move_uploaded_file($_FILES["photo"]["tmp_name"], $chemin . basename($_FILES["photo"]["name"]));
}
  


        
        //}
        

    
    //arrete l'execution du fichier ce qui empeche de voir les erreurs lies au warning 
    
    
    ?>
    <h1>Message bien reçu !</h1>
        
<div class="card">
    
    <div class="card-body" style="border: black 1px solid;">
        <h5 class="card-title">Rappel de vos informations</h5>
         <p class="card-text"><b>Nom</b> : <?php echo (strip_tags($postData['name'])); ?></p>
        <p class="card-text"><b>Prenom</b> : <?php  echo (strip_tags($postData['firstname'])); ?></p>
        <p class="card-text"><b>Email</b> : <?php echo ($postData['email'] );?></p>
        <p class="card-text"><b>Message</b> : <?php echo (strip_tags($postData['message'])); ?></p>
        <p class="card-text"><b>photo</b> : <?php echo $fData['photo']["name"] ;?></p>
    </div>
</div>
</body>
</html>