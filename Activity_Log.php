
<?php 

session_start();
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<?php include "Admin_Nav.php"; ?>
</head>
<body>

</style>

<div id="container" class="w3-card-4 ">

<div class="w3-container bg-success text-light">
  <h2>Activity Logs</h2>
</div>
<br>
<div class="table-responsive">
<table id="hancie"class="table table-hover">
<thead class="bg-success text-light">
<tr>
<th>ID</th>
<th>Page URL</th>
<th>Referrer URL</th>
<th>IP Address</th>
<th>User Agent</th>
<th>Created</th>
<th style="width:7em">Actions</th>

</tr>
</thead>
<?php
include "connection.php";


$sql="SELECT * FROM visitor_logs";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['id'];?></td>
  <td> <?php echo $row['page_url'];?></td>
  <td><?php echo $row['referrer_url'];?></td>
  <td><?php echo $row['user_ip_address'];?></td>
  <td><?php echo $row['user_agent'];?></td>
  <td><?php echo $row['created'];?></td>
  
<td>
<div class="input-group">

<form action="View_Activity" method="post">
<input type="hidden" value="<?php echo $row['id']; ?> " name="id">
<button name="view" class="btn btn-primary"><i class="bi bi-eye"></i></button>
</form>

</div>
</td>
</tr>

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
  <br>        

</body>
</html>