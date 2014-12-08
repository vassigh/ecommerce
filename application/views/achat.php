<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Ecommerce</title>
    <link rel="stylesheet" href="/ecommerce/assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
  
  <body>

           <h3 class="titre_commande">En vous remerciant de votre visite sur non site<br>
            Voici le récapilutaif de votre transaction</h3>
           <h4 class="titre_commande">Page à imprimer</h4>

            <?php echo ('<p class="adresse_achat">' . ucfirst($user['nom']) . ' ' . ucfirst($user['prenom']) . '<br>' .
                         $user['adresse'] . '<br>' .
                         $user['ville'] . ' ' . $user['code'] .
                       '</p>') ;
             ?>



           <h3 class="titre_achat_date">Numéro de la commande: <?=$_SESSION['id_commande']?></h3> 
           <h5 class="titre_achat_date">Date de transaction: <?= date("d-m-Y") ?></h5>

           <section class="section_achat">

              <table class="table_achat_titre">
                  <tr class="cmd_tr">
                    <td class="cmd_tr_article">Article(s)</td>
                    <td class="cmd_tr_unitaire">Unitaire</td>
                    <td class="cmd_tr_quantite">Quantité</td>
                    <td class="cmd_tr_total">Total</td>
                  </tr>
              </table>

              <table class="table_commande_liste">
                  <?php for ($i=0; $i<count($panier); $i++) : ?>

                    <?php $quantite = array_count_values($_SESSION['panier'])[$panier[$i]['id']]; ?>

                    <tr class="cmd_tr_td">
                        <td class="cmd_td_article"><?= $panier[$i]['nom']?>: - Edition <?= substr($panier[$i]['date_edition'], 0, 4)?></td>
                        <td rowspan=2 class="cmd_td_unitaire"><?= $panier[$i]['prix']?> €</td>
                        <td rowspan=2 class="cmd_td_quantite"><?= $quantite; ?></td>
                        <td rowspan=2 class="cmd_td_total"><?= $panier[$i]['prix'] * $quantite;?> €</td>
                    </tr>
                    <tr class="cmd_tr_td">
                        <td class="cmd_td_article-nom"><?= $panier[$i]['auteur']?> <?= $panier[$i]['editeur']?></td>
                    </tr>

                  <?php endfor; ?>

                     <tr class="cmd_tr_td">
                        <td></td>
                        <td></td>
                        <td class="cmd_td_article_total">TOTAL</td>
                        <td class="cmd_td_total_total"><?= $_SESSION['commande_prix']; ?> €</td>                        
                    </tr>


               </table>

          </section>

          <div>

              <p class="achat_retour">
                <a href="<?= URL::base().'produit/produits/retour' ; ?>">
                      <input type="button" value="Retour">
                </a>
              </p>
          </div>

  </body>

 </html>

