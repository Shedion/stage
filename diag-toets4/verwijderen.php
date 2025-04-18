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

if (!empty($_POST['submit'])) {
  $id = $_POST['id'];

  $sql = "DELETE FROM `voetballers` WHERE id= '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

?>