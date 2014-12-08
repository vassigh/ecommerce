<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Ecommerce</title>
    <link rel="stylesheet" href="/ecommerce/assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
  
  <body>


    <section class="contenu_php_section">


      <h1 class="contenu_php_titre">Détail du livre</h1>

  

<!--   Date du jour enlevé
        <?php
        // Calendrier
   //       echo  '<p class="calendrier">';
   //         setlocale (LC_TIME, 'fr_FR.utf8','fra'); 

            // calendrier persan
     //       echo ucfirst(strftime("%A %d %B")) . ' ' . date("Y") . '<br/>'; 
            // echo mds_date("l j F Y");
         
    //      echo '</p>';
        ?>
          
-->
          <article class="contenu_php_article">

              <div class="contenu_php_image_livre">
                  <img class="i_image_livre" src="/ecommerce/assets/pictures/<?=$contenu['image']?>" alt="img">
              </div>

              <div class="contenu_php_produit_livre">
                  <p class="livre_nom"><?= $contenu['nom']?></p>
                  <p class="livre_auteur"><?= $contenu['auteur']?></p>
                  <p class="livre_editeur">Editeur : <?= $contenu['editeur']?></p>
                  <p class="livre_categorie">Catégorie: <?= ucfirst($contenu['categorie'])?></p>
                  <p class="livre_date_edition">

                          Edité le : <?=
                                        substr($contenu['date_edition'],8,2) .
                                        substr($contenu['date_edition'],4,4) .
                                        substr($contenu['date_edition'],0,4)
                                      ?>
                  </p>

                  <p class="livre_prix">Prix: <?= $contenu['prix']?> €</p>
  
                  <p class="contenu_php_admin_boutons">                
                      <a class="contenu_php_admin_modifier" href="<?= URL::base().'admin/modifier/' . $contenu["id"] ; ?>">
                        <input type="button" value="Modifier"></a>
                      <a href="<?= URL::base().'admin/supprimer/' . $contenu["id"] ; ?>">
                        <button onclick="return confirm('Voulez supprimer le livre :')">Supprimer</button></a>
                  </p>
                  <p class="contenu_php_admin_retour">
                    <a href="<?= URL::base().'produit/produits/' ; ?>"><input type="button" value="Retour"></a>
                  </p>

              </div>
         </article> 

         <h4 class="contenu_php_titre_ean13_quantite">EAN13: <?= $contenu['ean13']?></h4>

         <h4 class="contenu_php_titre_resume"><u>Description et résumé du livre</u></h4>
         <div class="contenu_php_bloc_resume">
            <p class="contenu_php_texte_resume"><?= $contenu['resume']?></p>
         </div>


    </section>

  </body>

 </html>









