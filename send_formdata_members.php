<?php
$link = mysqli_connect("localhost","root","root")  or die("failed to connect to server !!");
mysqli_select_db($link,"zia_integration");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$firstname=$_POST['firstname'];
$email=$_POST['email'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `zia_integration`.`members`
(`firstname`, `email`) VALUES ('$firstname', '$email')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
header("Location: http://creachaserver.local:8888/www.zia.co.za/index.php#blog");
}
}
?>