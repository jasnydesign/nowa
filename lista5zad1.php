<?php










$dane = file("test_1.csv");
$ilosc_pozycji=count($dane);
if ($ilosc_pozycji==0){
echo "Brak";
exit;
}else {
echo "<ul>";
	for ($i=0; $i<$ilosc_pozycji; $i++){

			$linia = explode( ";" , $dane[$i]);
			foreach ($linia as $nowalinia) {
			echo "<li>".$nowalinia."</li>" ;
		}
		echo "<br>";
	}
echo "</ul>";	
}













?>
