<?php
ob_start();

$categorie = $requeteCategorie->fetchAll();
?>

    <section>

        <table>
            <tr>
                <th>Catégories</th>
            </tr>
                <?php foreach($categorie as $categorie){
                ?>
                 <tr>
                    <td><?= $categorie["nom_categorie"] ?></td>
                <?php
                }
                ?>
            </tr>

        </table>

    </section>

<?php
$titre = "Ability";
$titre_secondaire = "Categorie";
$contenu = ob_get_clean();
require "view/template.php";
?>