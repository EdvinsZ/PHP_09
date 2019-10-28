<?php

session_start();


$con = mysqli_connect('localhost', 'root', '' ,'crud') or die(mysqli_error($mysqli));

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT * FROM usertable WHERE name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){

    $_SESSION['username'] = $name;
    header('location: index.php');
} else {
    header('location: login.php');

}

?>