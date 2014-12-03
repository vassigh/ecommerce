<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Ecommerce</title>
    <link rel="stylesheet" href="/ecommerce/assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
  
  <body>

       <script type="text/javascript">
            var panier = "";
        </script>

            <section>

              <h1 class="titre_produits">Livres d'occasion</h1>
                  
                  <?php for ($i=0; $i<count($produit); $i++) : ?>

                          <article class="article">

                              <div class="image_livre">
                                  <img src="/ecommerce/assets/pictures/<?=$produit[$i]['image']?>" alt="img">
                              </div>

                              <div class="produit_livre">
                                  <p class="livre_nom"><?= $produit[$i]['nom']?></p>
                                  <p class="livre_auteur"><?= $produit[$i]['auteur']?></p>
                                  <p class="livre_editeur"><?= $produit[$i]['editeur']?></p>
                                  <p class="livre_categorie"><?= ucfirst($produit[$i]['libelle'])?></p>
                                  <p class="livre_date_edition"><?= $produit[$i]['date_edition']?></p>
                                  <p class="livre_prix"><?= $produit[$i]['prix']?> €</p>

                                  <p class="p_livre_achat"><input type="button" value="Ajouter au panier"
                                       onClick="save_panier('<?= $produit[$i]['id']?>');"></p>

                              </div>

                          </article> 

                   <?php endfor; ?>

            </section>


                <script type="text/javascript">
                 
                    function save_panier(id)
                    {
                        if (panier == "")
                        {
                          panier = panier +  id;
                        }
                        else
                        {
                          panier =  panier +  ',' + id;
                        };

                        alert(panier);
                     }
 
                </script>
  

  </body>

 </html>

