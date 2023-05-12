<?php
 // include("database.php");
$hostName = "localhost";
$username = "root";
$password = "";
$databaseName = "kavewebshoptzkp";
$conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
//$query = "SELECT id, name, stock, price FROM coffee";
//$result = $conn->query($query);
 ?>
 <table>
 <tr>
    <th>Name</th>
    <th>Stock</th>
    <th>Price /package</th>
    <th>Order Amount</th>
    <th> </th>
  </tr>
  <tr>
    <td>Grandma's Black</td>
    <td><?php $query = "SELECT stock, price FROM coffee where id=1";
$result = $conn->query($query); $data = $result->fetch(PDO::FETCH_ASSOC); echo $data['stock']; ?></td>
    <td>$<?php echo $data['price']; ?> </td>
    <form action = "?page=shop" method = "post">
      <td><input type="number" name="amount1" size=8 placeholder=0></td>
      <td><input type="submit" name="order1" value="Place in Cart"></td></form>
  </tr>
  <tr>
    <td>African Grey</td>
    <td><?php $query = "SELECT stock, price FROM coffee where id=2";
$result = $conn->query($query); $data = $result->fetch(PDO::FETCH_ASSOC); echo $data['stock']; ?></td>
    <td>$<?php echo $data['price']; ?> </td>
    <form action = "?page=shop" method = "post">
   <td><input type="number" name="amount2" size=8 placeholder=0></td>
   <td><input type="submit" name="order2" value="Place in Cart"></td></form>
  </tr>
  <tr>
    <td>Arabica</td>
    <td><?php $query = "SELECT stock, price FROM coffee where id=3";
$result = $conn->query($query); $data = $result->fetch(PDO::FETCH_ASSOC); echo $data['stock']; ?></td>
    <td>$<?php echo $data['price']; ?> </td>
    <form action = "?page=shop" method = "post">
   <td><input type="number" name="amount3" size=8 placeholder=0></td>
   <td><input type="submit" name="order3" value="Place in Cart"></td></form>
  </tr>
  <tr>
    <td>Robusta</td>
    <td><?php $query = "SELECT stock, price FROM coffee where id=4";
$result = $conn->query($query); $data = $result->fetch(PDO::FETCH_ASSOC); echo $data['stock']; ?></td>
    <td>$<?php echo $data['price']; ?> </td>
    <form action = "?page=shop" method = "post">
   <td><input type="number" name="amount4" size=8 placeholder=0></td>
   <td><input type="submit" name="order4" value="Place in Cart"></td></form>

  </tr>
  <tr>
    <td>Excelsea</td>
    <td><?php $query = "SELECT stock, price FROM coffee where id=5";
$result = $conn->query($query); $data = $result->fetch(PDO::FETCH_ASSOC); echo $data['stock']; ?></td>
    <td>$<?php echo $data['price']; ?> </td>
    <form action = "?page=shop" method = "post">
   <td><input type="number" name="amount5" size=8 placeholder=0></td>
   <td><input type="submit" name="order5" value="Place in Cart"></td></form>
  </tr>
  <tr>
    <td>Liberica</td>
    <td><?php $query = "SELECT stock, price FROM coffee where id=6";
$result = $conn->query($query); $data = $result->fetch(PDO::FETCH_ASSOC); echo $data['stock']; ?></td>
    <td>$<?php echo $data['price']; ?> </td>
    <form action = "?page=shop" method = "post">
   <td><input type="number" name="amount6" size=8 placeholder=0></td>
   <td><input type="submit" name="order6" value="Place in Cart"></td></form>
  </form>
  </tr>

</table>
  <?php

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}