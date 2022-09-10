
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
<?php include "topbar.php"; ?>

</head>
<body>


<!-- Daily Expenses Table -->
<br>
<h2 class="text-center text-dark">Room Expenses Statement</h2><br>
<table id="hancie"class="table table-borderless table-hover">
<thead class="bg-success text-light">
<tr>
<th>Expense ID</th>
<th>Date</th>
<th>Credit</th>
<th>Debit</th>
<th>Balance</th>

</tr>
</thead>
<tbody>
<?php
include "connection.php";

$id=$_SESSION['id'];

$sql="SELECT * , SUM(Deposit)-SUM(Withdraw) as Result FROM room_expenses  WHERE User_ID='$id' GROUP BY Date2 ORDER BY Expenses_ID";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['Expenses_ID'];?></td>
  <td> <?php echo $row['Date'];?></td>
  <td> <?php echo $row['Deposit'];?></td>
  <td> <?php echo $row['Withdraw'];?></td>
  <td ></td>

  

</tr>


</tbody>
<?php  

}

?>

<tr>
    <td colspan="4"></td>
    <td  class="text-right"><?php 
   $id=$_SESSION['id'];
    include "connection.php";   
    $query = "SELECT SUM(Deposit)-SUM(Withdraw) as Result from room_expenses WHERE User_ID='$id' ";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      ?>
<h5 class="text-danger">Rs. <?php echo $row['Result'] ; ?></h5>
<?php
      }
      ?></td>
  </tr>


</table>


<script>
  $(document).ready(function() {
$('#hancie').DataTable( {
"lengthMenu": [[100, 50, 25], [100, 50, 25]]
} );
} );

  </script>
          

        
</body>
</html>