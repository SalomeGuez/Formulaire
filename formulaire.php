<!DOCTYPE html>
<html>
<head>
<title>Exercice 27</title>
<link rel="stylesheet" type="text/css" href="formulaire.css">
<meta charset="utf-8" />
</head>
<body>
<h1> Questionnaire </h1>

<?php

if (isset($_GET["erreur"]))
{
	if ($_GET["erreur"] == "form")
	{
		echo("<p>Il faut remplir le quizz avant d'afficher le score !</p>");
	}
	
	elseif ($_GET["erreur"] == "vide")
	{
		echo("<p>Toutes les questions sont obligatoires</p>");
	}
}

?>
<div class="formulaire">
<form method="post" action="formulaire_resultat.php">
	<div class="q">
		<label for="q1"> Que pensez-vous de notre site internet?</label>
		<input type="text" name="q1" id="q1" required />
	</div>
	<div class="q">
		<label for="q2">Comment nous avez-vous connu ?</label>
		<select name="q2" id="q2" required>
			<option value="">Sélectionnez</option>
			<option value="1"> Site internet </option>
			<option value="2">Réseaux sociaux </option>
			<option value="3"> Bouche à oreille </option>
			<option value="4">Passage devant une boutique </option>
		</select>
	</div>
	<div class="q">
		<label for="q3"> Sur une échelle de 0 à 10, quelle est la probabilité que vous recommandiez notre entreprise à un ami, un collègue ou à votre famille ?</label>
		<select name="q3" id="q3" required>
			<option value="">Sélectionnez</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>		
		</select>
	</div>
	<div class="q">
		<label for="q4">Comment évaluez-vous votre satisfaction vis-à-vis de la livraison de votre commande ?</label>
		<select name="q4" id="q4">
			<option value="">Sélectionnez</option>
			<option value="0">Parfait !</option>
			<option value="1">Très satisfait(e)</option>
			<option value="2">Satisfait(e)</option>
			<option value="3">Sans plus</option>
			<option value="4">Mécontent(e)</option>
     		<option value="5">Déplorable</option>
		</select>
		
	</div>
	<div class="q">
		<label for="q5"> Êtes-vous satisfait(e) de votre commande? </label>
		<input type="radio" name="q5" id="q5" value="1"> Oui
		<input type="radio" name="q5" id="q5" value="0"> Non
	</div>
	<div class="q">
		<input type="submit" value="Envoyer les réponses" />
	</div>
</form>
</div>
</body>
</html>