<?php require 'header.php'; ?>



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