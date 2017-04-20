<?php require 'headerlista3.php'; ?>



<section class="formularz">
<h1 class="text-center">Na podstawie informacji które podasz wybierzemy przepis odpowiedni do Twoich umiejętności.</h1>
	<div class="container">
		<div class="form">
			<form method="post" action="lista3zad1.php">

				<div class="row">
					<div class="col-md-4">
						<select  class="input-text" name="typ" id="typ" required>
							<option value"">Typ dania</option>
							<option value="grill">Dania z grilla</option>
							<option value="pizza">Pizze</option>
						</select>
					</div>
					<div class="col-md-4">
						<select  class="input-text" name="czas" id="czas" required>
							<option value"">Czas przygotowania</option>
							<option value="30">30 minut</option>
							<option value="60">60 minut</option>
						</select>
					</div>

					<div class="col-md-4">
						<select  class="input-text" name="poziom" id="poziom" required>
							<option value"">Stopień trudności</option>
							<option value="latwe">łatwe</option>
							<option value="srednie">średnie</option>

						</select>
					</div>

				</div>

			    <input class="input-btn loadingOn"  type="submit" name="submit" value="Pokaż przepis">
			          
			</form>
		</div>
	</div>	
</section>


<?php
if (isset($_POST['submit'])) {


if ((($_POST['typ'] == "grill") or ($_POST['typ'] == "pizza")) and (($_POST['czas'] == "30") or ($_POST['czas'] == "60")) and ($_POST['poziom'] == "latwe") or ($_POST['poziom'] == "srednie")) {
	

$typ = $_POST['typ'];

$czas = $_POST['czas'];

$poziom = $_POST['poziom']; ?>



<article class="przepis">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6"><h2><?php include ('przepisy/'.$typ.'_'.$czas.'_'.$poziom.'_tytul.html'); ?></h2></div>
				<div class="col-md-6 dwa text-right"><?php include ('przepisy/'.$czas.'_'.$poziom.'_dane.html'); ?></div>

			</div>
		</div>
	</header>

		<section class="filmik">
			<div class="container">
				<div class="row">
					<div class="filmik">
						<video class="col-xs-12" controls> 
						<source src="movie/<?php echo $typ.'_'.$czas.'_'.$poziom;?>_filmik.mp4" type='video/ogg; codecs="theora, vorbis"'>
						<a href="movie/<?php echo $typ.'_'.$czas.'_'.$poziom;?>_filmik.mp4">Pobierz plik</a>
						</video>					
					</div>
				</div>
			</div>
		</section>

		<section class="opis">
			<div class="container">
				<div class="row">
					<div class="col-md-3 składniki">
						<h3>Składniki:</h3>
						<?php include ('przepisy/'.$typ.'_'.$czas.'_'.$poziom.'_skladniki.html'); ?>

					</div>
					<div class="col-md-9 przygotowanie">
						<h3>Przygotowanie:</h3>
						<?php include ('przepisy/'.$typ.'_'.$czas.'_'.$poziom.'_przygotowanie.html'); ?>  
					</div>
				</div>
			</div>
		</section>


<section class="reszta">
	<div class="container">

		<meter value="90" min="0" max="100" low="20" high="80">90 (0...100)</meter>


	<details> 
	 <summary>Zobacz</summary>
	 <p>Autor przepisów ujęty poniżej.</p>
	</details>	

	</div>
</section>


	<footer style="background: transparent; padding: 30px 0px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Autor: <a href="https://www.przepisy.pl">www.przepisy.pl</a>  </p>
				</div>
			</div>
		</div>
	</footer>
</article>

<?php }  else { ?>
	<h1 class="text-center" style="font-family: 'Coda', sans-serif;">Upss.. Chyba nie wybrałeś którejś opcji. Spróbuj jeszcze raz!</h1>
<?php } } ?>



<?php require 'footer.php'; ?>