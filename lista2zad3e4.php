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



  <link href='http://fonts.googleapis.com/css?family=Cuprum&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Cousine&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Chivo&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Coda&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

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


<?php if ($_POST['options'] == "option1") { ?>
	<section class="formularz">
	<h1 class="text-center">Kreator brył - przejdź przez wszystkie etapy wypełniając formularze.</h1>
		<div class="container">
			<h3 class="text-center">Na podstawię wymiarów które podałeś postaramy Ci wytłumaczyć jak obliczyć pole powierzchni całkowitej oraz objętośc sześcianu.</h3>



			<div class="row" style="padding: 100px 0px; ">
				<div class="col-md-6" style="border-bottom: 2px solid black;">
					<p>
						Wzór na <b>objętość</b> sześcianu: <br><br>
						<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3127f1ddb9dec04e2388702ecc0fa55695068dae" alt=""><br><br>
						a więc, <br>
						<h3><b><?php echo $_POST['dlugosca']; ?>*<?php echo $_POST['dlugosca'] ?>*<?php echo $_POST['dlugosca'] ?>=<?php echo $_POST['dlugosca']*$_POST['dlugosca'] ?></b></h3> <br>
						Objętośc szescianu o wymiarach które podałeś to <b><?php echo $_POST['dlugosca']*$_POST['dlugosca'] ?></b>.

					</p>					
				</div>
				<div class="col-md-6" style="border-bottom: 2px solid black;">
					<p>
						Wzór na <b>pole powierzchni całkowitej</b> sześcianu: <br><br>
						<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f892cab72aef834aff17d7bd78f9dc4713f609a2" alt=""> <br><br>
						a więc, <br>
						<h3><b>6*<?php echo $_POST['dlugosca']; ?>*<?php echo $_POST['dlugosca']; ?>=<?php echo 6*$_POST['dlugosca']*$_POST['dlugosca']; ?></b></h3><br>
						Pole powierzchni całkowitej o wymiarach które podałeś wynosi <b><?php echo 6*$_POST['dlugosca']*$_POST['dlugosca']; ?></b>.
					</p>
				</div>				
			</div>
				<form method="post" action="lista2zad3e5.php">
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
				    <input class="input-btn" type="submit" name="submit" value="Przejdź do etapu 5">
				          
				</form>
		</div>	
	</section>
<?php } ?>









<?php if ($_POST['options'] == "option2") { ?>
	<section class="formularz" style="padding: 80px 0px; margin: 40px 0px;">
	<h1 class="text-center">Kreator brył - przejdź przez wszystkie etapy wypełniając formularze.</h1>
		<div class="container">
			<h3 style="padding: 40px 0px;" class="text-center">Na podstawię wymiarów które podałeś postaramy Ci wytłumaczyć jak obliczyć pole powierzchni całkowitej oraz objętośc walca.</h3>





			<div class="row" style="margin: 20px 0px; border-bottom:2px solid black; ">
				<div class="col-md-6" >
					<p>
						Wzór na objętość <b>walca</b> kołowego prostego:: <br><br>
						<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d8bd67a020846f624067fbda5d0894b2db162edc" alt=""><br><br>
						a więc, <br>
						<h3><b>3.14*<?php echo $_POST['walecr']; ?>*<?php echo $_POST['walecr'] ?>*<?php echo $_POST['walech'] ?>=<?php echo 3.14*$_POST['walecr']*$_POST['walecr']*$_POST['walech']; ?></b></h3> <br>
						Objętośc szescianu o wymiarach które podałeś to <b><?php echo 3.14*$_POST['walecr']*$_POST['walecr']*$_POST['walech'] ?></b>.

					</p>					
				</div>
				<div class="col-md-6" >
					<p>
						Wzór na <b>pole powierzchni całkowitej</b> walca kołowego prostego:<br><br>
						<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/41971f7a565dc2a20ac35ec59a46298af4d4dc49" alt=""> <br><br>
						a więc, <br>
						<h3><b>2*3.14*<?php echo $_POST['walecr']; ?>*<?php echo $_POST['walecr']; ?>+2*3.14*<?php echo $_POST['walecr']; ?>*<?php echo $_POST['walech']; ?>=<?php echo 2*3.14*$_POST['walecr']*$_POST['walecr']+2*3.14*$_POST['walecr']*$_POST['walech']; ?></b></h3><br>
						Lub: <br><br>
						<h3><b>2*3.14*<?php echo $_POST['walecr']; ?>*(<?php echo $_POST['walecr'];  ?>+<?php echo $_POST['walech'];  ?>)=<?php echo 2*3.14*$_POST['walecr']*($_POST['walecr']+$_POST['walech']); ?></b></h3>
						Pole powierzchni całkowitej o wymiarach które podałeś wynosi <b><?php echo 2*3.14*$_POST['walecr']*$_POST['walecr']+2*3.14*$_POST['walecr']*$_POST['walech']; ?></b>.
					</p>
				</div>				
			</div>









				<form method="post" action="lista2zad3e5.php">
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
				    <input class="input-btn" type="submit" name="submit" value="Przejdź do etapu 5">
				          
				</form>
		</div>	
	</section>
<?php } ?>







