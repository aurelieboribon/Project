<?php
	$sname = $_POST['sname'];
	$fname = $_POST['fname'];
	$user = $_POST['user'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(sname, fname, user, password, number) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $sname, $fname, $user, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>