<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../css/styles.css" />
</head>
<body style="background-image:url(../images/simu_bg.png);background-position: center;background-repeat: no-repeat;">
	<?php include('../includes/header.html.inc.php'); ?>
    <form style="background-color: lightgrey;width: 300px;margin: 5% auto;">
        <img src="../images/simu_head.png" />
        <script src="JS/remuneration.js"></script>
        <fieldset>
            <fieldset>
                <legend>Ancienneté</legend>
                <input type="text" value="0" name="num_ancien" id="num_ancien" min="0" max="10" />  <label for="num_ancien"> Années</label>
            </fieldset>
            <fieldset>
                <legend>Casques S20</legend>
                <label for="prix_S20">Prix : </label>   <input id="prix_S20" value="140" type="text" name="prix_S20" min="0" max="10" /><br/><br/>
                <label for="num_S20"> Vente : </label>   <input id="num_S20" value="0" type="text" name="num_S20" min="0" max="10" />
            </fieldset>
            <fieldset>
                <legend>Casques X-Spirit</legend>
                <label for="prix_XS">Prix : </label>   <input id="prix_XS" value="350" type="text" name="prix_XS" min="0" max="10" /><br/><br/>
                <label for="num_XS"> Vente : </label>   <input id="num_XS" value="0" type="text" name="num_XS" min="0" max="10" />
            </fieldset>
            <fieldset>
                <legend>Casques Multitec</legend>
                <label for="prix_MT">Prix : </label>   <input id="prix_MT" value="180" type="text" name="prix_MT" min="0" max="10" /><br/><br/>
                <label for="num_MT"> Vente : </label>   <input id="num_MT" value="0" type="text" name="num_MT" min="0" max="10" />
            </fieldset>
            <fieldset>
                <legend>Indémnité</legend>
                <input type="text" name="nbr_km" value="0" id="nbr_km" min="0" max="10" />  <label for="nbr_km"> Kilometres</label>
            </fieldset>
            <fieldset style="text-align: center">
                <br />
                <input id="btn_envoyer" type="button" name="btn_envoyer" value="Confirmer">
                <input type="reset" value="Effacer">
                <p id="remuneration"></p>
            </fieldset>
        </fieldset>
    </form>
</body>
</html>
