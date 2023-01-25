<?php

require "classes_partiel.php";

$lot = array(new Lot(1500, "Asus", 500, 100, 20),
			 new Lot(1750, "Samsung", 200, 50, 10));


			 echo "<table border='2'";

foreach ($lot as $elem) {
	echo "<tr>";
	$elem->toHTML();
	echo "</tr>";
}
echo "</table>";
?>

