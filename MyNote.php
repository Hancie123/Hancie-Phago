
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

<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Manage Notes</h2>
</div>

<form method="post" action="function_notes.php" class="w3-container">

<label>Title</label>
<input class="w3-input" name="title" type="text">

<label>Notes</label>
<textarea class="w3-input"  name="notes" id="editor"  rows="18" cols="50"></textarea>
<br>
<input type="submit" name="submit" value="Save" class="btn btn-success">

<a   href="Manage_Notes.php" value="Manage Notes" class="btn btn-success">Manage Notes</a>
<br>
<br>
</form>

</div>
          
<script>
CKEDITOR.replace('editor');
</script>
</body>
</html>