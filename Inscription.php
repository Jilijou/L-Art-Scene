<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
</head>
<body>
	<fieldset>
			<legend><h1><strong>Inscription</strong></h1>
			</legend>
	<form method="POST"> <!-- C'est là qu'il va falloir envoyer les infos quelque part du coup-->
		<label for="Nom">Nom : </label><br>
		<input type="text" name="nom" placeholder="Nom" id="nom"required><br><br>

		<label for="Prénom">Prénom : </label><br>
		<input type="text" name="prenom" placeholder="Prénom" id="Prénom" required><br><br>

		<label for="pseudo">Nom d'utilisateur : </label><br>
		<input type="text" name="pseudo" placeholder="Nom d'utilisateur" required><br><br>

		<label for="mdp">Mot de passe :</label><br>
		<input type="text" name="mdp" placeholder="Mot de passe" required><br><br>
		<input type="text" name="cmdp" placeholder="Confirmez votre Mot de passe" required><br><br>

		<label for="Email">Email : </label><br>
		<input type="email" name="email" placeholder="email" id="email" required><abbr title="madamex@gmail.com">&nbsp;?</abbr><br><br>

		<label for="gender">Sexe : </label><br>
		<input type="radio" name="gender" value="H"> Homme
		<input type="radio" name="gender" value="F"> Femme <br><br>

		<label for="birth_date">Date de naissance : </label><br>
		<input type="date" name="birth_date" id="birth_date"><br><br>

		<label for="instrument">Jouez vous d'un instrument ?</label><br>
		<input type="radio"  name="choix_instru" value="non" required><label for="non">Non</label>
		<input type="radio"  name="choix_instru" value="oui" required><label for="oui">Oui</label><br><br>

		<label>Si oui lesquels ?</label><br>
		<select name="instrument" required>
				<option>Piano</option>
				<option>Chant</option>	
				<option>Guitare</option>
				<option>Basse</option>	
				<option>Batterie</option>	
				<option>Ukulele</option>
				<option>Flûte</option>	
				<option>Violon</option>
				<option>Autre</option>
			</select><br><br>

		<label>Si vous avez coché "autre", veuillez indiquer votre instrument :</label><br>
			<textarea name="autreinstru" placeholder="Autre Instrument" required></textarea><br><br>

		<label>Avez vous déjà pris des cours de musiques </label><br>
      		<input type="radio" name="cours" value="non2" required><label for="non2">Non</label>
			<input type="radio" name="cours" value="oui2" required><label for="oui2">Oui</label><br><br>

    	<label>Avez vous déjà participé à un concert?</label><br>
   			<input type="radio" name="concert" value="non3" required><label for="non3">Non</label>
			<input type="radio" name="concert" value="oui3" required><label for="oui3">Oui</label><br><br>

   		<label>Vous sentez vous à l'aise sur scène?</label><br>
    		<input type="radio" name="aisance" value="non4" required><label for="non4">Non</label>
			<input type="radio" name="aisance" value="oui4" required><label for="oui4">Oui</label><br><br>

    <label>Si oui vous vous noteriez combien sur 10?</label><br>
    <select name="note" required>
      <option>1</option>
				<option>2</option>	
				<option>3</option>
				<option>4</option>	
				<option>5</option>	
				<option>6</option>
				<option>7</option>	
				<option>8</option>
				<option>9</option>
        <option>10</option>
			</select><br><br>

		<button type="submit" name="formsignin" id="formsignin" value="Valider"> Envoyez </button>
		<button type="reset" value="Reset" name="reset" style="cursor: pointer; display: grid; float: left"> Annulez </button> <br><br>
		<label for="participation">Votre inscription étant finalisée vous pouvez, si vous le souhaitez, faire un don à notre association afin de nous permettre d'acheter de nos nouveaux instruments.</label>
		<!-- On a eu l'idée de soit que ça renvoit vers un truc Paypal soit que ça renvoit vers une page à imprimer pour dire qu'il faut payer -->
		<!-- onclick="location.href='page_daccueil.php'" style="cursor: pointer; display: grid; float: left" -->
	</form>
	<?php
		include 'includes/database.php';
		global $db;
		include 'includes/signin.php';
	?>

</fieldset>
</body>
</html>




