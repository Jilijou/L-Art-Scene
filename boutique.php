<!DOCTYPE html>
<html>
<head>
	<title>Boutique</title>
</head>
<style type="text/css">
#gpart{
		width: 400px;
		margin-left: 2%;
		display: grid;
		float: left;
	}
</style>
<body>
	<fieldset>
		<legend><h1><strong>Boutique</strong></h1>
			
			</legend>
		<div id="gpart">

	<?php
		echo 'bonjour';
	?>

	<p>Achetez notre pull aux couleurs de l'Art en Scène afin de soutenir notre association</p>
	<p>Prix : Variant de 35€ et 50€</p>
	<form >
		<label for="ville">Ville de résidence : </label><br>
		<input type="text" name="city" id="city" placeholder="Ville de résidence" required/><br><br>

		<label for="Adresse">Adresse : </label><br>
		<textarea name="address" id="address" required=""></textarea><br><br>

		<label for="livraison">Type de livraison : </label><br>
		<input type="radio" name="delivery" value="standard" required="">Livraison standard*<br>
		<input type="radio" name="delivery" value="prioritaire" required="">Livraison prioritaire (+3€)**<br><br>

		<p>Taille: </p>
		<select name="taille" style="width: 150px;" required="">
			<option>XS</option>
			<option>S</option>	
			<option>M</option>
			<option>L</option>	
			<option>XL</option>	
			<option>XXL</option>
		</select><br><br><br>
		<div id="commande"><input type="submit" name="validation_livraison" value="Valider la commande"></div>
	</form>

</div>


	<img src="pull.png" style="height: 400px; width : 500px;  display: grid; float: right;">

<?php
	include 'includes/database.php';
	global $db;
	if(isset($_POST['validation_livraison']))
		$get_city = $db->prepare("INSERT INTO user(city) VALUES(:city)");
		$get_city->execute([
			'city' => $city
		]);
?>

</fieldset>
<button onclick="location.href='page_daccueil.php'" style="cursor: pointer; display: grid; float: right">Retour à l'accueil</button>
 <footer><i>*Livré dans les 2 à 3 semaines après achat<br>**Livré dans la semaine après achat</i></footer>

</body>
</html>