<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <title>L'AGORA de mes livres</title>
    <link rel="stylesheet" href="/ecommerce/assets/css/ecommerce.css">
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
    
  </head>
<body>
		<form class="register_forme" action="register" method="POST">
		<h2>Ouverture du compte<br> Remplissez les champs obligatoires</h2>

		<p><span class="register_nom">Nom :</span>
			<input type="text" name="nom" id="nom" required placeholder="Nom" size="50"/>
		</p>

	   	<p><span class="register_nom">Prénom :</span>
			<input type="text" name="prenom" id="prenom" required placeholder="Prenom" size="50"/>
		</p>

		<p><span class="register_nom">Email :</span>
			<input type="email" name="email" id="email" required placeholder="Adresse mail"/>
		</p>

	   	<p><span class="register_nom">Mot de passe :</span>
			<input type="password" name="pass" id="pass" required placeholder="Mot de passe" />
		</p>

		<p><span class="register_nom">Adresse :</span>
			<input type="text" name="adresse" id="adresse" required placeholder="Adresse" size="50"/>
		</p>

		<p><span class="register_nom">Pays :</span>
			<input type="text" name="pays" id="pays" required placeholder="Pays"/>
		</p>

		<p><span class="register_nom">Ville :</span>
			<input type="text" name="ville" id="ville" required placeholder="Ville"/>
			<span class="register_code">Code postal :</span>
			<input type="text" name="code" id="code" required placeholder="Code postal" size="10"/>
		</p>

		<p><span class="register_nom">Teléphone :</span>
			<input type="tel" name="tel" id="tel" required placeholder="Teléphone fixe ou mobile" size="20"/>
		</p>

		<p class="register_buttons">
			<input class="margin_left" type="submit" value="Validez">
			<a href="login" target="_blank"> <input type="button" value="Annuler"></a>
		</p>

		</form>

		
</body>
</html>
