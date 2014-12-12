<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Ecommerce</title>
    <link rel="stylesheet" href="<?= URL::base();?>assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    <script src="<?= URL::base();?>assets/jquery-1.11.1.js"></script>

    <script>
        $(function(){
          $('.button_plus').click(function()
          {

               // on appelle une URL grâce à ajax
                $.ajax({
                  url: "<?= URL::base();?>ajaxcart/ajouter/"+$(this).data('idplus'),
                }).done(function(tab)
                {
                    tab=JSON.parse(tab);
                    $('#quantite'+tab['id']).html(tab['quantite']);
                });
          });

          $('.button_moins').click(function()
          {
               // on appelle une URL grâce à ajax
                $.ajax({
                  url: "<?= URL::base();?>ajaxcart/soustraire/"+$(this).data('idmoins'),
                }).done(function(tab)
                {
                  //console.log(tab);
                    tab=JSON.parse(tab);
                    if ( tab['reste_panier'] < 1 )
                    {

                      $(location).attr('href', "<?= URL::base();?>produit/produits");
                    }
                    else if ( tab['quantite'] > 0 )
                    {
                     $('#quantite'+tab['id']).html(tab['quantite']);                   
                    }
                    else
                    {
                      $('#article_panier'+tab['id']).hide();
                    }
                });
          });

        });
    </script>
    
  </head>
  
  <body>

           <h1 class="titre_produits_ajout">Livres(s) ajouté(s) au panier</h1>
           <div> 
              <?php for ($i=0; $i<count($panier); $i++) : ?>
					

                      <article class="article" id="article_panier<?= $panier[$i]['id']; ?>">

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
                              <p class="livre_prix"><?= $panier[$i]['prix'] ?> € (facultatif)
                              --> Quantité: <span id="quantite<?= $panier[$i]['id']; ?>"> <?= array_count_values($_SESSION['panier'])[$panier[$i]['id']]; ?></span>

                              <!--<a href="<?= URL::base().'ajaxcart/ajouter/' .  $panier[$i]['id'] ; ?>"> -->
                                    <input class="button_plus" data-idplus="<?= $panier[$i]['id']; ?>" type="button" value="+"/>
                              <!-- </a> -->
                              <!-- <a href="<?= URL::base().'ajaxcart/soustraire/' .  $panier[$i]['id'] ; ?>"> -->
                                    <input class="button_moins" data-idmoins="<?= $panier[$i]['id']; ?>" type="button" value="-">
                              <!-- </a> -->
                              </p>
                          </div>

                      </article> 

				      <?php endfor; ?>

           	</div>

              <p class="panier_boutons_ajout">
                <a href="<?= URL::base().'panier/commande'; ?>">
                  <img src="/ecommerce/assets/pictures/commande.jpeg" alt="img" width='100px'>
                </a>
              </p>

              <p class="panier_boutons_ajout">
    		        <a href="<?= URL::base().'produit/produits' ; ?>">
    		              <input type="button" value="Une autre commande">
    		        </a>
              </p>

              <p class="panier_boutons_ajout">
                <a href="<?= URL::base().'produit/produits/retour' ?>">
                      <input type="button" value="Retour">
                </a>
              </p>

  </body>

 </html>


