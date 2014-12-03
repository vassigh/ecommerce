<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Ecommerce</title>
    <link rel="stylesheet" href="/ecommerce/assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
  
  <body>

        <div class="formulaire_login">


            <form class="login" action="" method="POST">
              <p>

                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required placeholder="Adresse mail"/>
              </p>
                <p>
                <label for="pass">Mot de passe :</label>
                <input type="password" name="pass" id="pass" required placeholder="Mot de passe" />
              </p>
              <p>Si vous avez un compte, entrez votre email et le mot de passe :
                <input type="submit" value="Validez"> 
              </p>

              <p>Sinon creéz un compte:
                  <a href="<?= URL::site('user/register')?>"><input type="button" value="Compte"></a>
              </p>
            </form>

        </div>
    

  </body>

 </html>


