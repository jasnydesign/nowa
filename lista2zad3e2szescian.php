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
	<section class="formularz" style="padding: 40px 0px;">
	<h1 class="text-center">Kreator brył - przejdź przez wszystkie etapy wypełniając formularze.</h1>
		<div class="container">

				<h1 class="text-center" style="padding: 20px 0px;">Sześcian</h1>
				<p>
					<b>Sześcian</b> (właściwie sześcian foremny, inaczej heksaedr) – wielościan foremny o sześciu ścianach w kształcie przystających kwadratów. Ma dwanaście krawędzi, osiem wierzchołków i 4 przekątne. Ścinając odpowiednio wierzchołki sześcianu otrzymujemy wielościan półforemny o nazwie sześcian ścięty. <br><br>

	Kąt między ścianami o wspólnej krawędzi jest kątem prostym (tj. wynosi 90°), zaś kąt bryłowy przy wierzchołku (tj. kąt trójścienny) wynosi π/2.<br><br>

	Grupą symetrii sześcianu jest Oh.<br><br>

	Sześcian jest szczególnym przypadkiem graniastosłupa prawidłowego, hipersześcianu (w przestrzeni trójwymiarowej), prostopadłościanu i romboedru.<br><br>

	Formy sześcienne, podobnie jak inne regularne kształty geometryczne, często występują w środowisku naturalnym. Tak krystalizuje np. piryt.<br><br>
				</p>

				<h2>Wzory</h2>
					<p>
						Niech a oznacza długość krawędzi sześcianu.<br><br>

	Wzór na objętość sześcianu: <br>

	<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3127f1ddb9dec04e2388702ecc0fa55695068dae" alt=""><br><br>
	Wzór na pole powierzchni całkowitej sześcianu:<br>

	<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f892cab72aef834aff17d7bd78f9dc4713f609a2" alt=""><br><br>
	Wzór na długość przekątnej sześcianu:<br>

	<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d51a2188253ed1ee1ac196aa3249c68d7284aa5f" alt=""><br><br>
	Wzór na sumę długości krawędzi sześcianu:<br>

	<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/713e670f0a1ac4d43e2b5d02d16f4bc35371a343" alt=""><br><br>
					</p>


			<form method="post" action="lista2zad3e3.php">

				<div class="niewidok">
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


	    	<input class="input-btn" type="submit" name="submit" value="Przejdź do etapu 3">
		          
			</form>

		</div>	
	</section>
<?php } ?>



<?php if ($_POST['options'] == "option2") { ?>
	<section class="formularz" style="padding: 40px 0px;">
	<h1 class="text-center">Kreator brył - przejdź przez wszystkie etapy wypełniając formularze.</h1>
		<div class="container">

				<h1 class="text-center" style="padding: 20px 0px;">Walec</h1>
				<p>
<b>Walec</b> jest bryłą geometryczną ograniczoną powierzchnią walcową i dwiema płaszczyznami nierównoległymi do jej tworzącej. Jeżeli płaszczyzny są prostopadłe do tworzącej, wówczas jest to walec prosty. <br><br>

Walec kołowy prosty jest bryłą geometryczną powstałą w wyniku obrotu prostokąta wokół jednego z jego boków. Podstawą walca oraz jego górną częścią jest koło, a jego szerokość jest w każdym miejscu taka sama.<br><br>

Bryła ta jest w pewnym kartezjańskim układzie współrzędnych opisana jako zbiór punktów  (x,y,z) spełniających układ nierówności:<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/93155b538509c2f34075c4a40c0151347b1c7a84" alt="">
zaś w pewnym układzie walcowym jako zbiór punktów <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/389978539f314e07d7a62817c07d6387b4fbf1ee" alt=""> spełniających układ nierówności:<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d7bd583c345c36f9a6ee90b38269c8aebc5e8759" alt="">
gdzie <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4cd56b667d1815f735bfcbb2f7ed842390f4c580" alt=""> jest promieniem walca, zaś <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/dced7f0812475a99873dc950354ef3721c82d165" alt=""> – jego wysokością.<br><br>

Często walcem nazywa się też powierzchnię walcową, będącą przedłużeniem w nieskończoność powierzchni bocznej walca. Jej równanie: <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f5ed9d9763124224deaef61d1c3e93b8de55d911" alt="">.<br><br>

Walcami określa się również inne bryły i powierzchnie, których podstawą może być jakakolwiek figura płaska. Najczęściej rozpatruje się przypadek, kiedy tą podstawą jest krzywa stożkowa: elipsa, hiperbola, lub parabola. Mówimy wówczas odpowiednio o walcu eliptycznym, hiperbolicznym i parabolicznym, przy czym jedynie pierwszy z nich może stanowić bryłę, a pozostałe dwa są powierzchniami nieskończonymi.
				</p>

				<h2>Podstawowe wzory</h2>
					<p>
Niech: <br><br>

 r  - promień podstawy walca,
 h - wysokość walca.
Wzór na pole powierzchni podstawy walca kołowego prostego:<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3a0aac440f4dd6f8677585d468c5bd540fa155e4" alt="">
Wzór na pole powierzchni bocznej walca kołowego prostego:<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b9e3a34fd696c8ef58af4edb1a876ee3e711ead4" alt="">
Wzór na pole powierzchni całkowitej walca kołowego prostego:<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/41971f7a565dc2a20ac35ec59a46298af4d4dc49" alt="">
Wzór na objętość walca kołowego prostego:<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d8bd67a020846f624067fbda5d0894b2db162edc" alt="">
					</p>



			<form method="post" action="lista2zad3e3.php">

				<div class="niewidok">
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


	    	<input class="input-btn" type="submit" name="submit" value="Przejdź do etapu 3">
		          
			</form>

		</div>	
	</section>
<?php } ?>



