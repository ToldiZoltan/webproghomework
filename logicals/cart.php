<?php
if(isset($_POST['pay']) && isset($_SESSION['user']))
{
		// Connecting
		$hostName = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "kavewebshoptzkp";
	$conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$query = "SELECT id, username, c_name, amount, price FROM cart where username = :username";

//$result = $conn->query($query);


$sqlDelete = "DELETE FROM cart WHERE username = :username";
$sth = $conn->prepare($sqlDelete);
$sth->execute(array(':username' => $_SESSION['user']));

	      
}
if(!isset($_SESSION['user']))
{
    $errormessage = "Please log in first!";
}
?>
