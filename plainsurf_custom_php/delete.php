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

$sql = "delete FROM contact WHERE id='$_GET[id]'";
if(mysqli_query($conn,$sql)){
    header("refresh:1;url=con-list.php");
}
 else {
echo"not deleted";    
}
?>