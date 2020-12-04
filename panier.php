<?php
require 'header.php';
if (isset($_GET['del']))
{
    $panier->del($_GET['del']);
}
?>
        <div class="titre">
            <div class="wrap">
                <h2>Votre Panier</h2>
                <a href="#" class="valider_panier"></a>
            </div>
        </div>
        <div class="tableau">
            <div class="wrap">
                <div class="titreligne">
                    <span class="nom">Nom</span>
                    <span class="prix">Prix unitaire</span>
                    <span class="quantité">Quantité</span>
                    <span class="total">Prix avec TVA</span>
                    <span class="actions">Actions</span>
                </div>
                <?php
                $ids = array_keys($_SESSION['panier']);
                
                $articles = $DB->query('SELECT * FROM articles WHERE id IN ('.implode(',',$ids).')');
                
                foreach ($articles as $article):
                ?>
                <div class="ligne">
                    <img src="" >
                    <span class="nom">Nom</span>
                    <span class="prix"><?= number_format($article->prix_vente,2,',',' '); ?>€</span>
                    <span class="quantité">Quantité</span>
                    <span class="total"><?= number_format($article->prix_vente * 1.196,2,',',' '); ?>€</span>
                    <span class="actions">
                        <a href="panier.php?del=<?=$article->id; ?>"><i class="fa fa-trash fa-2x suppp"></i></a>
                    </span>
                </div>
                <?php endforeach; ?>
                <div class="ligne_total">
                    Total : <span class="total">TOTAL</span>
                </div>
            </div>
        </div>