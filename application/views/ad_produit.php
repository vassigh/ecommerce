<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Ecommerce</title>
    <link rel="stylesheet" href="/ecommerce/assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
  
  <body>

        <div class="formulaire_admin_ajout">


            <form class="login" action="" method="POST" enctype="multipart/form-data">
              <p>
                <label for="ean13">EAN 13 :</label></br>
                <input type="text" name="ean13" id="ean13" required placeholder="Code du livre" size="10" maxlength="13"/>
              </p>
              <p>
                <label for="nom">Nom :</label></br>
                <input type="text" name="nom" id="nom" required placeholder="Nom du livre" size="70"/>
              </p>
              <p>
                <label for="editeur">Auteur :</label></br>
                <input type="text" name="auteur" id="auteur" required placeholder="Auteur" size="70"/>
              </p>
              <p>
                <label for="editeur">Editeur :</label></br>
                <input type="text" name="editeur" id="editeur" required placeholder="Nom de l'éditeur" size="70"/>
              </p>
              <p><span class="formulaire_admin_ajout_libelle">Date édition :</span>
                <input type="date" name="date_edition" id="date_edition" required placeholder="Date edittion"/>
              </p>
              <p><span class="formulaire_admin_ajout_libelle">Prix :</span>
                <input type="text" name="prix" id="prix" required placeholder="Prix"/>
              </p>
              <p>
                 <p><span class="formulaire_admin_ajout_libelle">Catégorie :</span>
                 <select name="categorie" id="categorie">
                     <option value="rien"></option>
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
                     <option value="Littérature étrangère">Littérature étrangère</option>
                     <option value="Littérature française">Littérature française</option>
                   </optgroup>
                   <optgroup label="Romance">
                     <option value="Roman">Roman</option>
                     <option value="Roman étranger">Roman étranger</option>
                   </optgroup>
                 </select>
              </p>
              <p><span class="formulaire_admin_ajout_libelle">Quantité :</span>
                <input type="number" name="number" id="number" required placeholder="Quantité" min="0"/>
              </p>

              <p>
                <input type="file" name="file"/>
              </p>


              Descerition - Résumé :<br /><textarea rows="10" cols="55" name="resume"></textarea><br /><br /> 

              <p class="ad_produit_php_valider">
                <input type="submit" value="Validez">
              </p>

              <p class="ad_produit_php_retour">
                <a href="<?= URL::base().'produit/produits' ; ?>">
                      <input type="button" value="Retour">
                </a>
              </p>
 
            </form>

        </div>

    

  </body>

 </html>

