<?php
	session_start();

	//echo $_POST['uname'] .$_POST['psw'];

	//build connection to mysql  oo way
	$connection = new mysqli("localhost", "root", "", "postpublisho");
	
	//procedural way
	//$connection = mysqli_connect("localhost", "root", "", "postpublisho");
	
	
	//checking connection
	if($connection->connect_error)
		die("Connection failed: " . $conn->connect_error);
	//echo "connected successfully!<br>";
	//
	$sql1 = "SELECT * from user where id = ".$_POST['uid']."";
		$result3 = $connection->query($sql1);
	
		foreach($result3 as $entry)
		{
			$yes= password_verify($_POST['psw'], $entry['password']);
		}
	//password hash checking
	$sql = "select * from user where id = ".$_POST['uid']." and password = '".$_POST['psw']."'";
	//echo $sql; 
	
	//run the query and retrieve data==== result set
	$result = $connection->query($sql);
	
	if($result->num_rows == 0)
		header("Location:index.php");
		
	
	else{
		//navigate the result set and display to user
		$row = $result->fetch_assoc();
		//keep login info in session
		$_SESSION['login'] = true;
		$_SESSION['id'] = $_POST['uid'];
		$_SESSION['username'] = $row['name'];
		
		
		header("Location: logged.php");
	}
	
	//close connection
	$connection->close();
	//mysqli_close($connection);