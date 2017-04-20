<?php require 'header.php'; ?>


<?php if ($_POST['options'] == "option1") { ?>
	<section class="formularz">
	<h1 class="text-center">Etap 5 ostatni - sprawdzian</h1>
		<div class="container">
			<h3 class="text-center">Na podstawie poniżej wygenerowanych wymiarów, oblicz pole powierzchni całkowitej oraz objętość.</h3>

				<form method="post" action="lista2zad3e5.php">
			
					<div class="row" style="padding: 80px 0px; ">
						<div class="col-md-6 ">
							<h5>
							Twój sześcian posiada wymiary: <br><br>
							a - <?php $dlugosca = (rand(1,8));?><?php echo $dlugosca;  ?><br>
							<input name="dlugosca" type="hidden" value="<?php echo $dlugosca; ?>" />
							</h5>

							<p>
								Oblicz <b>pole powierzchni całkowitej</b>, wynik wpisz poniżej.
							</p>	
							<input class="input-text" type="text" name="szescianppc" id="szescianppc"  required="true" placeholder="Pole powierzchni całkowitej...">

							<?php 

								if (isset($_POST['szescianppc'])) {

								$szescianwynik1 = 6*$_POST['dlugosca']*$_POST['dlugosca'];
								$szesciawpisany1 = $_POST['szescianppc']; 

									if ($szesciawpisany1 == $szescianwynik1) {
										echo "Wynik poprawny.";
									} else {
										echo "Wynik nieprawidłowy. Prawidłowa odpowiedź to: ", $szescianwynik1;
									}

											
								}
							 ?>
						</div>




						<div class="col-md-6">
							<h5>
							Twój sześcian posiada wymiary: <br><br>
							a - <?php echo $dlugosca;  ?><br>
							</h5>

							<p>
								Oblicz <b>objętość</b>, wynik wpisz poniżej.
							</p>	
							<input class="input-text" type="text" name="szescianob" id="szescianob"  required="true" placeholder="Objętość...">

							<?php 

								if (isset($_POST['szescianob'])) {

								$szescianwynik =  number_format($_POST['dlugosca']*$_POST['dlugosca']*$_POST['dlugosca'], 2, '.', ',');
								$szesciawpisany = number_format($_POST['szescianob'], 2, '.', ',');

									if ($szesciawpisany == $szescianwynik) {
										echo "Wynik poprawny.";
									} else {
										echo "Wynik nieprawidłowy. Prawidłowa odpowiedź to: ", $szescianwynik;
									}

											
								}
							 ?>

						</div>
					</div>
					
				<div class="niewidok" style="display:none;">
					<h1 class="text-center">Etap 1</h1>
					<h2>Jaka bryła Ciebie interesuje?</h2>

					<div class="btn-group btn-group-justified " data-toggle="buttons">
					  <label class=" btn btn-primary active">
					    <input type="radio" name="options" id="option1" value="option1" autocomplete="off" checked> Sześcian
					  </label>
					  <label class=" btn btn-primary">
					    <input type="radio" name="options" id="option2" value="option2" autocomplete="off" > Walec
					  </label>
					  <label class=" btn btn-primary">
					    <input type="radio" name="options" id="option3" value="option3" autocomplete="off" > Stożek
					  </label>
					</div>					
				</div>
				    <input class="input-btn" type="submit" name="submit" value="Sprawdź wynik">
				          
				</form>
			</div>
		</div>	
	</section>
<?php } ?>









