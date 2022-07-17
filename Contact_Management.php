
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
</head>
<body>

<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Contact Management System</h2>
</div>
<br>


<form action="function_contact.php" method="post" >
<div class="w3-cell-row">


<div class="w3-container w3-cell w3-mobile">


<label class="form-label" for="firstname">Name:</label>
<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required >
<br>




<label class="form-label" for="firstname">Date of birth:</label>
<input type="text" class="form-control" name="dob" id="nepali-datepicker" placeholder="Enter your date of birth" required>
<br>




<label class="form-label" for="firstname">Email:</label>
<input type="email" class="form-control" name="email" id="email" placeholder="Enter email address" required>
<br>




</div> 


<div class="w3-container w3-cell w3-mobile">


<label class="form-label" for="firstname">Gender:</label><br>
<select class="form-control" name="gender" id="gender">
    <option>Male</option>
    <option>Female</option>
    <option>Trans-Gender</option>
    <option>Others</option>
  </select>
  <br>



<label class="form-label" for="firstname">Mobile:</label>
<input type="tel" type="tel" id="phone" name="mobile" class="form-control"placeholder="Enter mobile number" required>
<br>



<label class="form-label" for="firstname">Address:</label>
<textarea type="text" class="form-control" name="address" id="address" placeholder="Enter your address" required></textarea>
<br>

<input type="submit" name="submit" value="Save" class="btn btn-success mb-3">
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
          

</body>
</html>