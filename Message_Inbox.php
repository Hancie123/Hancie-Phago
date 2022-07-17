
<?php 

session_start();
include "connection.php";
if(!isset($_SESSION['email'])){
header("Location:Login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Images/Logo.ico">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hancie Phago</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<?php include "Admin_Nav.php"; ?>
</head>
<body>

<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Message Inbox</h2>
</div>
<br>
<div class="table-responsive">
<table id="hancie"class="table table-hover table-striped">
<thead class="bg-success text-light">
<tr>
<th>ID</th>
<th>Name</th>
<th>Contact</th>
<th>Message</th>
<th>Actions</th>

</tr>
</thead>
<?php
include "connection.php";
$id=$_SESSION['id'];

$sql="SELECT * FROM messages";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['ID']?></td>
  <td><p> <?php echo $row['Name']?><p></td>
  <td> <?php echo $row['Contact']?></td>
  <td> <?php echo $row['Message']?></td>
  
<th>
<form action="function_message.php" method="post">
<input type="hidden" value="<?php echo $row['ID']; ?> " name="id">
<input type="submit"  name="delete" value="Delete" class="btn btn-success">
</form>
<br>
<form action="View_Messages.php" method="post">
<input type="hidden" value="<?php echo $row['ID']; ?> " name="id">
<input type="submit"  value="View" class="btn btn-success">
</form>

</th>

<?php  
}
?>

</table>
</div>
<script>
  $(document).ready(function () {
    $('#hancie').DataTable();
});

  </script>

</div>
          

</body>
</html>