<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Ecommerce</title>
    <link rel="stylesheet" href="/ecommerce/assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
  
  <body class="body_produits">

    <header>
        <p class="agora">L'AGORA<span class="agora_partager"> de mes livres à partager</span></p>
        <p class="agora_citation">la lecture... une amitié  <span class="agora_proust">(Marcel Proust)</span></p>
    </header>

      <div class="bande_entete clearfix">


              <div class="haut_page_nav">
                  <ul>
                      <?php
                        if (  isset($_SESSION['admin']) && $_SESSION['admin'] == 'o')
                        {
                          echo '<li><p><a href="' . URL::site('admin/ajout') . '">' .  "Administration</a></p></li>";
                        }
                      ?>
                      

                      <li>
                          <a href="#">Livres neufs</a>
                      </li>

                      <li>
                          <a href="#">Livres d'occasion</a>
                      </li>

                      <li>
                          <a href="mailto:cvassigh@wanadoo.fr?subject=Notre affaire">Email</a>
                      </li>

                </ul>
            </div>

                <form  action="" method="POST">
                 <p class="bande_entete_categorie">
                    <select name="categorie" id="categorie">
                       <option value="tous livres" <?php if (  isset($_SESSION['categorie']) && $_SESSION['categorie'] == '') echo 'selected' ?> >Tous livres</option>
                     <optgroup label="Sciences humaines">
                       <option value="Philosophie"> <?php if (  isset($_SESSION['categorie']) && $_SESSION['categorie'] == 'Philosophie') echo 'selected' ?>Philosophie</option>
                       <option value="Psychologie" <?php if (  isset($_SESSION['categorie']) && $_SESSION['categorie'] == 'Psychologie') echo 'selected' ?>>Psychologie</option>
                       <option value="Sociologie"  <?php if (  isset($_SESSION['categorie']) && $_SESSION['categorie'] == 'Sociologie') echo 'selected' ?>>Sociologie</option>
                     </optgroup>
                     <optgroup label="Politique">
                       <option value="Politique"><?php if (  isset($_SESSION['categorie']) && $_SESSION['categorie'] == 'Politique') echo 'selected' ?> Politique</option>
                       <option value="Politique internationale" <?php if (  isset($_SESSION['categorie']) && $_SESSION['categorie'] == 'Politique internationale') echo 'selected' ?>>Politique internationale</option>
                     </optgroup>
                     <optgroup label="Littérature">
                       <option value="Littérature étrangère" <?php if (  isset($_SESSION['categorie']) && $_SESSION['categorie'] == 'Littérature étrangère') echo 'selected' ?>>Littérature étrangère</option>
                       <option value="Littérature française" <?php if (  isset($_SESSION['categorie']) && $_SESSION['categorie'] == 'Littérature française') echo 'selected' ?>>Littérature française</option>
                     </optgroup>
                     <optgroup label="Romance">
                       <option value="Roman" <?php if (  isset($_SESSION['categorie']) && $_SESSION['categorie'] == 'Roman') echo 'selected' ?>>Roman</option>
                       <option value="Roman étranger" <?php if (  isset($_SESSION['categorie']) && $_SESSION['categorie'] == 'Roman étranger') echo 'selected' ?>>Roman étranger</option>
                     </optgroup>
                   </select>

                    <input type="submit" value="Validez"> 

                     <span class="produits_compte"><?php echo '<a href="' . URL::base() .  'user/login/' . '">' . ' Compte' .  '</a>' ?></span>
                 </p>
                </form>

      </div>  <!-- Fin entête -->


      <section>

          <form  action="" method="POST">
            <input class="input_search_produits" type="text" name="search" id="nom" placeholder="quel livre cherchez-vous?" size="50" maxlength="30" /></input> 
            <button class="button_produits" type="submit" title="Rechercher" STYLE= "background-color: black">
              <img class="search_btn" src="/ecommerce/assets/pictures/search_btn.jpg" alt="search_btn"></img>
            </button>
            <span class="produits_deconnexion"><?php echo '<a href="' . URL::base() .  'user/logout/' . '">' . ' Déconnexion' .  '</a>' ?></san>
          </form>
          <p class="produits_test">ATTENTION CE SITE EST EN VOIE DE CONSTRUCTION!</p>

  
          <?php for ($i=0; $i<count($produit); $i++) : ?>

              <article class="article">

                  <div class="image_livre">
                      <img class="image_livre_img" src="/ecommerce/assets/pictures/<?=$produit[$i]['image']?>"  alt="img">
                  </div>

                  <div class="produit_livre">
                      <p class="livre_nom">
                        <a href="<?= URL::base().'contenu/contenus/' . $produit[$i]["id"] ; ?>">
                          <?= $produit[$i]['nom']?>
                        </a>
                      </p>

                      <p class="livre_auteur"><?= $produit[$i]['auteur']?></p>
                      <p class="livre_editeur">Editeur : <?= $produit[$i]['editeur']?>.</p>
                      <p class="livre_categorie">Catégorie: <?= ucfirst($produit[$i]['categorie'])?>.</p>
                      <p class="livre_date_edition">

                              Date de parution : <?=
                                            substr($produit[$i]['date_edition'],8,2) .
                                            substr($produit[$i]['date_edition'],4,4) .
                                            substr($produit[$i]['date_edition'],0,4)
                                          ?>.
                      </p>

                      <p class="livre_date_edition">EAN13: <?= $produit[$i]['ean13']?>.</p>

                      <p class="livre_prix">Prix TTC: <?= $produit[$i]['prix']?> €</p>


                        <?php  if ($produit[$i]['quantite'] > 0 ) { ?>
                        <a class="logo_ajout_panier" href="<?= URL::base().'panier/ajouter/' . $produit[$i]["id"] ; ?>">
                          <img src="/ecommerce/assets/pictures/ajout_panier.jpeg" alt="img" width='100px'>
                        </a>
                        <?php } else { ?>
                        <p class="produits_fin_stock">Fin stock</p>
                      <?php } ?>

                  </div>

              </article> 

           <?php endfor; ?>



      <!-- Paginations bas -->
      <div class="ligne_pagination">
        <?php
            if ($_SESSION['nbpages'] > 0)
            {
              echo '<p>Pages: ';
              for ($k=0; $k<$_SESSION['nbpages']; $k++) 
              {
                $page=$k + 1;
                if ($page == 1)
                {
                  echo '<a href="' . URL::base() . 'produit/produits/' . $page . '">' . '  ' . $page .  '</a>';
                }
                else
                {
                   echo ' - ' . '<a href="' . URL::base() .  'produit/produits/' . $page . '">' . '  ' . $page .  '</a>';                 
                }
              }
              echo '</p>';
            }
        ?>
      </div>


    </section>



  </body>

 </html>









