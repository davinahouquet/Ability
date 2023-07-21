<?php
ob_start();

$categorie = $requeteCategorie->fetchAll();
?>

    <h1 class="h1-categorie">Catégories</h1>
    
    <section class="categorie">

        <div class="categorie-container">

            <?php foreach($categorie as $categorie){
            ?>
                <div class="categorie-card">
                    
                    <?php
                        if($categorie["image_categorie"] === NULL){
                            echo "<a href='index.php?action=categoriser&id=".$categorie["id_categorie"]."'><img src='public/img/defaut.png' width='150'></a>";
                        }
                        else{
                            echo "<a href='index.php?action=categoriser&id=".$categorie["id_categorie"]."'><img src='public/img/" .$categorie["image_categorie"]."' width='200'></a>";
                        }
                    ?>
                    <a href="index.php?action=categoriser&id=<?=$id?>"><?= $categorie["nom_categorie"] ?></a>
                </div>
                <?php
            }
                ?>
        
        </div>
       
    </section>

<?php
$titre = "Ability";
$titre_secondaire = "Categories";
$contenu = ob_get_clean();
require "view/template.php";
?>