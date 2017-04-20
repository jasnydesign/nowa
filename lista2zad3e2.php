<?php require 'header.php'; ?>



<section class="formularz">
<h1 class="text-center">Kreator brył - przejdź przez wszystkie etapy wypełniając formularze.</h1>
	<div class="container">
		<div class="form">
			<form method="post" action="lista2zad3e3.php">


				<h1 class="text-center">Etap 1</h1>
				<h2>Jaka bryła Ciebie interesuje?</h2>

				<div class="btn-group btn-group-justified " data-toggle="buttons">
				  <label class=" btn btn-primary active">
				    <input type="radio" name="options" id="option1" autocomplete="off" checked> Sześcian
				  </label>
				  <label class=" btn btn-primary">
				    <input type="radio" name="options" id="option2" autocomplete="off"> Walec
				  </label>
				  <label class=" btn btn-primary">
				    <input type="radio" name="options" id="option3" autocomplete="off"> Stożek
				  </label>
				</div>
				<div class="row">
					<div class="col-md-4">
						<img class="center-block img-responsive" src="http://www.matmana6.pl/zdjecia/szkola_srednia/geometria_w_przestrzeni_stereometria/szescian_39.png" alt="">
					</div>

					<div class="col-md-4">
						<img class="center-block img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Cylinder_geometry.svg/150px-Cylinder_geometry.svg.png" alt="">
					</div>
					<div class="col-md-4">
						<img class="center-block img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Stozek_schemat.svg/200px-Stozek_schemat.svg.png" alt="">
					</div>
				</div>

	    	<input class="input-btn" type="submit" name="submit" value="Przejdź do etapu 2">
		          
			</form>
		</div>












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