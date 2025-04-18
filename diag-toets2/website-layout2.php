<!DOCTYPE html>
<html lang="en">
<head>
  <title>kerstborrel</title>
  <link rel="stylesheet" href="website-layout2.css">
</head>
<body>
  <div class="container">
    <div id="kerstboom"> <img src="kerstboom.png" width="50px" height=70px> </div>
    <div class="kerstborrel">
      <b>Kerstborrel</b>
    </div> 
    <div id="sneeuw"><img src="sneeuw.png" width="70px" height=auto></div>
  </div>  
  <section class="kerst">

    <div id="tijden">
  <p>
          Wanneer<br>
    vr 20 december 2024<br>
    16:00 uur - 20:00 uur<br><br>
   
    Waar<br>
    Deltion college<br>
    Gebouw groen<br>
    Lokaal 2.0999<br>
    Mozartlaan 15<br>
    8031 AA Zwolle
  </p>
</div>
<div id="uitnodiging">

  <p>
    SD kerstborrel<br>
  </p>

  <p>
Bij deze bent u van harte uitgenodigd op de jaarlijkse<br>
kerstborrel van het ICT-Lyceum. Deze wordt zoals<br>
altijd gehouden in 1 van de lokalen van gebouw groen<br>
op de 2de verdieping.<br>
We hopen jou graag te zien voor een hapje en een<br> 
drankje met alle medestudenten.<br>
Meldt u zich hiernaar even aan?<br>
  </p>
  <p>
Ten slotte raden we u met klem af, om hierheen te <br>
komen omdat dit een
<b>fake-bericht</b> is!!
  </p>
</div>
<div>
  <p>
    <b>aanmelden voor borrel</b>
  </p>
  <form method="POST" action="">
    <label for="naam">Naam: </label>
    <input type="text" id="naam" name="naam" required>
    <br><br>
    <label for="email">Email-adres: </label>
    <input type="text" id="email" name="email" required>
    <br>
    <input type="submit" value="meld mij aan">
  </form>
</div>
  </section>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = $_POST['naam'];
    $email = $_POST['email'];

    if (strpos(strtolower($naam), 'Jan Klaasen') !== false || strpos(strtolower($email), 'jan@klaassen.nl') !== false) {
        // Include a different file
        include 'welkom.html';
    } else {
        // Handle the form submission as usual
    }
}
?>
