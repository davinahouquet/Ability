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
      
        $calca = mt_rand(1,10);
        $calcb = mt_rand(1,10);
        $result = $calca + $calcb;
          
        echo'
                <div id="addition">
                        <h1>Addition</h1>
                                <form method="post" action="" id="formulaire" enctype="multipart/form-data"><br>
                                    <input type="int"        name="rep"  id="rep"    size="20"   minlength="2"   maxlength="3"   placeholder="'.$calca.' + '.$calcb.'"/><br>
                                    <input type="submit" value="Réponse" name="envoi_recup" onclick="test()" />
                                </form>
                </div>
        ';            
  
 echo' <script>
 function test(){
 
            var result = parseInt('.$calca.')+parseInt('.$calcb.')
             alert("Le résultat est " + result + ".");
 }
 </script>';
          
              
?>

<?php
$titre = "Ability";
$titre_secondaire = "Addition";
$game = ob_get_clean();
require "../../games/templateGame.php";
?>