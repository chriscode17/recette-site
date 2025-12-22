<?php

/////////fonctions///////////////////////fonctions///////////////////////////////////////fonctions///


///////fonction de validation/////////fonction de validation/////////fonction de validation///////
function isvalide(array $recettes):string{
if(array_key_exists('is_acces',$recettes)&& in_array(1,$recettes)){
    $isacces=$recettes['is_acces'];
    return $isacces;
}else{
    return $isacces= "vous ne pouvez pas accéder a la recette";
}
return $isacces;
}



///////fonction de validation/////////fonction de validation/////////fonction de validation///////

////////fonctions d'affichage/////////////fonctions d'affichage/////////////fonctions d'affichage///
function afficherTout(array $recettes){
$b=count($recettes);
    for($a=0; $a<$b; $a++){
    $re=count($recettes[$a]["recette"]["ingrédients"]);
    $ri=count($recettes[$a]["recette"]["Etapes"]);
    if(in_array(1 , $recettes[$a]) &&  array_key_exists("is_acces" ,$recettes[$a])){
      echo "<h2> {$recettes[$a]["title"]} </h2>";
     echo "<h4> {$recettes[$a]["author"]}</h4>";
     }
     echo"<h1>ingredients<h1>";
    for($s=0; $s<$re; $s++){   
if( in_array(1 , $recettes[$a]) && array_key_exists("is_acces" ,$recettes[$a])){
    echo "<ul><li><em> {$recettes[$a]["recette"]["ingrédients"][$s]}</em></li></ul>"."<br>";
    
    }else{
       $erreur1= "<h2>Accès refusé:❌</h2>";
        $erreur2= "<h4>vous ne pouvez pas acceder aux informations relatives à cette recette 😨</h4>";
echo sprintf(
    '%s <br> %s<br>',   
    $erreur1,
    $erreur2
);
        break;
   } 
}


 }
    echo"<h1>Etapes:<h1>";
 afficherEtapes($recettes);

}

function afficherRecetvalide(array $recettes){
foreach($recettes as $recet){
    $re=count($recet["recette"]["ingrédients"]);
    if(in_array(1 , $recet) &&  array_key_exists("is_acces" ,$recet)){
      echo "<h2> {$recet["title"]} </h2>";
     echo "<h4> {$recet["author"]}</h4>";
     }
    for($s=0; $s<$re; $s++){
if( in_array(1, $recet) && array_key_exists("is_acces" ,$recet)){
    echo "<ul><li><em> {$recet["recette"]["ingrédients"][$s]}</em></li></ul>"."<br>";
    }else{
       echo "<h2>Accès refusé:❌</h2>";
        echo "<h4>vous ne pouvez pas acceder aux informations relatives à cette recette.😨 </h4>";
        break;
    }
}

    };
    }


  function afficherEtapes(array $recettes){
$R=count($recettes);
for($i=0; $i<$R; $i++){
    $F=count($recettes[$i]["recette"]["Etapes"]);
     echo "<h2>".$recettes[$i]["title"]."</h2>";
    for($a=0; $a<$F; $a++){
 echo($recettes[$i]["recette"]["Etapes"][$a] )."<br>";
    }
    
}

}



function afficherTitreIngre(array $recettes){
$R=count($recettes);
for($i=0; $i<$R; $i++){

     echo ("<h3 >".$recettes[$i]["title"]."</h3>"."<br>") ;
   echo ("<h4 style= font-size:35px;>".$recettes[$i]["author"]."</h4>"."<br>") ; 

    $F=count($recettes[$i]["recette"]["ingrédients"]);
    for($a=0; $a<$F; $a++){
 echo("<ul>"."<li>".$recettes[$i]["recette"]["ingrédients"][$a] )."</li> "."</ul>"."<br>";
    }
    
}
}

function afficherIgredients(array $recettes){
    foreach($recettes as $recet){
     $t=count($recet["recette"]["ingrédients"]);
     for($j=0; $j<$t; $j++){
echo sprintf(
'%s<br>',
 $recet["recette"]["ingrédients"][$j]
);
   }
   
   }
}
////////fonctions d'affichage/////////////fonctions d'affichage/////////////fonctions d'affichage///

 /*foreach($recettes as $recet){
 foreach($recet as $cle=>$val){
 echo sprintf(
'%s a pour valeur %s <br>',
$cle,
$val
 );

 }
 }*/

/*$day=date("d");
$month =date("m");
$year = date("Y");

$hour = date("H");
$minute=date("i");
echo sprintf(
    'Nous le %s/%s/%s<br>  il est  %s:%s<br>',
   $day, 
   $month,
   $year,
   
   $hour,
   $minute
);
$date = date('d/m/Y');
$time = date('H \h i');
echo sprintf(
    'jour:%s<br>  heure: %s<br>',
   $date, 
   $time,
   
);*/


/*function modifier(string $mot):string{
if($mot!=="bonjour"){
    $word=str_replace('bonne nuit','bonjour',$mot);
    return $word;
}else{
    return $word="le mot ou la phrase est deja correct";
}
return $word;
}
$pharse="bonne nuit le peuple";
 echo modifier($pharse);*/

 /*function datepublirecet( array $recettes):string{
    if(isvalide($recettes[0])){
$A=sprintf('%s publier le %s',
$t=$recettes[0]["title"],
$D=date('H\h:i')
);
return $A;

    }else{
return $A="la recette n'est pas acssecible";
    }
    return $A;
 }*/
  
//echo datepublirecet($recettes);

/*foreach($recettes as $recet){
 echo  $e=count($recet["recette"]["Etapes"])."<br>";
   for($y=0; $y<$e; $y++){
  echo($recet["recette"]["Etapes"][$y]."<br>");
   }
 }*/


  
  function validepass(string $password ,string $email, $users ){
    foreach($users as $user){
        if($user["password"]===$password && $user["email"] ===$email) {
          $mesage0= " Bienvenue a vous {$user["full_name"]}";
         
         return $mesage0;
    }
   
   }
  
}

 function Novalidepass(string $password ,string $email, $users ){
    foreach($users as $user){
        if($user["password"]!==$password && $user["email"] !==$email) {
          $mesage0= " Connexion impossible";
        return $mesage0;
    }
   
   }
  
}
    

   
/////////fonctions/////////////fonctions///////////////fonctions//////////////fonctions////////
   ?>