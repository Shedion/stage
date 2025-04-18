<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="layoyut">
    <nav>
    <a href="index.php">home</a>
    <a href="insert.php">toevoegen</a>
    </nav>
    <div id="appeltjes">Alle voetballertjes weer teruggeplaatst</div>
    <h1> Onze helden van 1974!</h1>
  <formt class="layout">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voetbal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM voetballers";
$result = mysqli_query($conn, $sql);

if (isset($_GET['action'])){
  if ($_GET['action'] == 'del'){
    $id = $_GET['id'];
    $sql = "DELETE FROM voetballers WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
  }
}

echo "<table border=1>";
echo '<tr><th>voornaam</th><th>achternaam</th><th>geboortedatum</th><th>foto_url</th><th>aanpassen</th><th>delete</th><tr>';


  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    echo "<td>" . $row['voornaam'] . "</td><td>" . $row['achternaam'] . "</td><td>" . $row['geboortedatum'] . "</td><td><img src='images/" . ($row['foto_url']) . "'style='width:50px;'></td>";
    echo "<td><a href='aanpassen.php?action=upd&id={$id}'>aanpassen</a></td>";
    echo "<td><a href='index.php?action=del&id={$id}'>verwijderen</a></td>";
    echo '</tr>';
    }
    echo "</table>";

    
?>
</formt>
<div>
</body>
</html>