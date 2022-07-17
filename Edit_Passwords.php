
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
<?php include "Admin_Nav.php"; ?>
</head>
<body>

<?php

if(isset($_POST['edit'])){
    include "connection.php";
    $id=$_POST['id'];
    
    $sql="SELECT * FROM password WHERE Password_ID='$id'";
    
    $query=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($query)){
        ?>
        <div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Update Passwords</h2>
</div>

<form method="post" action="function_manage_password.php" class="w3-container">
<br>
<label for="url" class="form-label">URL:</label>
<input type="text" class="form-control" value="<?php  echo $row['1']; ?>" id="email" placeholder="Enter URL" name="url">

<br>
<label for="category" class="form-label">Category:</label>
<input type="text" class="form-control"  value="<?php  echo $row['2']; ?>"id="email" placeholder="Category" name="category">


<br>
<label for="account" class="form-label">Account:</label>
<textarea class="form-control" rows="3"  id="comment" name="account"><?php  echo $row['3']; ?></textarea>

<br>
<label for="password" class="form-label">Password:</label>
<textarea class="form-control" rows="3"  id="comment" name="password"><?php  echo $row['4']; ?></textarea>

<br>
<input type="hidden" value="<?php echo $row['Password_ID']; ?> " name="id">
<input type="submit" name="edit" value="Update Password" class="btn btn-success">

<a  href="Manage_Passwords.php" value="Manage Notes" class="btn btn-success">Back</a>
<br>
<br>
</form>

</div>
<?php
    }

}
?>


</body>
</html>