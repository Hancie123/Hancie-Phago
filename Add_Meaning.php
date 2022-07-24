
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
          <h2>Add Word Meaning</h2>
        </div>
        
        <form method="post" action="function_dictionary.php" class="w3-container">
        <br>
        <h3>Word</h3>
        <input class="w3-input w3-border h4" name="word" type="text">
        
        <h3>Meaning</h3>
        <textarea class="w3-input h4"  name="meaning" rows="12" cols="40"></textarea>
        <br>
        <input type="hidden" value="<?php echo $row['Meaning_ID']; ?> " name="id">
        <input type="submit" name="add" value="Add Meaning" class="btn btn-success">

        <a href="NH_Online_Dictionary.php" class="btn btn-success">Back</a>
        <br>
        <br>
        </form>
        
        </div>
         <br>         
       


</body>
</html>