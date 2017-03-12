<?php require 'header.php'; ?>



<section class="formularz">
<h1 class="text-center">Proszę uzupełnij dane, stworzymy dla Ciebie wizytówkę graficzną.</h1>
	<div class="container">
		<div class="form">
			<form method="post" action="lista2zad1.php">

				<div class="row">
					<div class="col-md-4"><input class="input-text" type="text" name="imie" id="imie"  placeholder="Imię *"></div>
					<div class="col-md-4"><input class="input-text" type="text" name="nazwisko" id="nazwisko"  placeholder="Nazwisko *"></div>
					<div class="col-md-4"><input class="input-text" type="date" name="wiek" id="wiek"  placeholder="wiek *"></div>
				</div>

				<div class="row">
					<div class="col-md-4"><input class="input-text" type="text" name="miasto" id="miasto"  placeholder="miasto *"></div>
					<div class="col-md-4"><input class="input-text" type="text" name="ulica" id="ulica"  placeholder="ulica *"></div>
					<div class="col-md-4"><input class="input-text" type="text" name="telefon" id="telefon"  placeholder="telefon *"></div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<select class="input-text" name="czcionka" id="czcionka">
							<option>Wybierz czcionkę</option>
							<option class="chivo" value="chivo">Chivo</option>
							<option class="coda" value="coda">Coda</option>
							<option class="cousine" value="cousine">Cousine</option>
							<option class="cuprum" value="cuprum">Cuprum</option>
						</select>
					</div>
					<div class="col-md-6">
						<select class="input-text" name="motyw" id="motyw">
							<option>Wybierz motyw graficzny</option>
							<option value="1motyw">Niebiesko-granatowy</option>
							<option value="2motyw">Szaro-czarny</option>
						</select>
					</div>
				</div>
			<?php /* ?>		
					<div class="col-md-4">
						<select class="input-text" name="czcionka" id="czcionka">
							<option>Wybierz czcionkę</option>
							<option value="chivo">Chivo</option>
							<option value="coda">Coda</option>
						</select>
					</div>
				</div>
        	 <?php */ ?>
			    <input class="input-btn" type="submit" name="submit" value="Wyślij">
			    <input class="input-btn" type="reset" name="reset" value="Resetuj pola">
			          
			</form>
		</div>
	</div>	
</section>


<?php





if (isset($_POST['imie'])) {

$imie = $_POST['imie'];

$nazwisko = $_POST['nazwisko'];

$wiek = $_POST['wiek'];

$miasto = $_POST['miasto'];

$ulica = $_POST['ulica'];

$telefon = $_POST['telefon'];

$motyw = $_POST['motyw'];

$czcionka = $_POST['czcionka'];
}
?>


<section class="wizytowka">
	<div class="container">
		<div class="col-md-3"></div>

			<div class="

<?php 
if ($motyw == "1motyw") {
	echo " wizyt2 ";
} 
	 if ($motyw == "2motyw") {
		echo " wizyt1" ;
	}

 if ($czcionka == "chivo") {
	echo " chivo ";
}
	 if ($czcionka == "coda") {
		echo " coda ";
	}
		 if ($czcionka == "cousine") {
			echo " cousine ";
		}
			 if ($czcionka == "cuprum") {
				echo " cuprum ";
			}

?>
			 col-md-6">
				<div class="row">
					<div class="col-md-6">
						<h1>
							<?php if (isset($_POST['imie'])) { echo "$imie "; } if (isset($_POST['nazwisko'])) { echo "$nazwisko"; } ?> <br>
							<?php if (isset($_POST['wiek'])) { echo "$wiek"; } ?>
						</h1>
					</div>
					<div class="col-md-6">
						<h2>
							<?php if (isset($_POST['miasto'])) { echo "$miasto, "; }?> <br>
							<?php if (isset($_POST['ulica'])) { echo "$ulica"; } ?> <br>
							<?php if (isset($_POST['telefon'])) { echo "Tel: $telefon"; } ?>
						</h2>
					</div>
				</div>
				
<?php  if (isset($_POST['miasto'])) { ?>


				<div class="row">
					<div class="col-md-4">
						<img src="images/anonymous.jpg" alt="" class="img-thumbnail ">
					</div>
					<div class="col-md-8">
						<p>Zapraszam do kontaktu!</p>
					</div>
					
				</div>



<?php } ?>


				 
			</div>

		<div class="col-md-3"></div>
		</div>
</section>

<?php require 'footer.php'; ?>