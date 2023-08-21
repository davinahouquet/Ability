<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ability/Addition</title>
</head>
<body>
    
</body>
</html>


<?php
        $nomJeu = "Addition";
        $consigne = "Additionne les chiffes !";
        $level = 1;
      
        $nb1 = mt_rand(1,5);
        $nb2 = mt_rand(1,5);
        $result = $nb1 + $nb2;
          
        echo'
                <div id="addition">
                        <form method="post" action="" id="formulaire" enctype="multipart/form-data"><br>
                                <p>Combien font <b>'.$nb1 .'</b> + <b>'.$nb2.'</b> ?</p>
                                <input type="int" class="input-addition"  name="rep"  id="rep"    size="20"   minlength="1"   maxlength="3"   placeholder="'.$nb1 .' + '.$nb2.'"/><br>
                                <input type="submit" class="input-reponse" value="Réponse" name="envoi_recup" onclick="test()" />
                        </form>
                </div>
        ';            
  
 echo' <script>
 function test(){
 
            var result = parseInt('.$nb1 .')+parseInt('.$nb2.')
             alert("Le résultat est " + result + ".");
 }
 </script>';
          
              
?>

<?php
$titre = "Ability";
$titre_secondaire = "Addition";
$game = ob_get_clean();
require "../games/templateGame.php";
?>