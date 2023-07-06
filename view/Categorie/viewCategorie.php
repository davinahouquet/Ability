<?php
ob_start();

$categorie = $requeteCategorie->fetchAll();
?>

    <section class="categorie">

        <table>
            <tr>
                <th class="th-categorie">Catégories</th>
            </tr>
                <?php foreach($categorie as $categorie){
                ?>
                 <tr>
                    <td class="td-categorie"><a href="#"><?= $categorie["nom_categorie"] ?></a></td>
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