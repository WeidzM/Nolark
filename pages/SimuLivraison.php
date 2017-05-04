<html lang="fr-FR">
	<head>
		<title></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../css/styles.css" />
	</head>
	<body style="background-image:url(../images/simu_bg.png);background-position: center;background-repeat: no-repeat;">
		<?php include('../includes/header.html.inc.php'); ?>
		<form style="background-color: lightgrey;width: 500px;margin: 5% auto;">
			<script src="JS/remunerationLivraison.js"></script>
			<fieldset style="text-align: center">
				<fieldset>
					<legend>Prime</legend>
					<input type="text" name="nbr_km" value="0" id="nbr_km" min="0" max="10" size="10"/>  <label for="nbr_km"> Kilometres</label><br />
					<label for="nbr_accident">Accidents :</label> <input type="range" value="0" name="nbr_accident" id="nbr_accident" min="0" max="4" size="5"/> <output for="nbr_accident" id="compt_accident"/>0</output> <br />
					<label for="age_ancien">Ancienneté :</label> <input type="text" value="0" name="age_ancien" id="age_ancien" min="0" max="10" size="5"/> <label for="age_ancien">Ans</label>
				</fieldset>
				<fieldset>
					<br />
					<input id="btn_envoyer" type="button" name="btn_envoyer" value="Confirmer">
					<input type="reset" value="Effacer">
					<p id="remuneration"></p>
				</fieldset>
			</fieldset>
		</form>
	</body>
</html>
