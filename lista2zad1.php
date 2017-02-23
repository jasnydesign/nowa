<!DOCTYPE HTML><html lang="pl">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

  <title>Happysad - klasyka polskiego rocku</title>

 <meta name="description" content="Strona poświęcona tematyce zespołu Happysad">

 <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/muza.css" media="screen">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href='http://fonts.googleapis.com/css?family=Coda&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
</head>
<body>


<header class="bez">
	<div id="hedek">
		<div class="container">
			<nav>
				<div class="col-md-4">
					<a href="index.html"><img src="images/happysad_logo.png" class="img-responsive logo"  alt=""></a>
				</div>
				<ul class="col-md-8 text-right">
					<li ><a href="index.html">Strona główna</a></li>
					<li><a href="sylwetka.html">Sylwetka</a></li>
					<li><a href="dyskografia.html">Dyskografia</a></li>
					<li><a href="multimedia.html">Multimedia</a></li>
					<li><a href="recenzje.html">Recenzje</a></li>
					<li><a href="recenzje.html">Lista2</a>
					<ul class="dropdown-menu dropek-admin">
						<li><a href="lista2zad1.php">zad1</a></li>
						<li><a href="lista2zad2.php">zad2</a></li>
						<li><a href="lista2zad3.php">zad3</a></li>
					</ul></li>
				</ul>
			</nav>	
		</div>
	</div>
</header>

<section class="slider text-center">
	<h1>
		Strona poświęcona zespołowi happysad
	</h1>
</section>



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
							<option value="chivo">Chivo</option>
							<option value="coda">Coda</option>
							<option value="cousine">Cousine</option>
							<option value="cuprum">Cuprum</option>
						</select>
					</div>
					<div class="col-md-6">
						<select class="input-text" name="czcionka" id="czcionka">
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
}


?>


<section class="wizytowka">
	<div class="container">
		<div class="col-md-3"></div>

			<div class="wizyt col-md-6">
				<div class="row">
					<div class="col-md-6">
						<h1>
							<?php if (isset($_POST['imie'])) { echo "$imie"; } if (isset($_POST['nazwisko'])) { echo "$nazwisko"; } ?> <br>
							Lat, <?php if (isset($_POST['wiek'])) { echo "$wiek"; } ?>
						</h1>
					</div>
					<div class="col-md-6">
						<h2>
							<?php if (isset($_POST['miasto'])) { echo "$miasto"; } ?>, <?php if (isset($_POST['ulica'])) { echo "$ulica"; } ?> <br>
							<?php if (isset($_POST['ulica'])) { echo "$ulica"; } ?> <br>
							<?php if (isset($_POST['telefon'])) { echo "$telefon"; } ?>
						</h2>
					</div>
				</div>
			</div>

		<div class="col-md-3"></div>
		</div>
</section>

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