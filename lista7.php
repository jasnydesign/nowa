<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<?php require 'headerlista5.php'; ?>

<?php 
$host='localhost';
$user='jasny';
$psw='1234';
$db='shop';
$connection=mysql_connect($host,$user,$psw);
mysql_set_charset('utf8',$connection);
if(!$connection || !mysql_select_db($db,$connection)){
	exit(mysql_error());	
} ?>


<?php 
$lista_towaru  = mysql_query("SELECT * FROM `Lista towarów`");
$lista_towaru2 = mysql_fetch_array($lista_towaru);
 ?>


<section class="formularz">
	<div class="container">
	<h2>Dodaj towar:</h2>
		<div class="form">
			<form  method="post" action="lista7.php" enctype="multipart/form-data">
			<?php define('MAX_SIZE', 20000000); ?>
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo "MAX_SIZE"; ?>">
				<div class="row">
					<div class="col-md-2"><input class="input-text" type="text" name="typ_dodaj" id="typ_dodaj"  placeholder="Typ *"></div>
					<div class="col-md-2"><input class="input-text" type="text" name="producent_dodaj" id="producent_dodaj"  placeholder="Producent *"></div>
					<div class="col-md-2"><input class="input-text" type="text" name="nazwa_dodaj" id="nazwa_dodaj"  placeholder="Nazwa *"></div>
					<div class="col-md-3"><input class="input-text" type="textarea" name="opis_dodaj" id="opis_dodaj"  placeholder="Opis *"></div>
					<div class="col-md-1"><input class="input-text" type="text" name="cena_dodaj" id="cena_dodaj"  placeholder="Cena *"></div>
					<div class="col-md-2"><input class="input-text" type="file" name="zdj_dodaj" id="zdj_dodaj"  placeholder="Zdjęcie *"></div>
				</div>

			    <input class="input-btn" type="submit" name="submit2" value="Dodaj towar">
			    <input class="input-btn" type="reset" name="reset" value="Resetuj pola">
			          
			</form>
		</div>
	</div>	
</section>