<?php if ($_POST['options'] == "option3") { ?>
	<section class="formularz" style="padding: 40px 0px;">
	<h1 class="text-center">Kreator brył - przejdź przez wszystkie etapy wypełniając formularze.</h1>
		<div class="container">

				<h1 class="text-center" style="padding: 20px 0px;">Stożek</h1>
				<p>
<b>Stożek (dawniej konus)</b> – bryła ograniczona przez powierzchnię stożkową, której linia kierująca jest zamknięta, oraz przez płaszczyznę przecinającą powierzchnię stożkową. Część płaszczyzny wycięta przez powierzchnię stożkową stanowi podstawę stożka. Może mieć ona kształt dowolnej figury płaskiej. Kierującą powierzchni stożkowej może być obwód podstawy. Wysokością stożka nazywamy odległość wierzchołka od płaszczyzny podstawy. <br><br>

Objętość stożka wynosi<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4b67e7a51e846b3588d257c400930d5412fa5769" alt=""><br><br>
gdzie

S – pole powierzchni podstawy stożka,<br><br>
h – wysokość stożka.
				</p>

				<h2>Stożek obrotowy</h2>
					<p>
Stożek obrotowy prosty to bryła wypukła powstała przez obrót trójkąta prostokątnego wokół jednej z przyprostokątnych. Przyprostokątna ta tworzy wysokość (h) stożka, druga przyprostokątna staje się promieniem podstawy (r) zaś przeciwprostokątna – tworzącą stożka (l). <br><br>

Stożek w kartezjańskim układzie współrzędnych opisany jest układem nierówności:<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/132296a8e9b1e8e9bca676db21b99446e379b074" alt="">
gdzie <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/36dc20613b911493c84f080ecab07180d4e30211" alt="">
Długość tworzącej stożka
Długość tworzącej wynika z twierdzenia Pitagorasa:<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1c61cf37b6f616ff31ca0bb8983faa071594df32" alt="">
Pole powierzchni bocznej stożka
<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8e19b318b49fdbc4c8efc1500546bf17ca3c5ace" alt="">
Wzór ten można uzyskać w następujący sposób: powierzchnia boczna stożka po rozprostowaniu na płaszczyźnie tworzy wycinek kołowy o promieniu R=l takim jak tworząca stożka i długości łuku równej obwodowi podstawy stożka <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/384fc8de0e18b27dbca1618a8df396b187148324" alt=""><br><br>

Wycinek kołowy o promieniu  R i długości łuku  L ma pole powierzchni:<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e07d6ebcec55558183607e30084724d253c745f9" alt="">
Stąd<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/167186d8737673fb253f6bf8816b11b91b8be581" alt="">
Pole powierzchni całkowitej stożka
<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e322f11f30c102efebf6931d30585e37222d8583" alt="">
Objętość stożka
<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ce90df4ba09ff36ec499a332ad1e5b57dfb4c1c4" alt="">
Wzór ten obowiązuje także dla dowolnych ostrosłupów, Pp jest wtedy polem wielokątnej podstawy. Koło jest granicznym przypadkiem ciągu wielokątów foremnych dla liczby boków dążącej do nieskończoności.<br><br>

Kąt rozwarcia stożka
Tym terminem oznacza się kąt przy wierzchołku przekroju osiowego stożka.<br><br>

<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/9b2747a503f030b3ffed04b91372a8402a63290a" alt="">
Objętość kuli opisanej na stożku
<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/efa151be36f200aedb61e6d24fa0dc52ea026e8d" alt="">
gdzie l - tworząca, r - promień podstawy stożka.						
					</p>



			<form method="post" action="lista2zad3e3.php">

				<div class="niewidok">
					<h1 class="text-center">Etap 1</h1>
					<h2>Jaka bryła Ciebie interesuje?</h2>

					<div class="btn-group btn-group-justified " data-toggle="buttons">
					  <label class=" btn btn-primary active">
					    <input type="radio" name="options" id="option1" value="option1" autocomplete="off" > Sześcian
					  </label>
					  <label class=" btn btn-primary">
					    <input type="radio" name="options" id="option2" value="option2" autocomplete="off"> Walec
					  </label>
					  <label class=" btn btn-primary">
					    <input type="radio" name="options" id="option3" value="option3" autocomplete="off" checked> Stożek
					  </label>
					</div>					
				</div>


	    	<input class="input-btn" type="submit" name="submit" value="Przejdź do etapu 3">
		          
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