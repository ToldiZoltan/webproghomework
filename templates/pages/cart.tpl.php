<?php
 // include("database.php");
$hostName = "localhost";
$username = "root";
$password = "";
$databaseName = "kavewebshoptzkp";
$conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
//$query = "SELECT id, username, c_name, amount, price FROM cart where username = :username";

//$result = $conn->query($query);


$sqlSelect = "select id, username, c_name, amount, price FROM cart where username = :username";
$sth = $conn->prepare($sqlSelect);
$sth->execute(array(':username' => $_SESSION['user']));

 ?>
 <table>
 <tr>
    <th>Coffee Name</th>
    <th>Amount</th>
    <th>Price /kg</th>

  </tr>
 <?php
     $total= 0;
     $pr = 0;
 while($data = $sth->fetch(PDO::FETCH_ASSOC)) {
   
   ?>
    <tr>
   <td><?php echo $data['c_name']; ?> </td>
   <td><?php echo $data['amount']; ?> </td>
   <td><?php echo $data['price']; ?> </td>
    </tr>
    <?php
    $pr = $data['amount'] * $data['price'];
    $total= $total + $pr;?>
    <?php
    
  }

  ?>
  
</table>
Total Price: $<?php echo $total;?>
<br>
<form action = "?page=cart" method = "post">
<input type="submit" name="pay" value="Pay" ><br>
</from>
  <?php
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}