<?php if ($_POST['options'] == "option2") { ?>
	<section class="formularz">
	<h1 class="text-center">Etap 5 ostatni - sprawdzian</h1>
		<div class="container">
			<h3 class="text-center">Na podstawie poniżej wygenerowanych wymiarów, oblicz pole powierzchni całkowitej oraz objętość. Pamietaj o zaookrągleniu do 2 miejsców po przecinku. Używaj kropki zamiast przecinka.</h3>

				<form method="post" action="lista2zad3e5.php">
			
					<div class="row" style="padding: 80px 0px; ">
						<div class="col-md-6 ">
							<h5>
							Twój walec posiada wymiary: <br><br>
							r - <?php $walecr = (rand(1,8));?><?php echo $walecr;  ?><br>
							h - <?php $walech = (rand(1,8));?><?php echo $walech;  ?><br>
							<input name="walecr" type="hidden" value="<?php echo $walecr; ?>" />
							<input name="walech" type="hidden" value="<?php echo $walech; ?>" />

							</h5>

							<p>
								Oblicz <b>pole powierzchni całkowitej</b>, wynik wpisz poniżej.
							</p>	
							<input class="input-text" type="text" name="walec-ppc" id="walec-ppc"  required="true" placeholder="Pole powierzchni całkowitej...">


							<?php 

								if (isset($_POST['walec-ppc'])) {

								$walecwynik1 = number_format(2*3.14*$_POST['walecr']*$_POST['walecr']+2*3.14*$_POST['walecr']*$_POST['walech'], 2, '.', ',');
								$walecpisany1 =  number_format($_POST['walec-ppc'], 2, '.', ',');

									if ($walecpisany1 == $walecwynik1) {
										echo "Wynik poprawny.";
									} else {
										echo "Wynik nieprawidłowy. Prawidłowa odpowiedź to: ", $walecwynik1;
									}

											
								}
							 ?>
						</div>




						<div class="col-md-6">
							<h5>
							Twój walec posiada wymiary: <br><br>
							r - <?php echo $walecr;  ?><br>
							h - <?php echo $walech;  ?><br>
							</h5>

							<p>
								Oblicz <b>objętość</b>, wynik wpisz poniżej.
							</p>	
							<input class="input-text" type="text" name="walec-ob" id="walec-ob"  required="true" placeholder="Objętość...">

							<?php 

								if (isset($_POST['walec-ob'])) {

								$walec_wynik =  number_format(3.14*$_POST['walecr']*$_POST['walecr']*$_POST['walech'], 2, '.', ',');
								$walec_wpisany = number_format($_POST['walec-ob'], 2, '.', ',');

									if ($walec_wynik == $walec_wpisany) {
										echo "Wynik poprawny.";
									} else {
										echo "Wynik nieprawidłowy. Prawidłowa odpowiedź to: ", $walec_wynik;
									}

											
								}
							 ?>

						</div>
					</div>
					
				<div class="niewidok" style="display:none;">
					<h1 class="text-center">Etap 1</h1>
					<h2>Jaka bryła Ciebie interesuje?</h2>

					<div class="btn-group btn-group-justified " data-toggle="buttons">
					  <label class=" btn btn-primary active">
					    <input type="radio" name="options" id="option1" value="option1" autocomplete="off" > Sześcian
					  </label>
					  <label class=" btn btn-primary">
					    <input type="radio" name="options" id="option2" value="option2" autocomplete="off" checked> Walec
					  </label>
					  <label class=" btn btn-primary">
					    <input type="radio" name="options" id="option3" value="option3" autocomplete="off" > Stożek
					  </label>
					</div>					
				</div>
				    <input class="input-btn" type="submit" name="submit" value="Sprawdź wynik">
				          
				</form>
			</div>
		</div>	
	</section>
<?php } ?>







