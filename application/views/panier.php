<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Ecommerce</title>
    <link rel="stylesheet" href="/ecommerce/assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
  
  <body>

           <h1 class="titre_produits">Produit ajouté au panier</h1>
           <div> 
              <?php for ($i=0; $i<count($panier); $i++) : ?>
					

                      <article class="article">



                          <div class="image_livre">
                              <img src="/ecommerce/assets/pictures/<?=$panier[$i]['image']?>" alt="img">
                          </div>

                          <div class="produit_livre">
                              <p class="livre_nom"><?= $panier[$i]['nom']?></p>
                              <p class="livre_auteur"><?= $panier[$i]['auteur']?></p>
                              <p class="livre_editeur"><?= $panier[$i]['editeur']?></p>
                              <p class="livre_categorie"><?= ucfirst($panier[$i]['categorie'])?></p>
                              <p class="livre_date_edition"><?= $panier[$i]['date_edition']?></p>
                              <p class="livre_prix"><?= $panier[$i]['prix']?> €</p>
                           </div>

                      </article> 

				      <?php endfor; ?>

           	</div>

              <p class="panier_retour">
                <a href="<?= URL::base().'panier/commande' ; ?>">
                  <img src="/ecommerce/assets/pictures/commande.jpeg" alt="img" width='100px'>
                </a>
              </p>

              <p class="panier_retour">
    		        <a href="<?= URL::base().'produit/produits' ; ?>">
    		              <input type="button" value="Retour">
    		        </a>
              </p>

  </body>

 </html>


