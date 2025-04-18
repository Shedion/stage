<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voetbal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{
  echo "Connected to database";
}

if(isset($_GET['action'])){
  if($_GET['action'] == 'upd'){
    $id = $_GET['id'];
    $sql = "SELECT * FROM voetballers WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
}
}
?>

<form method='POST' action=''>
<label for='voornaam'>voornaam:</label>
<input type="hidden" name='id'value="<?= $row['id']?>">
<input type='text' id='voornaam' name='voornaam' placeholder='voer voornaam in' value="<?= $row['voornaam']?>"> <br>
<label for='achternaam'>achternaam:</label>
<input type='text' id='achternaam' name='achternaam' placeholder='voer achternaam in'value="<?= $row['achternaam']?>">
<br>
<label for='geboortedatum'>geboortedatum:</label>
<input type='date' id='geboortedatum' name='geboortedatum' value="<?= $row['geboortedatum']?>">
<br>
<input type='submit' name="submit_update" value='Submit'>
</form>

<?php

if (isset($_POST['submit_update'])){
  $voornaam = $_POST['voornaam'];
  $achternaam = $_POST['achternaam'];
  $geboortedatum = $_POST['geboortedatum'];
  $sql = "UPDATE voetballers SET id = '$id', voornaam = '$voornaam', achternaam = '$achternaam', geboortedatum = '$geboortedatum', foto_url = '$foto_url' WHERE id = '$id'";
  $sql = mysqli_query($conn, $sql);
  if ($sql) {
    header('location: index.php');
  }
  
}

?>