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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $voornaam = $_POST['voornaam'];
  $achternaam = $_POST['achternaam'];
  $geboortedatum = $_POST['geboortedatum'];


  $sql = "INSERT INTO voetballers (voornaam, achternaam, geboortedatum) VALUES ('$voornaam', '$achternaam', '$geboortedatum')";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

$sql = "SELECT * FROM voetballers";
$result = mysqli_query($conn, $sql);

if (!$result) {
  die("Query failed: " . mysqli_error($conn));
}

echo "<form method='POST' action=''>";
echo "<label for='voornaam'>voornaam:</label>";
echo "<input type='text' id='voornaam' name='voornaam' placeholder='voornaam'>";
echo "<br>";
echo "<label for='achternaam'>achternaam:</label>";
echo "<input type='achternaam' id='achternaam' name='achternaam' placeholder='achternaam'>";
echo "<br>";
echo "<label for='geboortedatum'>geboortedatum:</label>";
echo "<input type='date' id='geboortedatum' name='geboortedatum'>";
echo "<br>";
echo "<input type='submit' value='Submit'>";
echo "</form>";
?>
