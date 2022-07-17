
<?php 

session_start();
if(!isset($_SESSION['email'])){
header("Location:Login.php");
}

?>

<?php
include "connection.php";
$id=$_SESSION['id'];
$query = "SELECT * FROM `users` WHERE User_ID='$id'";
$result = mysqli_query($conn, $query);
$options = "";

while($row = mysqli_fetch_array($result))
{
    $options = $options."<option>$row[1]</option>";
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
<br>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Loan Management System</h2>
</div>
<br>


<form action="function_loan.php" method="post" >
<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile">


<label class="form-label" for="firstname">Date:</label>
<input type="text" class="form-control" name="date" id="nepali-datepicker" placeholder="Enter date" required>
<br>

<label class="form-label" for="receiver">Receiver:</label>
<select class="form-select" id="receiver" placeholder="Enter date" name="receiver" required>
<option><?php echo $options;?></option></select> 
<br>

<label class="form-label" for="giver">Giver:</label>
<input type="text" class="form-control" name="giver" id="giver" placeholder="Enter giver name" required >
<br>

</div>

<div class="w3-container w3-cell w3-mobile">

<label class="form-label" for="firstname">Amount:</label>
<input type="number" class="form-control" name="amount" id="amount" placeholder="Enter your amount" required >
<br>

<label class="form-label" for="receiver">Status:</label>
<select class="form-select" id="receiver" placeholder="Enter status" name="status" required>
<option></option>
<option>Paid</option>
<option>Due</option>
</select> 
<br>

<label class="form-label" for="firstname">Remark:</label>
<textarea type="text" class="form-control" name="remark" id="remark" placeholder="Remarks" required ></textarea>
<br>
</div>
</div>

<input type="submit" name="submit" value="Save" class="btn btn-success mb-3">


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
<th>Date</th>
<th>Giver</th>
<th>Receiver</th>
<th>Amount</th>
<th>Remark</th>
<th>Status</th>
<th>Action</th>

</tr>
</thead>
<?php
include "connection.php";

$id=$_SESSION['id'];

$sql="SELECT * FROM loan  WHERE User_ID='$id'";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['Date']?></td>
  <td> <?php echo $row['Giver_Name']?></td>
  <td> <?php echo $row['Receiver_Name']?></td>
  <td> <?php echo $row['Amount']?></td>
  <td> <?php echo $row['remark']?></td>
  <td> <?php echo $row['Status']?></td>
  
<th>

<div class="w3-dropdown-click">

  <button onclick="myFunction()" class="w3-button w3-black">Click Me!</button>
  <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border text-center">
  <form action="function_loan.php" method="post">
  <input type="hidden" value="<?php echo $row['Loan_ID']; ?> " name="id">
  <input type="submit"  name="delete" value="Delete Data" class="btn btn-success mb-1 mt-1">
</form>
<form action="Edit_Loan" method="post">
<input type="hidden" value="<?php echo $row['Loan_ID']; ?> " name="id">
<input type="submit"   name="edit" value="Edit Data" class="btn btn-success mb-1">
</form>

<form action="View_Loan" method="post">
<input type="hidden" value="<?php echo $row['Loan_ID']; ?> " name="id">
<input type="submit"   name="view" value="View Data" class="btn btn-success">
</form>

    
  </div>
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

<script>
function myFunction() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) { 
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
          

          </div>
</body>
</html>