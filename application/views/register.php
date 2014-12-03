<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>TP Blog Ecommerce</title>
    <link rel="stylesheet" href="blog.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
<body>
		<form class="login" action="register" method="POST">
		<h2>
			Inscription au Blog
		</h2>
		<p>
			<label for="nom">Nom :</label>
			<input type="text" name="nom" id="nom" required placeholder="Nom"/>
		</p>
	   	<p>
			<label for="prenom">Prenom :</label>
			<input type="text" name="prenom" id="prenom" required placeholder="prenom" />
		</p>
		<p>
			<label for="email">Email :</label>
			<input type="email" name="email" id="email" required placeholder="Adresse mail"/>
		</p>
	   	<p>
			<label for="pass">Mot de passe :</label>
			<input type="password" name="pass" id="pass" required placeholder="Mot de passe" />
		</p>
		<input class="margin_left" type="submit" value="Validez">
		<a class="margin_left" href="login.php" target="_blank"> <input type="button" value="Annuler"> </a>
		</form>

		
</body>
</html>
