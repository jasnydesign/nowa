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



<section class="formularz">
<h1 class="text-center">Tabliczka mnożenia, zarządzaj liczbą kolumn oraz wierszy.</h1>
	<div class="container">
		<div class="form">
			<form method="post" action="lista2zad2.php">

				<div class="row">
					<div class="col-md-4"><input class="input-text" type="text" name="wiersz" id="wiersz"  placeholder="Liczba wierszy*"></div>
					<div class="col-md-4"><input class="input-text" type="text" name="kolumna" id="kolumna"  placeholder="Liczba kolumn *"></div>
					<div class="col-md-4"></div>
				</div>

			    <input class="input-btn" type="submit" name="submit" value="Wyślij">
			    <input class="input-btn" type="reset" name="reset" value="Resetuj pola">
			          
			</form>
		</div>
	</div>	
</section>



<section class="wizytowka">
	<div class="container">

       
             <?php if (isset($_POST['wiersz'])) { ?>

					<table class="pnl results spacja">

						<thead>

							<tr class="srodek">
							    <th></th>

							<?php

							
							if (isset($_POST['wiersz'])) {

							$liczba_wierszy = $_POST['wiersz'];

							$liczba_kolumn = $_POST['kolumna'];

							} else {
							$liczba_wierszy = 0;

							$liczba_kolumn = 0;
							}


							for ($i = 1; $i <= $liczba_kolumn; $i++) {
							  echo "<th>$i</th>";
							}
							?>      
							</tr>	

						</thead>

						<tbody class="srodekk">
							<?php

							for ($i = 1; $i <= $liczba_wierszy; $i++) {
							    echo '<tr>';
							    echo "<th>$i</th>";    
							    for ($j = 1; $j <= $liczba_kolumn; $j++) {    
							        echo '<td>';
							        echo $j * $i;
							        echo '</td>';
							    }
							    echo "</tr>";    
							}
							?>
						</tbody>

					</table>
       
<?php } ?>


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