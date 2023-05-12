<?php if(isset($uzen)) { ?>
    <?php if($uzen) { ?>
        <h1>Thank you for reaching us! We will get back to you as quickly as we can.</h1>
        Sent from:
        <br/>
        <strong><?= $uzen['email']?></strong>
        <br/>
        The message:
        <br/>
        <strong><?= $uzen['message']?></strong>
        <br/>
        <br/>
        <strong>Previous Messages:</strong>
        <br/>
        <br/>
        <?php
$hostName = "localhost";
$username = "root";
$password = "";
$databaseName = "kavewebshoptzkp";
$conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = "SELECT username, email, message, date FROM text";
$result = $conn->query($query);
 ?>
 <table>
 <tr>
    <th>Username</th>
    <th>Email Address</th>
    <th>Message</th>
    <th>Date</th>
  </tr>
 <?php
 while($data = $result->fetch(PDO::FETCH_ASSOC)) {
   ?>
    <tr>
   <td><?php echo $data['username']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['message']; ?> </td>
   <td><?php echo $data['date']; ?> </td>
   </tr>
    <?php
  }
  ?>
</table>
  <?php
    }}
 else { ?>
        <h1>The sending was unsuccessful!</h1>
        <a href="?page=contact" >Try again!</a>
    <?php }  ?>
<?php ?>