<?php

require "ressources.php";

$developpeur = array(new Developpeur(100,"FERREIRA", "Nicols", "nicolas@test.net", "0606060606",2500, "Java"),
					 new Developpeur(200,"BELTOU", "Noa", "noa@test.net", "0707070707",2800, "C#")) ;


$manager = array(new Manager(500,"RIPAULT", "Alexis", "alexis@manager.net", "0606060606",4000, "DSI"),
					 new Manager(600,"OLIVEIRA", "Romain", "romain@manager.net", "0808080808",3000, "Chef de service")) ;


foreach ($developpeur as $value) {
	echo $value->afficher();
}

echo "<br/><br/><br/>";
foreach ($manager as $value) {
	echo $value->afficher();
}