<?php if ($_POST['options'] == "option3") { ?>
	<section class="formularz">
	<h1 class="text-center">Etap 5 ostatni - sprawdzian</h1>
		<div class="container">
			<h3 class="text-center">Na podstawie poniżej wygenerowanych wymiarów, oblicz pole powierzchni całkowitej oraz objętość. Pamietaj o zaookrągleniu do 2 miejsców po przecinku. Używaj kropki zamiast przecinka.</h3>

				<form method="post" action="lista2zad3e5.php">
			
					<div class="row" style="padding: 80px 0px; ">
						<div class="col-md-6 ">
							<h5>
							Twój stożek posiada wymiary: <br><br>
							r - <?php $stozekr = (rand(1,8));?><?php echo $stozekr;  ?><br>
							h - <?php $stozekh = (rand(1,8));?><?php echo $stozekh;  ?><br>
							l - <?php $stozekl = (rand(1,8));?><?php echo $stozekl;  ?><br>
							<input name="stozekr" type="hidden" value="<?php echo $stozekr; ?>" />
							<input name="stozekh" type="hidden" value="<?php echo $stozekh; ?>" />
							<input name="stozekl" type="hidden" value="<?php echo $stozekl; ?>" />

							</h5>

							<p>
								Oblicz <b>pole powierzchni całkowitej</b>, wynik wpisz poniżej.
							</p>	
							<input class="input-text" type="text" name="stozek-ppc" id="stozek-ppc"  required="true" placeholder="Pole powierzchni całkowitej...">


							<?php 

								if (isset($_POST['stozek-ppc'])) {

								$stozekwynik1 =  number_format(3.14*$_POST['stozekr']*($_POST['stozekr']+$_POST['stozekl']), 2, '.', ',');
								$stozekwpisany1 =  number_format($_POST['stozek-ppc'], 2, '.', ',');

									if ($stozekwynik1 == $stozekwpisany1) {
										echo "Wynik poprawny.";
									} else {
										echo "Wynik nieprawidłowy. Prawidłowa odpowiedź to: ", $stozekwynik1;
									}

											
								}
							 ?>
						</div>




						<div class="col-md-6">
							<h5>
							Twój stożek posiada wymiary: <br><br>
							r - <?php echo $stozekr;  ?><br>
							h - <?php echo $stozekh;  ?><br>
							l - <?php echo $stozekl;  ?><br>
							</h5>

							<p>
								Oblicz <b>objętość</b>, wynik wpisz poniżej.
							</p>	
							<input class="input-text" type="text" name="stozek-ob" id="stozek-ob"  required="true" placeholder="Objętość...">

							<?php 

								if (isset($_POST['stozek-ob'])) {

								$stozek_wynik = number_format((1/3)*3.14*$_POST['stozekr']*$_POST['stozekr']*$_POST['stozekh'], 2, '.', ',');
								$stozek_wpisany = number_format($_POST['stozek-ob'], 2, '.', ',');

									if ($stozek_wynik == $stozek_wpisany) {
										echo "Wynik poprawny.";
									} else {
										echo "Wynik nieprawidłowy. Prawidłowa odpowiedź to: ", $stozek_wynik;
									}

											
								}
							 ?>

						</div>
					</div>
					
				<div class="niewidok" style="display:none;">
					<h1 class="text-center">Etap 1</h1>
					<h2>Jaka bryła Ciebie interesuje?</h2>

					<div class="btn-group btn-group-justified " data-toggle="buttons">
					  <label class=" btn btn-primary active">
					    <input type="radio" name="options" id="option1" value="option1" autocomplete="off" > Sześcian
					  </label>
					  <label class=" btn btn-primary">
					    <input type="radio" name="options" id="option2" value="option2" autocomplete="off" > Walec
					  </label>
					  <label class=" btn btn-primary">
					    <input type="radio" name="options" id="option3" value="option3" autocomplete="off" checked> Stożek
					  </label>
					</div>					
				</div>
				    <input class="input-btn" type="submit" name="submit" value="Sprawdź wynik">
				          
				</form>
			</div>
		</div>	
	</section>
<?php } ?>

<footer>
	<div class="container stopka">
		<div class="row">
				<div class="lewa col-md-6">Projekt oraz wykonanie - <a href="http://jasnydesign.eu/">Rafał Jaseniuk 2017</a></div>
				<div class="prawa col-md-6"><a class="pull-right" href="mailto:jasnydesign@gmail.com"><span class="glyphicon glyphicon-envelope"></span></a></div>
		</div>
	</div>
</footer>

<div class="dogory">
	<a href=""><span class="glyphicon glyphicon-chevron-up strzalka"></span></a>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
 </body>
</html>