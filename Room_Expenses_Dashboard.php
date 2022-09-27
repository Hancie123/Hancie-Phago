
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<?php include "Admin_Nav.php"; ?>
<?php include "topbar.php"; ?>

</head>
<body>


  <br>
<!-- -------------------------First Row and Column------------------------------ -->
<div class="w3-container">
<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3">Current Balance</h4>

<div class="card-body w3-center"><?php 
   $id=$_SESSION['id'];
    include "connection.php";   
    $query = "SELECT SUM(Deposit)-SUM(Withdraw) as Result from room_expenses WHERE User_ID='$id' ";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      ?>
<h1 class="text-light"><i class='bx bx-rupee'></i><?php echo $row['Result'] ; ?></h1>
<?php
      }
      ?></div>
</div>
</div>









<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3">Total Deposit</h4>

<div class="card-body w3-center"><?php 
   $id=$_SESSION['id'];
    include "connection.php";   
    $query = "SELECT SUM(Deposit) as Result from room_expenses WHERE User_ID='$id' ";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      ?>
<h1 class="text-light"><i class='bx bx-rupee'></i><?php echo $row['Result'] ; ?></h1>
<?php
      }
      ?></div>
</div>
</div>



<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3">Total Expenses</h4>

<div class="card-body w3-center"><?php 
   $id=$_SESSION['id'];
    include "connection.php";   
    $query = "SELECT SUM(Withdraw) as Result from room_expenses WHERE User_ID='$id' ";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      ?>
<h1 class="text-light"><i class='bx bx-rupee'></i><?php echo $row['Result'] ; ?></h1>
<?php
      }
      ?></div>
</div>
</div>


<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3"><?php echo date('F');?> Expenses</h4>

<div class="card-body w3-center"><?php 
   $id=$_SESSION['id'];
    include "connection.php";


    $query = "SELECT SUM(Withdraw) as Result from room_expenses WHERE MONTH(Date2) = MONTH(now()) and YEAR(Date2)= Year(now()) and User_ID='$id' ";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      ?>
<h1 class="text-light"><i class='bx bx-rupee'></i><?php echo $row['Result'] ; ?></h1>
<?php
      }
      ?></div>
</div>
</div>

<!-- ---Row Close ----->
</div>

<!-- ---Container Close ----->
</div>

<!-- -----------------------------One Row Complete ------------------------------->
<br>

<div class="w3-container">
<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3">Deposit Money</h4>

<div class="card-body w3-center"><i class='bx bx-save bx-lg'></i></div>
<a href="Room_Saving" class="btn btn-dark text-light">View here</a>
</div>
</div>



<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3">Withdraw Money</h4>

<div class="card-body w3-center"><i class='bx bxs-folder-minus bx-lg'></i></div>
<a href="Room_Withdraw" class="btn btn-dark text-light">View here</a>
</div>
</div>


<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3"> View Statements</h4>

<div class="card-body w3-center"><i class='bx bx-stats bx-lg'></i></div>
<a href="Room_Expenses_Statement" class="btn btn-dark text-light">View here</a>
</div>
</div>

<!-- ---Row Close ----->
</div>

<!-- ---Container Close ----->
</div>







<!-- -----------------------------One Row Complete ------------------------------->
<br>

<div class="w3-container">
<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3">View Deposit</h4>

<div class="card-body w3-center"><i class='bx bx-collection bx-lg'></i></div>
<a href="View_Room_Deposit" class="btn btn-dark text-light">View here</a>
</div>
</div>



<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3">View Expenses</h4>

<div class="card-body w3-center"><i class='bx bx-collection bx-lg'></i></div>
<a href="View_Room_Expenses" class="btn btn-dark text-light">View here</a>
</div>
</div>


<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3">View <?php echo date('M');?> Exps</h4>

<div class="card-body w3-center"><i class='bx bx-collection bx-lg'></i></div>
<a href="Current_Month_Expenses" class="btn btn-dark text-light">View here</a>
</div>
</div>

<!-- ---Row Close ----->
</div>

<!-- ---Container Close ----->
</div>









<!-- Chart Section -->

<?php  
$id=$_SESSION['id'];
include "connection.php";  
 $query = "SELECT *, SUM(Withdraw) as Total FROM room_expenses Where User_ID='$id' Group by Date DESC";  
 $result = mysqli_query($conn, $query);  
 ?>  

<br>
  <h2 class="text-dark text-center">Room Expenses Analysis</h2>
<br>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date','Room Expenses'],  
<?php  
while($row = mysqli_fetch_array($result))  
 {  
  echo "['".$row["Date"]."', ".$row["Total"]."],";  
   }  
 ?> 
        ]);

        var options = {
          title: 'Expenses Analysis',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
 
 
    <div class="w3-container" id="curve_chart" style="width: 100%; height: 50vh;"></div>







<br>











<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
</body>
</html>