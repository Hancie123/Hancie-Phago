
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
  <h2>Manage Notes</h2>
</div>
<br>
<div class="table-responsive">
<table id="hancie"class="table table-hover">
<thead class="bg-success text-light">
<tr>
<th>ID</th>
<th>Title</th>
<th>Notes</th>
<th style="width:7em">Actions</th>

</tr>
</thead>
<tbody>
<?php
include "connection.php";

$id=$_SESSION['id'];

$sql="SELECT * FROM notes WHERE User_ID='$id'";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['Note_ID'];?></td>
  <td> <?php echo $row['Title'];?></td>
  <td><p> <?php echo $row['Notes'];?><p></td>
  
<th>
<div class="input-group">

<form action="Edit_Notes" method="post">
<input type="hidden" value="<?php echo $row['Note_ID']; ?> " name="id">
<button name="edit" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
</form>

<form action="View_Notes" method="post">
<input type="hidden" value="<?php echo $row['Note_ID']; ?> " name="id">
<button name="view" class="btn btn-primary"><i class="bi bi-eye"></i></button>
</form>

</div>
</th>
</tr>
</tbody>
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