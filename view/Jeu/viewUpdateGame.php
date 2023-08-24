<?php
ob_start();
$jeu = $requeteJeu->fetchAll();
?>

<form action="index.php?action=updateGame" enctype="multipart/form-data" method="POST" class="">

    <h1>Ajouter un jeu</h1>
   
    <h2>Nom du jeu</h2>
    <input type="text" name="nom_jeu" value="<?= $jeu['nom_jeu']?>">

    <h2>Consigne</h2>
    <input type="text" name="consigne" value="<?= $jeu['consigne']?>">

    
    <h2>Image</h2>
    <input type="file" name="image" value="<?= $jeu['image']?>">
    
    <h2>Code</h2>
    <textarea name="code"></textarea>
    
    <div class="select-container">
        <label>Catégorie(s) :</label>
    
            <select name="categorie[]" type="text" class="select-categorie" multiple>   
                <?php
    
                    foreach($requete as $categorie){
                ?>
                    <option value="<?= $categorie["id_categorie"]?>"><?= $categorie["nom_categorie"]?></option>
                <?php
                    }
                        
                ?>
            </select>
    </div>

    <input type="submit" class="submit-button" value="Envoyer" name="submitGame">
    
</form>

<?php
$titre = "Ability";
$titre_secondaire = "Ajouter un jeu";
$contenu = ob_get_clean();
require "../../view/template.php";