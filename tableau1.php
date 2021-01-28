<!-- Écrire un programme qui lit ce fichier pour construire une page web contenant une liste de liens hypertextes : tableau-06.php -->
<!DOCTYPE HTML>
<HTML>
<HEAD>
      <TITLE>Utilisation des tableaux-10</TITLE>  
</HEAD>
 <BODY>
 	<UL>
          <?php
          	$tableau=file("tableau-10.txt");
          	for ($j=0 ; $j < count($tab) ; $j++) {
            	echo "$tableau[$j]"."<br />";
          	}
          ?>
    </UL>
</BODY>
</HTML>