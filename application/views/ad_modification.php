<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Ecommerce</title>
    <link rel="stylesheet" href="/ecommerce/assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
  
  <body>

 
        <div class="ad_modification_php">

            <h3>Modification des caractéristiques du livre</h3>
            <form action="" method="POST" enctype="multipart/form-data">

              <p>
                <label for="ean13">EAN 13 :</label></br>
                <input type="text" name="ean13" id="ean13" value="<?=$ad_modification['ean13'];?>" size="11" maxlength="13"/>
              </p>
              <p>
                <label for="nom">Nom :</label></br>
                <input type="text" name="nom" id="nom" value="<?=$ad_modification['nom'];?>" size="70"/>
              </p>
              <p>
                <label for="editeur">Auteur :</label></br>
                <input type="text" name="auteur" id="auteur" value="<?=$ad_modification['auteur'];?>" size="70"/>
              </p>
              <p>
                <label for="editeur">Editeur :</label></br>
                <input type="text" name="editeur" id="editeur" value="<?=$ad_modification['editeur'];?>" size="70"/>
              </p>
              <p><span class="formulaire_admin_ajout_libelle">Date édition :</span>
                <input type="date" name="date_edition" id="date_edition" value="<?=$ad_modification['date_edition'];?>"/>
              </p>
              <p><span class="formulaire_admin_ajout_libelle">Prix :</span>
                <input type="text" name="prix" id="prix" value="<?=$ad_modification['prix'];?>"/>
              </p>

               <p>
                 <p><span class="formulaire_admin_ajout_libelle">Catégorie :</span>
                 <select name="categorie" id="categorie">
                     <option selected value="<?=$ad_modification['categorie'];?>"><?=$ad_modification['categorie'];?></option>
                   <optgroup label="Sciences humaines">
                     <option value="Philosophie">Philosophie</option>
                     <option value="Psychologie">Psychologie</option>
                     <option value="Sociologie">Sociologie</option>
                   </optgroup>
                   <optgroup label="Politique">
                     <option value="Politique">Politique</option>
                     <option value="Politique internationale">Politique internationale</option>
                   </optgroup>
                   <optgroup label="Littérature">
                     <option value="Littérature étrangèr">Littérature étrangère</option>
                     <option value="Littérature française">Littérature française</option>
                   </optgroup>
                   <optgroup label="Romance">
                     <option value="Roman">Roman</option>
                     <option value="Roman étranger">Roman étranger</option>
                   </optgroup>
                 </select>
               </p>

              <p><span class="formulaire_admin_ajout_libelle">Quantité :</span>
                <input type="number" name="quantite" id="quantite" value="<?=$ad_modification['quantite'];?>" min="0"/>
              </p>


              <img class="i_image_livre" 

                src="/ecommerce/assets/pictures/<?php echo($ad_modification['image']); ?>"
                alt="img">

              <p>Modifier l'image de la couverture</br><input type="file" name="file"/></p>

              <p class="formulaire_admin_ajout_resume">
                Description - Résumé :<br />
                <textarea class="formulaire_admin_ajout_resume_texte" rows="10" cols="55" name="resume"><?=$ad_modification['resume'];?>
                </textarea><br /><br /> 
              </p>

              <p>
                 <input type="submit" value="Validez"> 
              </p>
              <p class="admin_retour">
                <a href="<?= URL::base().'contenu/contenus/' . $ad_modification['id'] ; ?>">
                      <input type="button" value="Retour">
                </a>
              </p>
 
            </form>

        </div>

    

  </body>

 </html>

