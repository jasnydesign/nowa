<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<?php require 'headerlista5.php'; ?>

<?php 

				$dane = file("test_2.txt");
				$ilosc_pozycji=count($dane);
				$rowsTable =array();
				define("CENA", 4);
				/*echo '<pre>';
				print_r($dane);  // debug - zobacz jak ładnie siedzą dane w tablicy - brakuje nam tylko drugiego wymiaru
				echo '</pre>';*/


				if ($ilosc_pozycji==0){ 
				    echo "Brak";
				    exit;
				}else {


				    $headingRow=array(); //pierwszy wiersz tabeli w którym są nagłówki (nie używany do sortowania)
				    $heading =explode( ";" , $dane[0]);
				    array_push($headingRow,$heading); // zbudowaliśmy wiersz nagłówkowy
				   /* echo '<pre>';
				    print_r($headingRow);
				    echo '</pre>';*/


				    /* budujemy tablicę  którą wykorzystamy do sortowania */
				    for ($i=1; $i<$ilosc_pozycji; $i++){ // zaczynamy od 1 wiersza bo w zerowym mamy nagłówki
				        $linia = explode( ";" , $dane[$i]);
				        array_push($rowsTable,$linia);
				    }

				    /* sortujemy*/


				}
 ?>

<section class="formularz">
<h1 class="text-center">Oferta firmy Handlowej.</h1>
	<div class="container">
		<div class="form">
			<form method="post" action="lista5zadd1.php">

				<div class="row">
					<div class="col-md-4">
						<select  class="input-text" name="typ" id="typ" required>
							<option value"">Typ oświetlenia</option>

							<?php foreach ( $rowsTable as $row ): ?>
								<?php foreach ($row as $column => $komorka): ?>
											
											<?php $zbyszek = true; 
												$do = count($zapis);
												for ($i=0; $i < $do; $i++) { 
													if ($zapis[$i] == $komorka) {
														$zbyszek = false;
													}
												}
											 ?>

									<?php if (($column == 0)  && ($zbyszek == true)): ?>
										<option value="<?php echo $komorka ?>"><?php echo $komorka ?></option>
										<?php $zapis[] = $komorka; ?>
									<?php endif ?>

								<?php endforeach ?>							
							<?php endforeach ?>

						</select>
					</div>
					<div class="col-md-1 text-center">
						<h3>
							<b>LUB</b>
						</h3>
					</div>
					<div class="col-md-4">
						<select  class="input-text" name="producent" id="producent" required>
							<option value"">Producent</option>
							<?php foreach ( $rowsTable as $row ): ?>
								<?php foreach ($row as $column => $komorka): ?>
											
											<?php $dalej = false;
												$do = count($zapis2);
												for ($i=0; $i < $do; $i++) { 
													if ($zapis2[$i] == $komorka) {
														$dalej = false;
													}
												}
											 ?>
											 
									<?php if (($column == 1)  && ($dalej == true)): ?>
										<option value="<?php echo $komorka ?>"><?php echo $komorka ?></option>
										<?php $zapis2[] = $komorka; ?>
									<?php endif ?>

								<?php endforeach ?>							
							<?php endforeach ?>

						</select>
					</div>
					<div class="col-md-3">
						<select  class="input-text" name="sortowanko" id="sortowanko" required>
							<option value"">Sortuj wg. ceny.</option>
							<option value="Rosnąco">Rosnąco</option>
							<option value="Malejąco">Malejąco</option>
						</select>
					</div>



				</div>

				<div class="row">
					<div class="col-md-12">

						<select  class="input-text" name="kolumna" id="kolumna" required>
							<option value"">Pokaż tylko kolumnę:</option>

						   <?php foreach ($headingRow as $row): ?>
						   	<?php foreach ($row as $column => $klucz): ?>
						   		<option value="<?php echo $column ?>"><?php echo $klucz ?></option>
						   	<?php endforeach ?>
						   <?php endforeach ?>

						</select>
					
					</div>
				</div>

			    <input class="input-btn loadingOn"  type="submit" name="submit" value="Wyświetl ofertę">
			          
			</form>
		</div>
	</div>	
</section>




<?php 
if (isset($_POST['producent'])) {
	$producent_form = $_POST['producent'];
}
if (isset($_POST['typ'])) {
	$typ_form = $_POST['typ'];	
}
if (isset($_POST['sortowanko'])) {
	$sortowanko = $_POST['sortowanko'];
}
if (isset($_POST['kolumna'])) {
	$kolumna_form = $_POST['kolumna'];
}
?>
<?php if (isset($_POST['submit'])) {
	if (($producent_form != "Producent") && ($typ_form != "Typ oświetlenia")) { ?>
		<div class="container" style="padding: 50px 0px; color:red;" >
			<div class="h3 text-center">
				<p>Wybierz producenta <b>lub</b> typ.</p>
			</div>
		</div>

	<?php } 
} ?>





