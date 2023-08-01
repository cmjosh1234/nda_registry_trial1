<?php
//session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "nda_registry_trial1";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);


// new data
$user = $_POST['uname'];
$password = $_POST['pword']; 

if($user == '') {
	$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}

// query
$result = $conn->prepare("SELECT * FROM user WHERE username= :ent1 AND password= :ent2");
$result->bindParam(':ent1', $user);
$result->bindParam(':ent2', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
header("location: main/index.php");
}
else{
	$errmsg_arr[] = 'Username and Password are not found';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_destroy();
	header("location: index.php");
	exit();
}

?>