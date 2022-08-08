
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
<?php
if(isset($_POST['view'])){
    include "connection.php";
    $id=$_POST['id'];
    
    $sql="SELECT * FROM saving WHERE Saving_ID='$id'";
    
    $query=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($query)){
       ?>


<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Saving Information</h2>
</div>
<br>
<div class="w3-container">
<label for="id" class="form-label h3">Saving ID:</label>
<label><h3><?php echo $row['Saving_ID']; ?></h3></label>
    </div>
<hr>

<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile">
<label class="form-label h5" for="date">Date:</label>
<label  class="form-label h5" name="date"><?php echo $row['1'];?></label>
<br>
<br>


<label class="form-label h5" for="date">Name:</label>
<label  class="form-label h5" name="date"><?php echo $_SESSION['name'];?></label>
<br>
<br>


<label class="form-label h5" for="firstname">Income Source:</label>
<label  class="form-label h5" name="receiver"><?php echo $row['4'];?></label> 
<br>
<br>
</div>

<div class="w3-container w3-cell w3-mobile">

<label class="form-label h5" for="amount">Amount:</label>
<label  class="form-label h5" name="amount"><?php echo $row['3'];?></label> 
<br>
<br>
<label class="form-label h5" for="status">Remarks:</label>
<label  class="form-label h5" name="status"><?php echo $row['5'];?></label> 
<br>
<br>

</div>
</div>
<br>
<br>

<div class="text-center">
<label  class="form-label text-info pull-right" name="remark">Created: <?php echo $row['1'];?></label><br> 
<label>Thank you!</label>
    </div>
<br>
</form>
						
 



    </div>
<?php
    }
}

?>
</div>

</body>
</html>