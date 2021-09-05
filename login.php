<?php
$email  = $_GET['email'];
$pwd = $_GET['pwd'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT mobile, email,pwd FROM user 
  where email='".$email."' and pwd='".$pwd."';";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Login Success!";
    }
  } else {
    echo "Login Failed!";
  }
  $conn->close();


?>
