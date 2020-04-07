<?php

require_once "config.php";

$fname =$lname= $email = $psw = $pswrpt = "";
$pswerror ="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $fname = test_input($_POST["firstname"]);
  
  
  
    $email = test_input($_POST["email"]);
 
$lname = test_input($_POST["lastname"]);                  
  
    $psw =$_POST["psw"];
  
    $pswrpt = $_POST["pswrepeat"];
  
}

  

$pswhash=password_hash($psw,PASSWORD_DEFAULT);



   $sql = "INSERT INTO  userinfo (firstname, lastname, email, password)
VALUES ('$fname','$lname','$email','$pswhash')";
if (mysqli_query($conn, $sql)) {
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);



}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



 




mysqli_close($conn);

echo "welcome!";
?>
