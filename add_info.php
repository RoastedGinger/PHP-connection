<?php
session_start();
require "init.php";
error_reporting(E_ALL ^ E_DEPRECATED);
$department = $_POST["Department"];
$email = $_POST["Email"];
$roll_num = $_POST["Rollnum"];
$name = $_POST["Name"];

function passFunc($len,$set = ""){
	 $gen ="";
	 
	 for($i=0;$i<$len;$i++)
	 {
		 $set =str_shuffle($set);
		 $gen .= $set[0];
	 }
	  return $gen;
 }
 
 $passcode = passFunc (8,$email);
 echo $passcode;

$_SESSION["email_id"]=$email;
$_SESSION["password"] = $passcode;

$to = $email;
$subject = "Your Registration password";

$header = "From:robingurung652@gmail.com \r\n";
$header = "Cc:robingurung652@gmail.com \r\n";
$header = "MIME-Version: 1.0 \r\n";
$header = "Content-type: text/html \r\n";

$retval = mail($to,$subject,$passcode,$header);

if($retval == true) {
 $sql = "insert into Web_app values('$department','$email','$passcode','$roll_num','$name');";
 if(mysqli_query($conn,$sql))
{
echo "<br><h3>One Student Info Inserted...</h3></b>";
echo "Verification password send successfully",'<be>';
}
}

else
{
  echo "Error in insertion \n message could not be sent....".mysqli_error($conn);
}

?>
