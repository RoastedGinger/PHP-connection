<?php
 include 'connection.php';
 $phone=$_POST["mobile"];
 $Pass=$_POST["passwd"];
 $val= "connected";
$sql = "Select * FROM Users WHERE Password='$Pass' AND Phone='$phone'";


$result = $conn->query($sql);

if ($result->num_rows =='1') {
   echo $val;
   
    
} else {
    echo "Invalid User Name or Password";
}
$conn->close();
?>
 