<?php if (isset($_POST['submit'])) { ?>
	<section class="oferta">
		<div class="container">
			<ul class="lista_oferta">
				<?php
					$x = 0;

				    if ($sortowanko == "Rosnąco") {
					    usort($rowsTable, function($a, $b) { // usort to taki dobroć któremu definiujesz jak ma porównywać i on sam posortuje
					        return $a[CENA] - $b[CENA];
					    });

				    }

				    if ($sortowanko == "Malejąco") {
					    usort($rowsTable, function($a, $b) { // usort to taki dobroć któremu definiujesz jak ma porównywać i on sam posortuje
					        return $b[CENA] - $a[CENA];
					    });

				    }				    

				    /*echo '<pre>';
				    print_r($rowsTable); // paczamy po sortowaniu
				    echo '</pre>';*/

				    /* wyświetlamy wiersz nagłówkowy*/
				    foreach ($headingRow as $row){
				        foreach ($row as $column) {?>
				        <li class="col-md-2 col-xs-2 text-center ">
				            <b><?php echo $column ?></b>
				        </li>
				    <?php }
				    } ?>

				    <?php
				    /* wyświetlamy posortowane dane */
				    foreach ($rowsTable as $row) {
				        foreach ($row as $column => $komorka) {
				        ?>


								
							<?php if (($typ_form == "Typ oświetlenia") && ($producent_form == "Producent") && ($kolumna_form == "Pokaż tylko kolumnę:")) { ?>
										<li class="col-md-2 col-xs-2 text-center ">
											<?php echo $komorka; ?>
										</li>
						 	<?php } ?>

							<?php if ($kolumna_form == "0") { ?>
								<?php if ($column == 0): ?>
										<li class="col-md-2 col-xs-2 text-center "><?php echo $komorka; ?></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>	
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>

								<?php endif ?>
						 	<?php } ?>

							<?php if ($kolumna_form == "1") { ?>
								<?php if ($column == 1): ?>
										<li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "><?php echo $komorka; ?></li>	
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>

								<?php endif ?>
						 	<?php } ?>

							<?php if ($kolumna_form == "2") { ?>
								<?php if ($column == 2): ?>
										<li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>	
								        <li class="col-md-2 col-xs-2 text-center "><?php echo $komorka; ?></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>

								<?php endif ?>
						 	<?php } ?>

							<?php if ($kolumna_form == "3") { ?>
								<?php if ($column == 3): ?>
										<li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>	
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "><?php echo $komorka; ?></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>

								<?php endif ?>
						 	<?php } ?>

							<?php if ($kolumna_form == "4") { ?>
								<?php if ($column == 4): ?>
										<li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>	
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "><?php echo $komorka; ?></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>

								<?php endif ?>
						 	<?php } ?>

							<?php if ($kolumna_form == "5") { ?>
								<?php if ($column == 5): ?>
										<li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>	
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "></li>
								        <li class="col-md-2 col-xs-2 text-center "><?php echo $komorka; ?></li>

								<?php endif ?>
						 	<?php } ?>

							
						<?php if (($producent_form == "Osram") && ($typ_form == "Typ oświetlenia")) {
								 if ($row[1] == "Osram"){ ?>

							        <li class="col-md-2 col-xs-2 text-center ">
							            <?php echo $komorka ?>
							        </li>

						 	 	 <?php }
							}elseif (($producent_form == "Hesmo") && ($typ_form == "Typ oświetlenia")) {
								 if ($row[1] == "Hesmo"){ ?>

							        <li class="col-md-2 col-xs-2 text-center ">
							            <?php echo $komorka ?>
							        </li>

						 	 	 <?php }
							}elseif (($producent_form == "Lemir") && ($typ_form == "Typ oświetlenia")) {
								 if ($row[1] == "Lemir"){ ?>

							        <li class="col-md-2 col-xs-2 text-center ">
							            <?php echo $komorka ?>
							        </li>

						 	 	 <?php }
							} ?>



							<?php 
							if (($typ_form == "Ogólne") && ($producent_form == "Producent")) {
								 if ($row[0] == "Ogólne"){ ?>

							        <li class="col-md-2 col-xs-2 text-center ">
							            <?php echo $komorka ?>
							        </li>

						 	 	 <?php }
							}elseif (($typ_form == "Miejscowe") && ($producent_form == "Producent")) {
								 if ($row[0] == "Miejscowe"){ ?>

							        <li class="col-md-2 col-xs-2 text-center ">
							            <?php echo $komorka ?>
							        </li>

						 	 	 <?php }
							}elseif (($typ_form == "Ozdobne") && ($producent_form == "Producent")) {
								 if ($row[0] == "Ozdobne"){ ?>

							        <li class="col-md-2 col-xs-2 text-center ">
							            <?php echo $komorka ?>
							        </li>

						 	 	 <?php }
							} ?>


						

				        <?php
				        }
				    }

				    /* dałoby się jeszcze zrobić array_merge i skleić te dwie tablice
				    (nagłówkową i z danymi) ale w tym pzypadku tak jest wydajniejsze */

?>
				
							
			</ul>
		</div>
	</section>
<?php } ?>


<?php require 'footer.php'; ?>






