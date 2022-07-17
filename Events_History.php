
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
<?php include "events_topbar.php"; ?>

</head>
<body>

<br>


<div class="w3-card-4 pt-2">
<div class="w3-container bg-success text-light">
  <h2>Events History</h2>
</div>
<br>
<div class="table-responsive">
<table id="hancie"class="table table-hover">
<thead class="bg-success text-light">
<tr>
<th>Event ID</th>
<th>Date</th>
<th>Event Name</th>
<th>Action</th>


</tr>
</thead>
<?php
include "connection.php";

$id=$_SESSION['id'];

$sql="select * from events where User_ID=$id and start_event<curdate() or start_event=curdate()  order by id DESC";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['id']?></td>
  <td> <?php echo $row['start_event']?></td>
  <td> <?php echo $row['title']?></td>
  
<th>
<div class="input-group">
<form action="calenderdelete.php" method="post">
<input type="hidden" value="<?php echo $row['id']; ?> " name="id">
<input type="submit"  name="delete1" value="Delete" class="btn btn-success">
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