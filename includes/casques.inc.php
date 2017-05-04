<?php

        function ConnexionDB(){
            $cnx = new PDO('mysql:host=localhost;dbname=nolark', 'nolarkuser', 'nolarkpwd');
	        $req = 'SELECT casques.id, casques.marque, nom, modele, casques.type, prix, classement, image, stock';
	        $req .= ' FROM casques INNER JOIN types ON casques.type=types.id';
	        $req .= ' INNER JOIN marques ON casques.marque=marques.id';
            $res = $cnx->query($req);
            return $res;
        }

        function Affichage($type){
        $res = ConnexionDB();
        while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
            if($ligne->type == $type){
                    $stockok = "stockok";
		            $reste = "";

		            if ($ligne->stock == -1){
			            $stockok = "stockko";
		            }
		            if ($stockok != "stockko" && $ligne->stock < 4){
			            $reste = "Plus que 3 en stock...";
		            }
		            echo '<article>';
		            echo '<img src="../images/casques/', $ligne->type, '/', $ligne->image,'" alt="', $ligne->modele, '" />';
		            echo '<p class="', $stockok ,'"><abbr data-tip="',$reste,'">stock</abbr></p>';
		            echo '<p class="prix">', $ligne->prix, '</p>';
		            echo '<p class="marque">', $ligne->marque, '</p>';
		            echo '<p class="modele">', $ligne->modele, '</p>';
		            echo '<div class="classement classement', $ligne->classement, '"></div>';
		            echo '</article>';
                }
	        }   
        }
    
?>