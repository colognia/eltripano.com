<?php

//script by Schmidtconsult IT-services, Frauke Schmidt

if (isset($_POST['submit'])) {  //wurde geschickt?
  $name=$_POST['name'];   //das gelbe entspricht Feldbezeichnun name
  $absendemail=$_POST['mail'];
  $telefon=$_POST['phone'];
  $nachricht=$_POST['message'];  //das rote sind neue php-Variablen
  $betreff="mail von kunde";
}

$mailTo ="technician@eltripano.com";    //welche Zieladresse
$headers="From:".$absendemail;   //Zusatzinfo, von wem zB, oder cc, ...
$txt="Es gibt eine mail von ".$name.".\n".$telefon.".\n\n".$nachricht;     //hinter Name noch Punkt und newline + 1 Leerzeile. Beim 2. \n\n muss nochmal . davor.

mail($mailTo, $betreff,  $txt, $headers);   //3. Parameter. 1. Zielmail, 2. Betreff, 3. Nachricht, 4. setzt Absendemail ein
header("Location: mail-sent.html");   //zurück zu Hauptseite oder anderer  wenn geschickt
