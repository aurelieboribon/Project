<?php
	$sname = $_POST['sname'];
	$fname = $_POST['fname'];
	$user = $_POST['user'];
	$password = $_POST['password'];
	$num = $_POST['num'];

	// Database connection
	$conn = new mysqli('localhost','root','','office');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Registration(sname, fname, user, password, num) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $sname, $fname, $user, $password, $num);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>