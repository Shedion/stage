<!DOCTYPE html>
<html lang="en">
<head>
  <title>over mij</title>
  <style>
    .content{
      width:26%;
    }
  </style>

</head>
<body>
  <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sterk";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$res = mysqli_query($conn, "SELECT * FROM content");

echo "<h1>content</h1>";
echo "<table border=1 class=\"content\">";

while ( $row = mysqli_fetch_assoc($res)){
  echo "<tr>";
  echo "<td>" . $row["id"] . "</td>";
  echo "<td>" . $row["pagina"] . "<br>" . "</td>";
  echo "<td>" . $row["content"] . "<br>" . "</td>";
  echo "<td>" . $row["status"] . "<br>" . "</td>";
  echo "</tr>";
}

echo "</table>";

?>
</body>
</html>
