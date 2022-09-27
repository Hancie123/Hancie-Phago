
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
<?php include "topbar.php"; ?>


</head>
<body>

<br>

<div class="w3-container">
<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3">Total Expenses</h4>

<div class="card-body w3-center"><?php 
   $id=$_SESSION['id'];
    include "connection.php";


    $query = "SELECT SUM(amount) as Amount FROM daily_expenses WHERE User_ID='$id'";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      ?>
<h1 class="text-light">Rs. <?php echo $row['Amount'] ; ?></h1>
<?php
      }
      ?></div>
<a href="Daily_Expenses" class="btn btn-dark text-light">View here</a>
</div>
</div>



<div class="w3-container w3-cell w3-mobile my-2">

<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3">Saving Money</h4>
<div class="card-body w3-center"><?php 
   $id=$_SESSION['id'];
    include "connection.php";
    $query = "SELECT SUM(Amount)-SUM(Withdraw) as Result from saving WHERE User_ID='$id'";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      ?>
<h1 class="text-light">Rs. <?php echo $row['Result'] ; ?></h1>
<?php
}?></div>
<a href="Saving" class="btn btn-dark text-light">View here</a>
</div>
</div>




<div class="w3-container w3-cell w3-mobile my-2">
<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3">Lend Money</h4>
<div class="card-body w3-center"><?php 
   $id=$_SESSION['id'];
    include "connection.php";
    $query = "SELECT SUM(Amount) FROM loan WHERE User_ID='$id' and Status='Due'";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      ?>
<h1 class="text-light">Rs. <?php echo $row['0'] ; ?></h1>
<?php
}?></div>
<a href="Loan_Borrow" class="btn btn-dark text-light">View here</a>
</div>
</div>




<div class="w3-container w3-cell w3-mobile my-2">
<div class="card bg-success text-light">
<h4 class="card-title w3-center mt-3"> Room Balance</h4>
<div class="card-body w3-center"><?php 
   $id=$_SESSION['id'];
    include "connection.php";
    $query = "SELECT SUM(Deposit)-SUM(Withdraw) as Result from room_expenses WHERE User_ID='$id'";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      ?>
<h1 class="text-light">Rs. <?php echo $row['Result'] ; ?></h1>
<?php
}?></div>
<a href="Room_Expenses_Dashboard" class="btn btn-dark text-light">View here</a>
</div>
</div>

<!-- ---Row Close ----->
</div>

<!-- ---Container Close ----->
</div>



<!-- -----------------------------Pie Chart------------------------------------------------- -->

<style>
#card {
    border-radius: 2rem;
}

#heading {
    
    border-radius:  2rem  2rem 0rem 0rem ;
}

</style>

<!-- Daily Expenses Pie Chart -->
<?php  
include "connection.php";
$id=$_SESSION['id'];
 $query = "SELECT category, SUM(amount) as Amount FROM daily_expenses WHERE User_ID='$id' GROUP BY category";  
 $result = mysqli_query($conn, $query);  
 ?> 


<br>
<div id="card" class="w3-container shadow-lg m-0 p-0">

<div id="heading" class="w3-container bg-success text-light">
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

    <br>
<!-- 
Row Close -->
    </div>

</div>

<br>



<!-- Daily Expenses Pie Chart -->
<?php  
include "connection.php";
$id=$_SESSION['id'];
 $query = "SELECT Income_Source, SUM(Amount) as amount FROM saving WHERE User_ID='$id' GROUP BY Income_Source";  
 $result = mysqli_query($conn, $query);  
 ?> 

 
<br>
<div id="card" class="w3-container shadow-lg m-0 p-0">

<div id="heading" class="w3-container bg-success text-light">
  <h2>Total Saving Analysis</h2>
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
  echo "['".$row["Income_Source"]."', ".$row["amount"]."],";  
   }  
 ?> 
        ]);

        var options = {
          title: 'Total Saving Report',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie'));
        chart.draw(data, options);
      }
    </script>
 
 
    <div class="w3-container" id="pie" style="width: 100%; height: 50vh;"></div>

<br>
<!-- 
Row Close -->
    </div>

</div>

<br>
          

</body>
</html>