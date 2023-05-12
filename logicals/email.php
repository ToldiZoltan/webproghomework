<?php
$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(isset($_POST['textarea']) && isset($_POST['emailad']) && preg_match($re,$_POST['emailad'])){
	try {
		// Connecting
		$dbh = new PDO('mysql:host=localhost;dbname=kavewebshoptzkp', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
		
        if(isset($_SESSION['user'])) 
            { 
        $sqlInsert = "insert into text(id, username, email, message)
        values(0, :username, :email,  :text)";
        $stmt = $dbh->prepare($sqlInsert); 
        $stmt->execute(array(':text' => $_POST['textarea'],':email' => $_POST['emailad'], ':username' => $_SESSION['user'])); 
            }
        else
        {
        $sqlInsert = "insert into text(id, email, message)
        values(0, :email,  :text)";
        $stmt = $dbh->prepare($sqlInsert); 
        $stmt->execute(array(':text' => $_POST['textarea'],':email' => $_POST['emailad'],));
        }
        if($count = $stmt->rowCount()) 
        {        
        $again = false;
        $sqlSelect = "select message, email from text where id = :id";
		$sth = $dbh->prepare($sqlSelect);
		$sth->execute(array(':id' => $dbh->lastInsertId()));
		$uzen = $sth->fetch(PDO::FETCH_ASSOC);
        $statement = "Select username, email, message, date From text";
        $result = $dbh->query($statement);
        }
			else {
				$message = "The sending was unsuccessful!";
				$again = true;
		}
	}
	catch (PDOException $e) {
		echo "Error: ".$e->getMessage();
	$again = true;
	}      
}
//else {    header("Location: ?page=contact");}


?>
