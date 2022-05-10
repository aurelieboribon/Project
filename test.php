<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['sname']) && isset($_POST['fname']) &&
        isset($_POST['user']) && isset($_POST['password']) &&
        isset($_POST['num'])) {
        
        $username = $_POST['sname'];
        $password = $_POST['fname'];
        $gender = $_POST['user'];
        $email = $_POST['password'];
        $phoneCode = $_POST['num'];
        $host = "localhost";
        $dbUser = "root";
        $dbPassword = "";
        $dbName = "office";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT user FROM Registration WHERE user = ? LIMIT 1";
            $Insert = "INSERT INTO Registration(sname, fname, user, password, num) values(?, ?, ?, ?, ?)";
            
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultuser);
            $stmt->store_result();
            $stmt->fetch();
            $rnumber = $stmt->number_rows;
            if ($rnumber == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssi",$sname, $fname, $user, $password, $num);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "This username already exists.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}

else {
    echo "Submit button is not set";
}
?>