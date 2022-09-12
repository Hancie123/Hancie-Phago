
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


<div class="bg-success w3-hover-shadow w3-padding-64 w3-center my-2 rounded">
   <label class="text-light h4" >Current Balance:</label>

   <?php 
   
   $id=$_SESSION['id'];
    include "connection.php";   
    $query = "SELECT SUM(Amount)-SUM(Withdraw) as Result from saving WHERE User_ID='$id' ";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      ?>
<h1 class="text-light">Rs <?php echo $row[0] ; ?></h1>
<?php
      }
      ?>
  </div>

<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Withdraw Amounts</h2>
</div>
<br>


<form action="function_saving.php" method="post" >
<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile">


<label class="form-label" for="firstname">Date:</label>
<input type="text" class="form-control" name="date" id="nepali-datepicker" placeholder="Enter date" required>
<br>


<label class="form-label" for="category">Expenditure Category:</label><br>
<select class="form-control" name="withdraw1" id="withdraw">
    <option></option>
    <option>Kitchen</option>
    <option>Restaurant</option>
    <option>Shopping</option>
    <option>Transportation</option>
    <option>Fruits</option>
    <option>Vegetables</option>
    <option>Furniture</option>
    <option>College</option>
    <option>Personal</option>
    <option>Hospital</option>
    <option>Vehicles</option>
  </select>
  <br>

</div>

<div class="w3-container w3-cell w3-mobile">
<label class="form-label" for="firstname">Amount:</label>
<input type="text" class="form-control" name="amount" id="amount" placeholder="Enter your amount" required >
<br>


<label class="form-label" for="firstname">Remark:</label>
<textarea type="text" class="form-control" name="remark" id="remark" placeholder="Remarks" required ></textarea>
<br>
</div>
</div>

<input type="submit" name="withdraw" value="Withdraw Amount" class="btn btn-success mb-3 mx-2">


</form>
</div>



<script type="text/javascript">
           $(document).ready(function(){
    var currentDate = NepaliFunctions.ConvertDateFormat(NepaliFunctions.GetCurrentBsDate(), "YYYY-MM-DD");
   

    $('#nepali-datepicker').nepaliDatePicker({
      ndpYear: true,
    ndpMonth: true,
    
    });
});
        </script>

<br>
<!-- Daily Expenses Table -->

<div class="w3-card-4 pt-2">
<div class="table-responsive">
<table id="hancie"class="table table-hover">
<thead class="bg-success text-light">
<tr>
<th>ID</th>
<th>Date</th>
<th>Category</th>
<th>Withdraw Amount</th>
<th>Remark</th>
<th>View</th>
<th>Delete</th>


</tr>
</thead>
<?php
include "connection.php";

$id=$_SESSION['id'];

$sql="SELECT * FROM saving  WHERE User_ID='$id' and Status='Withdraw'";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['Saving_ID']?></td>
  <td> <?php echo $row['Date']?></td>
  <td> <?php echo $row['Income_Source']?></td>
  <td> <?php echo $row['Withdraw']?></td>
  <td> <?php echo $row['Remark']?></td>


<th>
<div class="input-group">
<form action="View_Withdraw" method="post">
<input type="hidden" value="<?php echo $row['Saving_ID']; ?> " name="id">
<input type="submit"  name="view" value="View" class="btn btn-success">
</form>

</div>
</th>
  
<th>
<div class="input-group">
<form action="function_saving.php" method="post">
<input type="hidden" value="<?php echo $row['Saving_ID']; ?> " name="id">
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
          <br>
</body>
</html>