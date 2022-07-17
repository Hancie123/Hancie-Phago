
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
<script type="text/javascript" src="Scripts/nepali-date-picker.min.js"></script>
<link rel="stylesheet" href="Scripts/nepali-date-picker.min.css">
<?php include "Admin_Nav.php"; ?>
<?php include "Project_topbar.php"; ?>
</head>
<body>
<br>
<!-- Daily Project Table -->

<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h3>Pending Projects List</h3>
</div>
<br>
<div class="table-responsive">
<table id="hancie"class="table table-hover">
<thead class="bg-success text-light">
<tr>
<th>Date</th>
<th>Project</th>
<th>Category</th>
<th>Status</th>
<th>Progress</th>
<th>Action</th>


</tr>
</thead>
<?php
include "connection.php";

$id=$_SESSION['id'];

$sql="SELECT * FROM projects  WHERE User_ID='$id' AND status='Pending'";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['date']?></td>
  <td> <?php echo $row['title']?></td>
  <td> <?php echo $row['category']?></td>
  <td> <?php echo $row['status']?></td>

  <td> 

  <div class="progress">
    <div class="progress-bar progress-bar-success bg-success text-light progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['progress'];?>%">
    <?php echo $row['progress'];?>%
  </div>
  
  </div>

</td>


<th>
<div class="input-group">
<form action="Edit_Project.php" method="post">
<input type="hidden" value="<?php echo $row['Project_ID']; ?> " name="id">
<button name="edit" class="btn btn-success"><i class="bi bi-pencil-square"></i>
</form>

<form action="View_Project.php" method="post">
<input type="hidden" value="<?php echo $row['Project_ID']; ?> " name="id">
<button name="view" class="btn btn-danger"><i class="bi bi-eye-fill"></i>
</form>

</div>
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