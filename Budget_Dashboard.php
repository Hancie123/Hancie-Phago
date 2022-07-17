
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

<div id="container" class="w3-card-4 ">

<br>

<div class="w3-container">
<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile mb-3">
<div class="w3-card-4">
    <header class="w3-container bg-success">
      <h2 class="text-light">Total Expenses</h2>
    </header>

    <div class="w3-container py-3">
      
    <div class="w3-cell-row">

    <!-- One Container -->
  <div class="w3-container  w3-cell w3-mobile">
  <i class='bx bx-money bx-lg'></i>
  </div>

  <div class="w3-container w3-cell w3-mobile"><h2>Rs:</h2>
  <?php 
    include "connection.php";
    $id=$_SESSION['id'];
    $query = "SELECT SUM(amount) as Amount FROM daily_expenses WHERE User_ID='$id'";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "<h1> $row[0] </h1>";
      }
      ?>
  </div>


</div>
    </div>

    <footer class="w3-container bg-success">
      <a href="" class="text-center text-light ">View <i class='bx bxs-right-arrow-circle' ></i></a>
    </footer>
  </div>
</div>


<div class="w3-container w3-cell w3-mobile mb-3">
<div class="w3-card-4">
    <header class="w3-container bg-success">
      <h2 class="text-light">Today's Expenses</h2>
    </header>

    <div class="w3-container py-3">
      
    <div class="w3-cell-row">

    <!-- One Container -->
  <div class="w3-container  w3-cell w3-mobile">
  <i class='bx bx-money bx-lg'></i>
  </div>

  <div class="w3-container w3-cell w3-mobile"><h2>Rs:</h2>
  <?php 
    include "connection.php";  
    $id=$_SESSION['id']; 
    $query = "select SUM(amount) as Amount from daily_expenses where User_ID='$id' AND DATE(date2)=CURDATE();";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "<h1> $row[0] </h1>";
      }
      ?>
  </div>


</div>
    </div>

    <footer class="w3-container bg-success">
      <a href="" class="text-center text-light">View <i class='bx bxs-right-arrow-circle' ></i></a>
    </footer>
  </div>
</div>

<div class="w3-container w3-cell w3-mobile mb-3">
<div class="w3-card-4">
    <header class="w3-container bg-success">
      <h2 class="text-light">Total Loans</h2>
    </header>

    <div class="w3-container py-3">
      
    <div class="w3-cell-row">

    <!-- One Container -->
  <div class="w3-container  w3-cell w3-mobile">
  <i class='bx bx-money bx-lg'></i>
  </div>

  <div class="w3-container w3-cell w3-mobile"><h2>Rs:</h2>
  <?php 
    include "connection.php";
    $id=$_SESSION['id']; 
    $query = "SELECT SUM(Amount) FROM loan WHERE User_ID='$id'";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "<h1> $row[0] </h1>";
      }
      ?>
  </div>


</div>
    </div>

    <footer class="w3-container bg-success">
      <a href="" class="text-center text-light">View <i class='bx bxs-right-arrow-circle' ></i></a>
    </footer>
  </div>
</div>


<div class="w3-container w3-cell w3-mobile mb-3">
<div class="w3-card-4">
    <header class="w3-container bg-success">
      <h2 class="text-light">Total Saving</h2>
    </header>

    <div class="w3-container py-3">
      
    <div class="w3-cell-row">

    <!-- One Container -->
  <div class="w3-container  w3-cell w3-mobile">
  <i class='bx bx-chat bx-lg' ></i>
  </div>

  <div class="w3-container w3-cell w3-mobile"><h2>Rs:</h2>
  <?php 
    include "connection.php";
    $id=$_SESSION['id'];
    $query = "SELECT SUM(Amount) FROM saving WHERE User_ID='$id'";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "<h1> $row[0] </h1>";
      }
      ?>
  </div>


</div>
    </div>

    <footer class="w3-container bg-success">
      <a href="" class="text-center text-light">View <i class='bx bxs-right-arrow-circle' ></i></a>
    </footer>
  </div>
</div>

</div>
</div>
<br>

</div>



<!-- Daily Expenses Pie Chart -->
<?php  
include "connection.php";
$id=$_SESSION['id'];
 $query = "SELECT category, SUM(amount) as Amount FROM daily_expenses WHERE User_ID='$id' GROUP BY category";  
 $result = mysqli_query($conn, $query);  
 ?> 


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



<!-- Daily Expenses Pie Chart -->
<?php  
include "connection.php";
$id=$_SESSION['id'];
 $query = "SELECT Income_Source, SUM(Amount) as amount FROM saving WHERE User_ID='$id' GROUP BY Income_Source";  
 $result = mysqli_query($conn, $query);  
 ?> 

 
<br>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
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


<!-- 
Row Close -->
    </div>

</div>

<br>
          

</body>
</html>