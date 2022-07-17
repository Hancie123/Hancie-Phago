
<?php 

session_start();
if(!isset($_SESSION['email'])){
header("Location:Login.php");
}

?>

<?php  
include "connection.php";
$id=$_SESSION['id'];
 $query = "SELECT category, SUM(amount) as Amount FROM daily_expenses WHERE User_ID='$id' GROUP BY category;";  
 $result = mysqli_query($conn, $query);  
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
<br>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Daily Expenses Analysis</h2>
</div>
<br>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Name', 'Number'],  
<?php  
while($row = mysqli_fetch_array($result))  
 {  
  echo "['".$row["category"]."', ".$row["Amount"]."],";  
   }  
 ?> 
        ]);

        var options = {
          title: 'Monthy Expenses Report',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
 
 
    <div class="w3-container" id="piechart_3d" style="width: 100%; height: 50vh;"></div>


<!-- 
Row Close -->
    </div>

</div>

<br>
<!-- Daily Expenses Table -->

<div class="w3-card-4 pt-2">
<div class="w3-container bg-success text-light">
  <h2>30 Days Expenses</h2>
</div>
<br>
<div class="table-responsive">
<table id="hancie"class="table table-hover">
<thead class="bg-success text-light">
<tr>
<th>ID</th>
<th>Date</th>
<th>Amount</th>
<th>Category</th>
<th>Remark</th>
<th>Action</th>

</tr>
</thead>
<?php
include "connection.php";

$id=$_SESSION['id'];

$sql="SELECT *, DATE_FORMAT(date2, '%Y/%m/%d') FROM daily_expenses WHERE date2 BETWEEN NOW() - INTERVAL 30 DAY AND NOW() AND User_ID='$id'";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['Expenses_ID']?></td>
  <td> <?php echo $row['date']?></td>
  <td> <?php echo $row['amount']?></td>
  <td> <?php echo $row['category']?></td>
  <td> <?php echo $row['remark']?></td>
  
<th>
<div class="input-group">
<form action="function_expenses.php" method="post">
<input type="hidden" value="<?php echo $row['Expenses_ID']; ?> " name="id">
<input type="submit"  name="delete" value="Delete" class="btn btn-success">
</form>

</div>
</th>

<?php  
}
?>

</table>
<div >
<?php
$id=$_SESSION['id'];
$sql="SELECT *,SUM(amount) as Amount, DATE_FORMAT(date2, '%Y/%m/%d') FROM daily_expenses WHERE date2 BETWEEN NOW() - INTERVAL 30 DAY AND NOW() AND User_ID='$id'";

$query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($query)){
?>

<input type="button" value="Total Expenditure of <?php echo date('M');?>: Rs <?php echo $row['Amount'];?> " class="btn btn-success mb-3">
<?php
}
?>


</div>


</div>

<script>
  $(document).ready(function () {
    $('#hancie').DataTable();
});

  </script>
          

          </div>


</body>
</html>