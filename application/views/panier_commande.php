<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Ecommerce</title>
    <link rel="stylesheet" href="/ecommerce/assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
  
  <body>

           <h1 class="titre_commande">Votre panier</h1>


          <section class="section_commande">

              <table class="table_commande_titre">
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
                        <td rowspan=2 class="cmd_td_total"><?= $panier[$i]['prix'] * $quantite; 
                                        if( $i == 0  )
                                        {
                                          $_SESSION['commande_prix'] = $panier[$i]['prix'] * $quantite;
                                        }
                                        else
                                        {
                                          $_SESSION['commande_prix'] += $panier[$i]['prix'] * $quantite;
                                        }
                                        ?> €</td>

                    </tr>
                    <tr class="cmd_tr_td">
                        <td class="cmd_td_article_nom"><?= $panier[$i]['auteur']?> <?= $panier[$i]['editeur']?></td>
                    </tr>

                  <?php endfor; ?>


                     <tr class="cmd_tr_td_total">
                        <td></td>
                        <td></td>
                        <td class="cmd_td_article_total">TOTAL</td>
                        <td class="cmd_td_total_total"><?= $_SESSION['commande_prix']; ?> €</td>                        

                    </tr>


               </table>

          </section>

          <div>
              <p class="achat_logo">
                <a href="<?= URL::base().'user/login' ; ?>">
                  <img src="/ecommerce/assets/pictures/acheter.jpg" alt="img" width='150px'>
                </a>
              </p>

              <p class="achat_retour">
                <a href="<?= URL::base().'produit/produits' ; ?>">
                      <input type="button" value="Nouvele commande?">
                </a>
              </p>

              <p class="panier_retour">
                <a href="<?= URL::base().'produit/produits/retour' ?>">
                      <input type="button" value="Retour">
                </a>
              </p>
              
          </div>




  </body>

 </html>

