
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
  <script type="text/javascript" src="Scripts/nepali-date-picker.min.js"></script>
<link rel="stylesheet" href="Scripts/nepali-date-picker.min.css">
<?php include "Admin_Nav.php"; ?>
</head>
<body>

<?php

if(isset($_POST['edit'])){
    include "connection.php";
    $id=$_POST['id'];
    
    $sql="SELECT * FROM contact WHERE Contact_ID='$id'";
    
    $query=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($query)){
        ?>
        
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Contact Management System</h2>
</div>
<br>


<form action="function_contact.php" method="post" >
<div class="w3-cell-row">


<div class="w3-container w3-cell w3-mobile">


<label class="form-label" for="firstname">Name:</label>
<input type="text" class="form-control" value="<?php  echo $row['1']; ?>" name="name" id="name" placeholder="Enter your name" required >
<br>




<label class="form-label" for="firstname">Date of birth:</label>
<input type="text" class="form-control" value="<?php  echo $row['3']; ?>" name="dob" id="nepali-datepicker" placeholder="Enter your date of birth" required>
<br>




<label class="form-label" for="firstname">Email:</label>
<input type="email" class="form-control" value="<?php  echo $row['5']; ?>" name="email" id="email" placeholder="Enter email address" required>
<br>




</div> 


<div class="w3-container w3-cell w3-mobile">


<label class="form-label" for="firstname">Gender:</label><br>
<select class="form-control" value="<?php  echo $row['2']; ?>" name="gender" id="gender">
<option><?php  echo $row['2']; ?></option>
    <option>Male</option>
    <option>Female</option>
    <option>Trans-Gender</option>
    <option>Others</option>
  </select>
  <br>



<label class="form-label" for="firstname">Mobile:</label>
<input type="tel" type="tel" id="phone" value="<?php  echo $row['4']; ?>" name="mobile" class="form-control"placeholder="Enter mobile number" required>
<br>



<label class="form-label" for="firstname">Address:</label>
<textarea type="text" class="form-control" name="address" id="address" placeholder="Enter your address" required><?php  echo $row['6']; ?></textarea>
<br>
<input type="hidden" value="<?php echo $row['Contact_ID']; ?> " name="id">
<input type="submit" name="edit" value="Edit Contact" class="btn btn-success mb-3">
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