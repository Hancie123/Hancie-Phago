
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
<style>
@media print {
  #printPageButton {
    display: none;
  }

  body *:not(#my-section):not(#my-section *){
        visibility: hidden;
    }
}

</style>

<!-- Daily Expenses Table -->
<br>
<div id="my-section">
<h2 class="text-center text-dark"><span class="w3-left"><button id="printPageButton" class="btn btn-danger"onClick="window.print();">Print Statement</button></span><?php echo date('F Y');?> Room Expenses Report</h2><br>
<table  class="table table-borderless table-hover">
<thead class="bg-success text-light">
<tr>
<th>Expense ID</th>
<th>Date</th>
<th>Expenses</th>
<th>Remarks</th>
</tr>
</thead>
<tbody>
<?php
include "connection.php";

$id=$_SESSION['id'];

$sql="SELECT * FROM room_expenses  WHERE User_ID='$id' AND MONTH(Date2) =Month(now()) and YEAR(Date2)=Year(now()) AND Status='Withdraw' GROUP BY Date2 ORDER BY Expenses_ID";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['Expenses_ID'];?></td>
  <td> <?php echo $row['Date'];?></td>
  <td> Rs. <?php echo $row['Withdraw'];?></td>
  <td> <?php echo $row['Remark'];?></td>
  

  

</tr>


</tbody>
<?php  

}

?>



</table>
    </div>


          

        
</body>
</html>