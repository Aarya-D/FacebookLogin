<?php
$connection = mysqli_connect('localhost','root','','facebook');

$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['password'];

$check_data = mysqli_query($connection, "SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail' and password = '$password'");
$check = mysqli_num_rows($check_data);


if($check > 0){
echo "LogIn Successful";
}else{
echo "Error";
}

?>