
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
<?php include "Admin_Nav.php"; ?>
</head>
<body>

<div class="w3-card-4">
<div class="w3-container">
    <br>
  <h2 class="text-center text-success shadow p-2" >Application</h2>
  </div>
  <div class="w3-container">
  <div class="w3-cell-row">


  <div class="w3-container w3-cell w3-mobile">
<div class="w3-card-4 pt-4">
  <div class="w3-cell-row pb-3">
  <div class="w3-container w3-cell w3-mobile">
    <img src="Images/Recipe.png" alt="Alps">
</div>
<div class="w3-container">
      <h2>Food Recipes</h2>
    </div>   
  </div>
  <footer class="w3-container bg-success">
      <a href="Foods_Recipe" class="text-center text-light "><h5>Open</h5></a>
    </footer>
</div>
</div>
<br>

<div class="w3-container w3-cell w3-mobile">
<div class="w3-card-4 pt-4">
  <div class="w3-cell-row pb-3">
  <div class="w3-container w3-cell w3-mobile">
    <img src="Images/Quotes.png" alt="Alps">
</div>
<div class="w3-container">
      <h2>Daily Quotes</h2>
    </div>   
  </div>
  <footer class="w3-container bg-success">
      <a href="Everyday_Quotes" class="text-center text-light "><h5>Open</h5></a>
    </footer>
</div>
</div>
<br>

<div class="w3-container w3-cell w3-mobile">
<div class="w3-card-4 pt-4">
  <div class="w3-cell-row pb-3">
  <div class="w3-container w3-cell w3-mobile">
    <img src="Images/Cocktail.png" alt="Alps">
</div>
<div class="w3-container">
      <h2>Cocktail Recipes</h2>
    </div>   
  </div>
  <footer class="w3-container bg-success">
      <a href="Cocktail_Recipe" class="text-center text-light "><h5>Open</h5></a>
    </footer>
</div>
</div>
<br>

<div class="w3-container w3-cell w3-mobile">
<div class="w3-card-4 pt-4">
  <div class="w3-cell-row pb-3">
  <div class="w3-container w3-cell w3-mobile">
    <img src="Images/Movies.png" alt="Alps">
</div>
<div class="w3-container">
      <h2>Movies Review</h2>
    </div>   
  </div>
  <footer class="w3-container bg-success">
      <a href="Movies_Review" class="text-center text-light "><h5>Open</h5></a>
    </footer>
</div>
</div>
<br>


<!-- First Row Close -->
</div> 
</div>
<br>

<!-- Second Row Open -->
<div class="w3-cell-row">


  <div class="w3-container w3-cell w3-mobile " >
<div class="w3-card-4 pt-4 w3-margin-left" style="max-width:20rem">
  <div class="w3-cell-row pb-3">
  <div class="w3-container w3-cell w3-mobile">
    <img src="Images/Encryption.png" alt="Alps">
</div>
<div class="w3-container">
      <h2>Encrypt Decrypt</h2>
    </div>   
  </div>
  <footer class="w3-container bg-success">
      <a href="Encrypter_Decrypter" class="text-center text-light "><h5>Open</h5></a>
    </footer>
</div>
</div>

</div>

<br>



</div>
<br>












    
<br>





</body>
</html>