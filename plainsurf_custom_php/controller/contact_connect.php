<?php

$servername="localhost";
$username="root";
$password="123";
$dbname="form";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed" .$conn->connect_error);
}
echo"connected succesfully";
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$details=$_POST["details"];
$opt=$_POST["opt"];

$sql="INSERT INTO contact(firstname,lastname,email,mobile,details,opt) VALUES('$firstname','$lastname','$email','$mobile','$details','$opt')";
if(!mysqli_query($conn,$sql)){
    echo"inserted";
   
}
else{
    echo"not connected";
}
header("location:/contact.php",301);

?>



