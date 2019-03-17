<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "form";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
echo"connected succesfully";

if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $passwaord = $_POST["passwaord"];

    $query = "SELECT username,passwaord FROM login WHERE username='$username' AND passwaord='$passwaord'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    if ($row) {



        if ($row['username' == $username]) {

            $cookie_name = "username";
            $cookie_value = "$username";
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

            $_SESSION['username'] = '$username';

            header("location:/con-list.php", 301);
        }
    } else {
        header("location:/index.php", 301);
    }
}
?>
   




