<?php
$db_name = "Student_Info";
$mysql_user = "Robin";
$mysql_pass = "root";
$server_name = "localhost";

$conn = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
if(!$conn)
{
echo "Connection Error".mysqli_connect_error();
}
else
{
 echo "<h3>Database connection Sucess...<h3>";
}

?>
