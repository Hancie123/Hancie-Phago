
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

<br>

<!-- -------------------Saving Form ------------------------>
<style>
#card {
    border-radius: 2rem;
}

#heading {
    
    border-radius:  2rem  2rem 0rem 0rem ;
}

</style>
<div id="card"class="w3-card-4">

<div class="text-center">
  <h2 id="heading" class="p-0 m-0 text-light p-3 bg-success">Withdraw Amounts</h2>
</div>
<br>


<form action="function_saving.php" method="post" >
<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile">


<label class="form-label" for="firstname">Date:</label>
<input type="text" class="form-control" name="date" id="nepali-datepicker" placeholder="Enter date" required>
<br>

<label class="form-label" for="firstname">Amount:</label>
<input type="text" class="form-control" name="withdraw" id="amount" placeholder="Enter your amount" required >
<br>

</div>

<div class="w3-container w3-cell w3-mobile">



<label class="form-label" for="firstname">Remark:</label>
<textarea type="text" class="form-control" name="remark" id="remark" placeholder="Remarks" required ></textarea>
<br>
</div>
</div>

<input type="submit" name="room_withdraw" value="Deposit Money" class="btn btn-success mb-3 mx-5">


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


<div class="table-responsive">
<table id="hancie"class="table table-hover">
<thead class="bg-success text-light">
<tr>
<th>ID</th>
<th>Date</th>
<th>Withdraw Amount</th>
<th>Remark</th>
<th>Actions</th>


</tr>
</thead>
<?php
include "connection.php";

$id=$_SESSION['id'];

$sql="SELECT * FROM room_expenses  WHERE User_ID='$id' and Status='Withdraw'";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['Expenses_ID']?></td>
  <td> <?php echo $row['Date']?></td>
  <td> <?php echo $row['Withdraw']?></td>
  <td> <?php echo $row['Remark']?></td>


  <th>


<form action="function_saving.php" method="post">
<input type="hidden" value="<?php echo $row['Expenses_ID']; ?> " name="id">
<button name="room_withdraw_delete" class="btn btn-danger"><i class="bi bi-trash3"></i>
</form>


</th>

<?php  
}
?>

</table>


<script>
  $(document).ready(function () {
    $('#hancie').DataTable();
});

  </script>
          

          </div>
          <br>
</body>
</html>