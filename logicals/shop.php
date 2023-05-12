<?php
if(isset($_POST['amount1']) && isset($_POST['order1']) && isset($_SESSION['user']))
{
    try {
		// Connecting
		$dbh = new PDO('mysql:host=localhost;dbname=kavewebshoptzkp', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
		
			$sqlInsert = "insert into cart(id, username, c_name, amount, price)
						  values(0, :username, :cname, :amount, :price)";
			$stmt = $dbh->prepare($sqlInsert); 
			$stmt->execute(array(':username' => $_SESSION['user'],':cname' => "Grandma's Black", ':amount' => $_POST['amount1'] ,':price' => 30)); 
			//header("Location: /?page=shop");
	}
	catch (PDOException $e) {
		echo "Error: ".$e->getMessage();
	}    
}
if(isset($_POST['amount2']) && isset($_POST['order2']) && isset($_SESSION['user']))
{
    try {
		// Connecting
		$dbh = new PDO('mysql:host=localhost;dbname=kavewebshoptzkp', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
		
			$sqlInsert = "insert into cart(id, username, c_name, amount, price)
						  values(0, :username, :cname, :amount, :price)";
			$stmt = $dbh->prepare($sqlInsert); 
			$stmt->execute(array(':username' => $_SESSION['user'],':cname' => "African Grey", ':amount' => $_POST['amount2'] ,':price' => 20)); 
			//header("Location: /?page=shop");
	}
	catch (PDOException $e) {
		echo "Error: ".$e->getMessage();
	}    
}
if(isset($_POST['amount3']) && isset($_POST['order3']) && isset($_SESSION['user']))
{
    try {
		// Connecting
		$dbh = new PDO('mysql:host=localhost;dbname=kavewebshoptzkp', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
		
			$sqlInsert = "insert into cart(id, username, c_name, amount, price)
						  values(0, :username, :cname, :amount, :price)";
			$stmt = $dbh->prepare($sqlInsert); 
			$stmt->execute(array(':username' => $_SESSION['user'],':cname' => "Arabica", ':amount' => $_POST['amount3'] ,':price' => 40)); 
			//header("Location: /?page=shop");
	}
	catch (PDOException $e) {
		echo "Error: ".$e->getMessage();
	}    
}
if(isset($_POST['amount4']) && isset($_POST['order4']) && isset($_SESSION['user']))
{
    try {
		// Connecting
		$dbh = new PDO('mysql:host=localhost;dbname=kavewebshoptzkp', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
		
			$sqlInsert = "insert into cart(id, username, c_name, amount, price)
						  values(0, :username, :cname, :amount, :price)";
			$stmt = $dbh->prepare($sqlInsert); 
			$stmt->execute(array(':username' => $_SESSION['user'],':cname' => "Robusta", ':amount' => $_POST['amount4'] ,':price' => 20)); 
			//header("Location: /?page=shop");
	}
	catch (PDOException $e) {
		echo "Error: ".$e->getMessage();
	}    
}
if(isset($_POST['amount5']) && isset($_POST['order5']) && isset($_SESSION['user']))
{
    try {
		// Connecting
		$dbh = new PDO('mysql:host=localhost;dbname=kavewebshoptzkp', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
		
			$sqlInsert = "insert into cart(id, username, c_name, amount, price)
						  values(0, :username, :cname, :amount, :price)";
			$stmt = $dbh->prepare($sqlInsert); 
			$stmt->execute(array(':username' => $_SESSION['user'],':cname' => "Excelsea", ':amount' => $_POST['amount5'] ,':price' => 13)); 
			//header("Location: /?page=shop");
	}
	catch (PDOException $e) {
		echo "Error: ".$e->getMessage();
	}    
}
if(isset($_POST['amount6']) && isset($_POST['order6']) && isset($_SESSION['user']))
{
    try {
		// Connecting
		$dbh = new PDO('mysql:host=localhost;dbname=kavewebshoptzkp', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
		
			$sqlInsert = "insert into cart(id, username, c_name, amount, price)
						  values(0, :username, :cname, :amount, :price)";
			$stmt = $dbh->prepare($sqlInsert); 
			$stmt->execute(array(':username' => $_SESSION['user'],':cname' => "Liberica", ':amount' => $_POST['amount6'] ,':price' => 24)); 
			//header("Location: /?page=shop");
	}
	catch (PDOException $e) {
		echo "Error: ".$e->getMessage();
	}    
}
/*else {
    header("Location: .");
}*/
if(!isset($_SESSION['user']))
{
    $errormessage = "Please log in first!";
}

?>
