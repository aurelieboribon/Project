<?php
	
session_start();

$conn = mysqli_connect('localhost','root','office');

mysqli_select_db($conn, 'Registration');

$sname = $_POST['sname'];
$fname = $_POST['fname'];
$user = $_POST['user'];
$password = $_POST['password'];
$num = $_POST['num'];

$s = "select * from usertable where user = '$user'";

$result = mysqli_query($conn, $s);

$number = mysqli_number_rows($result);

if($number == 1){
    echo" Username Already Taken";
} else{
    $reg= " insert into usertable(sname, fname, user, password, num) values ('$sname','$fname','$user','$password','$num')";
    mysqli_query($conn, $reg);
    echo" Registration Successful";

}

?>