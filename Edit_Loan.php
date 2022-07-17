
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
<?php
if(isset($_POST['edit'])){
    include "connection.php";
    $id=$_POST['id'];
    
    $sql="SELECT * FROM loan WHERE Loan_ID='$id'";
    
    $query=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($query)){
       ?>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Loan Management System</h2>
</div>
<br>


<form action="function_loan.php" method="post" >
<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile">


<label class="form-label" for="firstname">Date:</label>
<input type="text" class="form-control" name="date" id="nepali-datepicker" value="<?php echo $row['1'];?> " placeholder="Enter date" required>
<br>

<label class="form-label" for="receiver">Receiver:</label>
<select class="form-select" id="receiver" placeholder="Enter date" name="receiver" required>
<option><?php echo $row['3'];?></option></select> 
<br>

<label class="form-label" for="giver">Giver:</label>
<input type="text" class="form-control" name="giver" id="giver" value="<?php echo $row['2'];?> " placeholder="Enter giver name" required >
<br>

</div>

<div class="w3-container w3-cell w3-mobile">

<label class="form-label" for="firstname">Amount:</label>
<input type="text" class="form-control" name="amount" id="amount" value="<?php echo $row['4'];?> " placeholder="Enter your amount" required >
<br>

<label class="form-label" for="receiver">Status:</label>
<select class="form-select" id="receiver" placeholder="Enter status" value="<?php echo $row['5'];?> " name="status" required>
<option><?php echo $row['6'];?> </option>
<option>Paid</option>
<option>Due</option>
</select> 
<br>

<label class="form-label" for="firstname">Remark:</label>
<textarea type="text" class="form-control" name="remark" id="remark" placeholder="Remarks" required ><?php echo $row['5'];?></textarea>
<br>
</div>
</div>
<br>
<div class="text-center">
<input type="hidden" value="<?php echo $row['Loan_ID']; ?> " name="id">
<input type="submit" name="edit" value="Update Data" class="btn btn-success mb-3">
    </div>

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
 
<?php
    }
}

?>


</body>
</html>