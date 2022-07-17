
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
<?php include "Project_topbar.php"; ?>
</head>
<body>
<br>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Project Management System</h2>
</div>
<br>


<form action="function_project.php" method="post" >

<div class="w3-cell-row">


<div class="w3-container w3-cell w3-mobile">

<label class="form-label" for="firstname">Date:</label>
<input type="text" class="w3-input w3-border w3-round" name="date" id="nepali-datepicker" placeholder="Enter your date" required>
<br>

<label class="form-label" for="progress">Progress:</label><br>
<select class="w3-input w3-border w3-round" name="progress" id="progress">
    <option></option>
    <option>1</option>
    <option>5</option>
    <option>10</option>
    <option>15</option>
    <option>20</option>
    <option>25</option>
    <option>30</option>
    <option>35</option>
    <option>40</option>
    <option>45</option>
    <option>50</option>
    <option>55</option>
    <option>60</option>
    <option>65</option>
    <option>70</option>
    <option>75</option>
    <option>80</option>
    <option>85</option>
    <option>90</option>
    <option>95</option>
    <option>100</option>
  </select>
  <br>


<label class="form-label" for="category">Category:</label><br>
<select class="w3-input w3-border w3-round" name="category" id="category">
    <option></option>
    <option>Web Application</option>
    <option>Desktop Application</option>
    <option>Android Application</option>
    <option>Website</option>
    
  </select>
  <br>


</div> 


<div class="w3-container w3-cell w3-mobile">


<label class="form-label" for="title">Project title:</label>
<input type="text" class="w3-input w3-border w3-round" name="project" id="project" placeholder="Enter your project" required >
<br>




<label class="form-label" for="status">Project Status:</label><br>
<select class="w3-input w3-border w3-round" name="status" id="status">
    <option></option>
    <option>Completed</option>
    <option>Pending</option>
    <option>Not Completed</option>
    <option>Active</option>
  </select>
  <br>

  
  </div>


  

</div>


<style>
#submit{
    display:block;
    margin-left:auto;
    margin-right:auto;
}
</style>
<input id="submit" type="submit" name="submit" value="Save Project Data" class="btn btn-success">
<br>


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
<!-- Daily Project Table -->

<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h3>Project Data</h3>
</div>
<br>
<div class="table-responsive">
<table id="hancie"class="table table-hover table-striped">
<thead class="bg-success text-light">
<tr>
<th>Date</th>
<th>Project</th>
<th>Category</th>
<th>Status</th>
<th>Progress</th>
<th>Action</th>


</tr>
</thead>
<?php
include "connection.php";

$id=$_SESSION['id'];

$sql="SELECT * FROM projects  WHERE User_ID='$id'";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['date']?></td>
  <td> <?php echo $row['title']?></td>
  <td> <?php echo $row['category']?></td>
  <td> <?php echo $row['status']?></td>

  <td> 

  <div class="progress">
    <div class="progress-bar progress-bar-success bg-success text-light progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['progress'];?>%">
    <?php echo $row['progress'];?>%
  </div>
  
  </div>

</td>


<th>
<div class="input-group">
<form action="Edit_Project.php" method="post">
<input type="hidden" value="<?php echo $row['Project_ID']; ?> " name="id">
<button name="edit" class="btn btn-success"><i class="bi bi-pencil-square"></i>
</form>

<form action="View_Project.php" method="post">
<input type="hidden" value="<?php echo $row['Project_ID']; ?> " name="id">
<button name="view" class="btn btn-danger"><i class="bi bi-eye-fill"></i>
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
          

</body>
</html>