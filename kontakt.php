<?php
 
$EmailFrom = $mail; // Z jakiego maila będą przychodzić wiadomości
$EmailTo = "jasnydesign@gmail.com"; // Do jakiego miala będą przychodzic wiadomosci
$Subject = "HAPPYSAD RECENZJA - www.jasnydesign.eu"; // tytuł wiadomości
$headers = "Content-typ: text/html; charset=utf-8r\n"; //ustawienie kodowania dla polskich znaków w wiadomosciach
$headers = "Content-Transfer-Encodin: 8bitr\n"; //ustawienie kodowania dla polskich znaków w wiadomosciach





$imie = Trim(stripslashes($_POST['imie']));

$mail = Trim(stripslashes($_POST['mail']));

$message = Trim(stripslashes($_POST['message']));

$man = Trim(stripslashes($_POST['man']));

$women = Trim(stripslashes($_POST['women']));

$pelnoletni = Trim(stripslashes($_POST['pelnoletni']));



if (isset($_POST['man'])) {

    // Checkbox is selected
}


if (isset($_POST['man'])) { 
  $plec = "Mężczyzna";
} else {
  $plec = "Kobieta";
}

 
// validation
$validationOK=true;
if (!$validationOK) {
  print "Wystąpił problem. Proszę upewnij się czy wpisałeś poprawnie adres email."; // Tekst błędu 
  exit;
}
 
// budowa wiadomości która dojdzie na nasz mail
$list = 
        "Przysłał - $imie $mail
        Płeć - $plec
        $message

          ";






// wiadomośc wysyłana do autora w ramach potwierdzenia
$list2 = 
        "Przysłał - $Subject
        
        Witam,
        dziękuję za Twoją wiadomość, gdy tylko ją odczytam postaram się jak najprędziej odpowiedzieć :)
        
        Pozdrawiam, Rafał Jaseniuk.
        www.jasnydesign.eu


          ";



// wysyłanie        
$success = mail($EmailTo, $Subject, $list, "From: <$mail>");
$success = mail($mail, $Subject, $list2, "From: <$EmailTo>");



 
// jeśli wszystko sie powiedzie to
if ($success){
  echo "<script>location.href='recenzje.html';</script>"; // Przekierowanie do strony recenzje
}
else{
  print "Wystąpił problem, proszę upewnij się czy wpisałeś poprawnie wszystkie pola."; // Tekst błędu
}
?>
- 