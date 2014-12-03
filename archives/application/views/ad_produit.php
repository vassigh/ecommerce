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


            <form class="login" action="" method="POST">
              <p>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" required placeholder="Nom du livre"/>
              </p>
              <p>
                <label for="editeur">Editeur :</label>
                <input type="text" name="editeur" id="editeur" required placeholder="Nom de l'éditeur"/>
              </p>
              <p>
                <label for="categorie">Catégorie :</label>
                <input type="number" name="categorie" id="categorie" required placeholder="Catégorie"/>
              </p>
              <p>
                <label for="date_edit">Date édition :</label>
                <input type="date" name="date_edit" id="date_edit" required placeholder="Date edittion"/>
              </p>
              <p>
                <input type="submit" value="Validez"> 
              </p>


              <p class="admin_retour">
                <a href="<?= URL::base().'produit/produits' ; ?>">
                      <input type="button" value="Retour">
                </a>
              </p>
 
            </form>

        </div>

    

  </body>

 </html>