<?php 
if (isset($_POST['typ_dodaj'])) {
	$typ_dodaj = $_POST['typ_dodaj'];
}
if (isset($_POST['producent_dodaj'])) {
	$producent_dodaj = $_POST['producent_dodaj'];	
}
if (isset($_POST['nazwa_dodaj'])) {
	$nazwa_dodaj = $_POST['nazwa_dodaj'];
}
if (isset($_POST['opis_dodaj'])) {
	$opis_dodaj = $_POST['opis_dodaj'];
}
if (isset($_POST['cena_dodaj'])) {
	$cena_dodaj = $_POST['cena_dodaj'];
}
if (isset($_FILES['zdj_dodaj'])) {
	$zdj_dodaj = $_FILES['zdj_dodaj']["name"];


$target_dir = "images/upload-images/";
$target_file = $target_dir . basename($_FILES["zdj_dodaj"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit2"]) && isset($_FILES['file']) ) {
    $check = getimagesize($_FILES["zdj_dodaj"]["tmp_name"]);
    if($check !== false) {
        echo "Plik jest zdjęciem - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Plik nie jest zdjęciem.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Przepraszamy, plik już istnieje na serwerze.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["zdj_dodaj"]["size"] > MAX_SIZE) {
    echo "Przepraszamy, Twój plik jest za duży.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Przepraszamy, tylko pliki o rozszerzeniu JPG, JPEG, PNG & GIF są dozwolone.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Przepraszamy, Twój plik nie został wrzucony.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["zdj_dodaj"]["tmp_name"], $target_file)) {
        echo "Plik ". basename( $_FILES["zdj_dodaj"]["name"]). " został wrzucony.";
    } else {
        echo "Przepraszamy, wystąpił nieznany błąd podczas wrzucania pliku.";
    }
}



}
if (isset($_POST['typ_dodaj']) && (isset($_POST['submit2']))) {
	
	$dodaj = mysql_query("INSERT INTO `lista towarów`(`Typ`, `Producent`, `Nazwa`, `Opis`, `Cena`,`Zdjęcie`) VALUES ('$typ_dodaj','$producent_dodaj','$nazwa_dodaj','$opis_dodaj','$cena_dodaj','$zdj_dodaj')");
}













 ?>

<section class="formularz">
	<div class="container">
	<h2>Edytuj towar:</h2>
		<div class="form">
			<form enctype="multipart/form-data" method="post" action="lista7.php">
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo "MAX_SIZE"; ?>">

				<div class="row">
					<div class="col-md-1">
						<select  class="input-text" name="id_update" id="id_update" required>
							<option value"">ID</option>								
									<?php do {  $zbyszek = true;?>

										<?php 
											$do = count($zapis);
											for ($i=0; $i < $do; $i++) { 
												if ($zapis[$i] == $lista_towaru2['ID_towar']) {
													$zbyszek = false;
												}
											}
										 ?>


										<?php if (($lista_towaru2['ID_towar']) && ($zbyszek == true)): ?>
											 <option value="<?php echo $lista_towaru2['ID_towar'] ?>"><?php echo $lista_towaru2['ID_towar'] ?>. <?php echo $lista_towaru2['Nazwa'] ?></option>
											 <?php $zapis[] = $lista_towaru2['ID_towar']; ?>
										<?php endif ?>

									<?php } while ( $lista_towaru2 = mysql_fetch_array($lista_towaru) ); ?>
										<?php 
											$do = count($zapis);
											for ($i=0; $i < $do; $i++) { 
												echo($zapis[$i]);
											}
										 ?>							
						</select>						
					</div>
					<div class="col-md-2"><input class="input-text" type="text" name="typ_update" id="typ_update"  placeholder="Typ *"></div>
					<div class="col-md-2"><input class="input-text" type="text" name="producent_update" id="producent_update"  placeholder="Producent *"></div>
					<div class="col-md-2"><input class="input-text" type="text" name="nazwa_update" id="nazwa_update"  placeholder="Nazwa *"></div>
					<div class="col-md-2"><input class="input-text" type="textarea" name="opis_update" id="opis_update"  placeholder="Opis *"></div>
					<div class="col-md-1"><input class="input-text" type="text" name="cena_update" id="cena_update"  placeholder="Cena *"></div>
					<div class="col-md-2"><input class="input-text" type="file" name="zdj_update" id="zdj_update"  placeholder="Zdjęcie *"></div>
				</div>

			    <input class="input-btn" type="submit" name="submit3" value="Edytuj towar">
			    <input class="input-btn" type="reset" name="reset" value="Resetuj pola">
			          
			</form>
		</div>
	</div>	
</section>

<?php 
if (isset($_POST['id_update'])) {
	$id_update = $_POST['id_update'];
}
if (isset($_POST['typ_update'])) {
	$typ_update = $_POST['typ_update'];
}
if (isset($_POST['producent_update'])) {
	$producent_update = $_POST['producent_update'];	
}
if (isset($_POST['nazwa_update'])) {
	$nazwa_update = $_POST['nazwa_update'];
}
if (isset($_POST['opis_update'])) {
	$opis_update = $_POST['opis_update'];
}
if (isset($_POST['cena_update'])) {
	$cena_update = $_POST['cena_update'];
}
if (isset($_POST['zdj_update'])) {
	$zdj_update = $_POST['zdj_update'];


 if ($_FILES['zdj_update']['error'] > 0)
 {
 echo 'Problem: ';
 switch ($_FILES['zdj_update']['error'])
 {
 case 1: echo 'Rozmiar pliku przekroczyl wartosc upload_max_filesize'; break;
 case 2: echo 'Rozmiar pliku przekroczyl wartosc max_file_size'; break; //nie moze byc wieksze niz pierwszy parametr
 case 3: echo 'Plik wyslany tylko czesciowo'; break;
 case 4: echo 'Nie wyslano zadnego pliku'; break;
 }
 exit;
 }
// umieszczenie pliku w pozadanej lokalizacji
 $lokalizacja = 'images/upload-images/'.$_FILES['zdj_update']['name'];
 echo $_FILES['zdj_update']['tmp_name'];
 if (is_uploaded_file($_FILES['zdj_update']['tmp_name'])){
	 if (!move_uploaded_file($_FILES['zdj_update']['tmp_name'], $lokalizacja)){
	 echo 'Problem: Plik nie moze byc skopiowany do katalogu';
	 exit;
	 }
 } else {
 echo 'Przesylanie pliku nie powiodlo sie ';
 echo $_FILES['zdj_update']['name'];
 exit;
 }
 echo 'Plik wyslany<br><br>';
 echo '<br><hr>';


}
if (isset($_POST['typ_update']) && (isset($_POST['submit3']))) {
	
$edytuj = mysql_query("UPDATE `lista towarów` SET `Typ`='$typ_update',`Producent`='$producent_update',`Nazwa`='$nazwa_update',`Opis`='$opis_update',`Cena`='$cena_update',`Zdjęcie`='$zdj_update' WHERE `ID_towar`='$id_update'");
}
 ?>

<?php 

$lista_towaru  = mysql_query("SELECT * FROM `Lista towarów`");
$lista_towaru2 = mysql_fetch_array($lista_towaru);
$zbyszek = true;


 ?>
<section class="formularz">
	<div class="container">
	<h1 >Lista towarów:</h1>
		<div class="form">
			<form enctype="multipart/form-data" method="post" action="lista7.php">
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo "MAX_SIZE"; ?>">
				<div class="row">
					<div class="col-md-4">
						<select  class="input-text" name="typ" id="typ" required>
							<option value"">Typ oświetlenia</option>

								
									<?php do {  $zbyszek = true;?>

										<?php 
											$do = count($zapis);
											for ($i=0; $i < $do; $i++) { 
												if ($zapis[$i] == $lista_towaru2['Typ']) {
													$zbyszek = false;
												}
											}
										 ?>


										<?php if (($lista_towaru2['Typ']) && ($zbyszek == true)): ?>
											 <option value="<?php echo $lista_towaru2['Typ'] ?>"><?php echo $lista_towaru2['Typ'] ?></option>
											 <?php $zapis[] = $lista_towaru2['Typ']; ?>
										<?php endif ?>

									<?php } while ( $lista_towaru2 = mysql_fetch_array($lista_towaru) ); ?>
										<?php 
											$do = count($zapis);
											for ($i=0; $i < $do; $i++) { 
												echo($zapis[$i]);
											}
										 ?>							

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
									<?php 
									$lista_towaru  = mysql_query("SELECT * FROM `Lista towarów`");
									$lista_towaru2 = mysql_fetch_array($lista_towaru); ?>											 
									<?php do { $zbyszek = true; ?>
										<?php 
											$do = count($zapis);
											for ($i=0; $i < $do; $i++) { 
												if ($zapis[$i] == $lista_towaru2['Producent']) {
													$zbyszek = false;
												}
											}
										 ?>


										<?php if (($lista_towaru2['Producent']) && ($zbyszek == true)): ?>
											 <option value="<?php echo $lista_towaru2['Producent'] ?>"><?php echo $lista_towaru2['Producent'] ?></option>
											 <?php $zapis[] = $lista_towaru2['Producent']; ?>
										<?php endif ?>

									<?php } while ( $lista_towaru2 = mysql_fetch_array($lista_towaru) ); ?>

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



		    

				    /*echo '<pre>';
				    print_r($rowsTable); // paczamy po sortowaniu
				    echo '</pre>';*/
				    ?>	


					<?php 
				    if ($sortowanko == "Rosnąco") {

						$lista_towaru  = mysql_query("SELECT * FROM `Lista towarów` ORDER BY `Cena` DESC");
						$lista_towaru2 = mysql_fetch_array($lista_towaru);

				    } elseif ($sortowanko == "Malejąco") {

						$lista_towaru  = mysql_query("SELECT * FROM `Lista towarów` ORDER BY `Cena` ASC");
						$lista_towaru2 = mysql_fetch_array($lista_towaru);

				    } else {
						$lista_towaru  = mysql_query("SELECT * FROM `Lista towarów`");
						$lista_towaru2 = mysql_fetch_array($lista_towaru); 				    	
				    } ?>		
					    
	
 
					<?php $numFields = mysql_num_fields($lista_towaru); ?>
					<?php for ( $i = 0; $i < $numFields; $i++ ) { ?>
						<?php if ( $i == 4 ){ ?>
							<li class="col-md-2 col-xs-2 text-center "><b><?php echo (mysql_field_name($lista_towaru, $i)); ?></b></li> 
						<?php } elseif (($i == 0) || ($i == 5)) { ?>
							<li class="col-md-1 col-xs-1 text-center "><b><?php echo (mysql_field_name($lista_towaru, $i)); ?></b></li> 
						<?php } else { ?>
							<li class="col-md-2 col-xs-2 text-center "><b><?php echo (mysql_field_name($lista_towaru, $i)); ?></b></li> 
						<?php } ?>
					<?php } ?>
 

					<?php do { ?>
						<?php if (($producent_form == "Producent") && ($typ_form == "Typ oświetlenia")): ?>
								<li class="col-md-1 col-xs-1 text-center "><?php echo $lista_towaru2['ID_towar'] ?></li>
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Typ'] ?></li>
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Producent'] ?></li>	
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Nazwa'] ?></li>
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Opis'] ?></li>
								<li class="col-md-1 col-xs-1 text-center "><?php echo $lista_towaru2['Cena'] ?> PLN</li>
								<li class="col-md-2 col-xs-2 text-center li_zdj"><img class="img-thumbnail li_zd" src="images/upload-images/<?php echo $lista_towaru2['Zdjęcie'] ?>" alt=""></li>				
						<?php endif ?>	

						<?php if (($producent_form != "Producent") && ($typ_form == "Typ oświetlenia")): ?>
							<?php if ($lista_towaru2['Producent'] == $producent_form): ?>
								<li class="col-md-1 col-xs-1 text-center "><?php echo $lista_towaru2['ID_towar'] ?></li>
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Typ'] ?></li>
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Producent'] ?></li>	
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Nazwa'] ?></li>
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Opis'] ?></li>
								<li class="col-md-1 col-xs-1 text-center "><?php echo $lista_towaru2['Cena'] ?> PLN</li>
								<li class="col-md-2 col-xs-2 text-center li_zdj"><img class="img-thumbnail li_zd" src="images/upload-images/<?php echo $lista_towaru2['Zdjęcie'] ?>" alt=""></li>
													
							<?php endif ?>					
						<?php endif ?>		

						<?php if (($typ_form != "Typ oświetlenia") && ($producent_form == "Producent")): ?>
							<?php if ($lista_towaru2['Typ'] == $typ_form): ?>
								<li class="col-md-1 col-xs-1 text-center "><?php echo $lista_towaru2['ID_towar'] ?></li>
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Typ'] ?></li>
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Producent'] ?></li>	
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Nazwa'] ?></li>
								<li class="col-md-2 col-xs-2 text-center "><?php echo $lista_towaru2['Opis'] ?></li>
								<li class="col-md-1 col-xs-1 text-center "><?php echo $lista_towaru2['Cena'] ?> PLN</li>
								<li class="col-md-2 col-xs-2 text-center li_zdj"><img class="img-thumbnail li_zd" src="images/upload-images/<?php echo $lista_towaru2['Zdjęcie'] ?>" alt=""></li>
													
							<?php endif ?>					
						<?php endif ?>	

					<?php } while ( $lista_towaru2 = mysql_fetch_array($lista_towaru) ); ?>	

			
			</ul>
		</div>
	</section>
<?php } ?>


<?php require 'footer.php'; ?>






