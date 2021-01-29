<?php

require "classes_partiel.php";

$lot = array(new Lot(25000005, "Asus", 400, 100, 20),
			 new Lot(350050, "Samsung", 100, 50, 10));


			 echo "<table border='1'";

foreach ($lot as $elem) {
	echo "<tr>";
	$elem->toHTML();
	echo "</tr>";
}
echo "</table>";
?>