<?php if ($_POST['options'] == "option3") { ?>
	<section class="formularz" style="padding: 80px 0px; margin: 40px 0px;">
	<h1 class="text-center">Kreator brył - przejdź przez wszystkie etapy wypełniając formularze.</h1>
		<div class="container">
			<h3 style="padding: 40px 0px;" class="text-center">Na podstawię wymiarów które podałeś postaramy Ci wytłumaczyć jak obliczyć pole powierzchni całkowitej oraz objętośc walca.</h3>





			<div class="row" style="margin: 20px 0px; border-bottom:2px solid black; ">
				<div class="col-md-6" >
					<p>
						Wzór na <b>Objętość</b> stożka: <br><br>
						<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ce90df4ba09ff36ec499a332ad1e5b57dfb4c1c4" alt=""><br><br>
						podstawa to koło a więc, <br>
						<h3><b>(1/3)*3.14*<?php echo $_POST['stozekr']; ?>*<?php echo $_POST['stozekr'] ?>*<?php echo $_POST['stozekh'] ?>=<?php echo (1/3)*3.14*$_POST['stozekr']*$_POST['stozekr']*$_POST['stozekh']; ?></b></h3> <br>
						Objętośc stożka o wymiarach które podałeś to <b><?php echo (1/3)*3.14*$_POST['stozekr']*$_POST['stozekr']*$_POST['stozekh']; ?></b>.

					</p>					
				</div>
				<div class="col-md-6" >
					<p>
						Wzór na <b>Pole powierzchni całkowitej</b> stożka:<br><br>
						<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e322f11f30c102efebf6931d30585e37222d8583" alt=""> <br>
						<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/167186d8737673fb253f6bf8816b11b91b8be581" alt=""><br><br>
						a więc, <br>
						<h3><b>3.14*<?php echo $_POST['stozekr']; ?>*<?php echo $_POST['stozekr'] ?>*<?php echo $_POST['stozekh'] ?>+3.14*<?php echo $_POST['stozekr'] ?>*<?php echo $_POST['stozekl'] ?>=<?php echo 3.14*($_POST['stozekr']*$_POST['stozekr'])+3.14*$_POST['stozekr']*$_POST['stozekl']; ?></b></h3><br>

						Pole powierzchni całkowitej o wymiarach które podałeś wynosi <b><?php echo 3.14*$_POST['stozekr']*($_POST['stozekr']+$_POST['stozekl']); ?></b>.
					</p>
				</div>				
			</div>









				<form method="post" action="lista2zad3e5.php">
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
				    <input class="input-btn" type="submit" name="submit" value="Przejdź do etapu 5">
				          
				</form>
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