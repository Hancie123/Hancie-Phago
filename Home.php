
<?php 

session_start();
$currentTime = time();

if(!isset($_SESSION['email'])){
header("Location:Login");
}
else {
  $currentTime = time();
  if($currentTime > $_SESSION['expire']) {
    session_unset();
    session_destroy();
    header('location:Login');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include "Admin_Nav.php"; ?>
</head>
<body>

<div id="container" class="w3-card-4 ">

<br>

<div class="w3-container">
<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile mb-3">
<div class="w3-card-4">
    <header class="w3-container bg-success">
      <h2 class="text-light">Passwords</h2>
    </header>

    <div class="w3-container py-3">
      
    <div class="w3-cell-row">

    <!-- One Container -->
  <div class="w3-container  w3-cell w3-mobile">
  <i class='bx bxs-key bx-lg' ></i>
  </div>

  <div class="w3-container w3-cell w3-mobile"><h2>Total Passwords:</h2>
  <?php 
    include "connection.php";
    $id=$_SESSION['id'];
    $query = "SELECT COUNT(Password_ID) FROM password WHERE User_ID='$id'";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "<h1> $row[0] </h1>";
      }
      ?>
  </div>


</div>
    </div>

    <footer class="w3-container bg-success">
      <a href="Manage_Passwords" class="text-center text-light ">View <i class='bx bxs-right-arrow-circle' ></i></a>
    </footer>
  </div>
</div>


<div class="w3-container w3-cell w3-mobile mb-3">
<div class="w3-card-4">
    <header class="w3-container bg-success">
      <h2 class="text-light">Messages</h2>
    </header>

    <div class="w3-container py-3">
      
    <div class="w3-cell-row">

    <!-- One Container -->
  <div class="w3-container  w3-cell w3-mobile">
  <i class='bx bxs-message-dots bx-lg' ></i>
  </div>

  <div class="w3-container w3-cell w3-mobile"><h2>Total Messages:</h2>
  <?php 
    include "connection.php";   
    $query = "SELECT COUNT(ID) as Message_ID FROM messages";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "<h1> $row[0] </h1>";
      }
      ?>
  </div>


</div>
    </div>

    <footer class="w3-container bg-success">
      <a href="Message_Inbox" class="text-center text-light">View <i class='bx bxs-right-arrow-circle' ></i></a>
    </footer>
  </div>
</div>

<div class="w3-container w3-cell w3-mobile mb-3">
<div class="w3-card-4">
    <header class="w3-container bg-success">
      <h2 class="text-light">Views</h2>
    </header>

    <div class="w3-container py-3">
      
    <div class="w3-cell-row">

    <!-- One Container -->
  <div class="w3-container  w3-cell w3-mobile">
  <i class='bx bxl-discord-alt bx-lg'></i>
  </div>

  <div class="w3-container w3-cell w3-mobile"><h2>Total Views:</h2>
  <?php 
    include "connection.php";
    $query = "SELECT COUNT(id) FROM visitor_logs";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "<h1> $row[0] </h1>";
      }
      ?>
  </div>


</div>
    </div>

    <footer class="w3-container bg-success">
      <a href="Activity_Log" class="text-center text-light">View <i class='bx bxs-right-arrow-circle' ></i></a>
    </footer>
  </div>
</div>


<div class="w3-container w3-cell w3-mobile mb-3">
<div class="w3-card-4">
    <header class="w3-container bg-success">
      <h2 class="text-light">Contacts</h2>
    </header>

    <div class="w3-container py-3">
      
    <div class="w3-cell-row">

    <!-- One Container -->
  <div class="w3-container  w3-cell w3-mobile">
  <i class='bx bxs-contact bx-lg' ></i>
  </div>

  <div class="w3-container w3-cell w3-mobile"><h2>Total Contacts:</h2>
  <?php 
    include "connection.php";
    $id=$_SESSION['id'];
    $query = "SELECT COUNT(Contact_ID) FROM contact WHERE User_ID='$id'";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "<h1> $row[0] </h1>";
      }
      ?>
  </div>


</div>
    </div>

    <footer class="w3-container bg-success">
      <a href="Search_Contacts" class="text-center text-light">View <i class='bx bxs-right-arrow-circle' ></i></a>
    </footer>
  </div>
</div>

</div>
</div>
    </br>

    </div>














    <?php  
include "connection.php";
$id=$_SESSION['id'];
 $query = "SELECT category, SUM(amount) as Amount FROM daily_expenses WHERE User_ID='$id' GROUP BY category;";  
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
      <a href="Expenses_report" class="text-center text-light ">View <i class='bx bxs-right-arrow-circle' ></i></a>
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
      <a href="Expenses_report" class="text-center text-light">View <i class='bx bxs-right-arrow-circle' ></i></a>
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
      <a href="Loan_Borrow" class="text-center text-light">View <i class='bx bxs-right-arrow-circle' ></i></a>
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
      <a href="Saving" class="text-center text-light">View <i class='bx bxs-right-arrow-circle' ></i></a>
    </footer>
  </div>
</div>

</div>
</div>
<br>

</div>

<br>





</body>
</html>