<?php

session_start();

unset($_SESSION['badPass']);
$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];

require_once 'DataBaseConnection.php';

$mypassword = mysql_fix_string($con, $mypassword);
$myusername = mysql_fix_string($con, $myusername);

$HASHED = hash("ripemd128", $mypassword);

$sql = "SELECT * FROM CSIS2440.Captains WHERE Email = '$myusername' AND ThePass = '$HASHED'";

$result = $con->query($sql);

if(!$result) {
  $message = "Whole query " . $sql;
  echo message;
  
  die('Invalid query : ' . mysqli_error());
}

$count = $result->num_rows;

if($count == 1) {
  $row = $result->fetch_assoc();
  
  $_SESSION['user'] = $myusername;
  $_SESSION['password'] = $mypassword;
  $_SESSIONS['Captain'] = $row['CaptainName'];
  $_SESSION['Command'] = $row['Command'];
  $_SESSION['Combat'] = $row['Combat'];
  $_SESSION['Commerce'] = $row['Commerce'];
  $_SESSION['Cunning'] = $row['Cunning'];
  
  header('Location:Dashboard.php');
} else {
  header('Location:LoginPage.php');
  $_SESSION['result'] = $result;
 }
?>