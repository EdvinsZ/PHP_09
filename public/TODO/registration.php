<?php

session_start();

header('location:login.php');

$con = mysqli_connect('localhost', 'root', '' ,'crud') or die(mysqli_error($mysqli));

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "SELECT * FROM usertable WHERE name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "username already taken!";


} else {
    $reg = "insert into usertable(name, password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo "Registration successful";

}

?>