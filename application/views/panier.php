<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Ecommerce</title>
    <link rel="stylesheet" href="/ecommerce/assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
  
  <body>

           <h1 class="titre_produits">Livres(s) ajouté(s) au panier</h1>
           <div> 
              <?php for ($i=0; $i<count($panier); $i++) : ?>
					

                      <article class="article">

                          <div class="image_livre">
                              <img src="/ecommerce/assets/pictures/<?=$panier[$i]['image']?>" alt="img">
                          </div>

                          <div class="produit_livre">
                              <p class="livre_nom"><?= $panier[$i]['nom']?></p>
                              <p class="livre_auteur"><?= $panier[$i]['auteur']?></p>
                              <p class="livre_editeur">Editeur : <?= $panier[$i]['editeur']?>.</p>
                              <p class="livre_categorie">Catégorie: <?= ucfirst($panier[$i]['categorie'])?>.</p>
                              <p class="livre_date_edition">
                                            Date de parution : <?=
                                            substr($panier[$i]['date_edition'],8,2) .
                                            substr($panier[$i]['date_edition'],4,4) .
                                            substr($panier[$i]['date_edition'],0,4)
                                            ?>.
                              </p>
                              <p class="livre_prix"><?= $panier[$i]['prix']?> € 
                              --> Quantité: <?= array_count_values($_SESSION['panier'])[$panier[$i]['id']]; ?></p>
                          </div>

                      </article> 

				      <?php endfor; ?>

           	</div>

              <p class="panier_retour">
                <a href="<?= URL::base().'panier/commande'; ?>">
                  <img src="/ecommerce/assets/pictures/commande.jpeg" alt="img" width='100px'>
                </a>
              </p>

              <p class="panier_retour">
    		        <a href="<?= URL::base().'produit/produits' ; ?>">
    		              <input type="button" value="Une autre commande">
    		        </a>
              </p>

              <p class="panier_retour">
                <a href="<?= URL::base().'produit/produits/retour' ?>">
                      <input type="button" value="Retour">
                </a>
              </p>

  </body>

 </html>


