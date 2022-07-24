

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Images/Logo.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NH Online Dictionary</title>
    <link rel="icon" href="logo.ico">
    <meta name="description" content="Hancie Phago Personal Website">
    <meta name="keywords" content="Hancie Phago, Hancie, Phago, Nitesh Hamal, Personal Website">
    <meta name="author" content="Hancie Phago">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <?php include "nav.php";?>
</head>
<body>
<br>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2 class="text-center">Suggest Word and Meaning</h2>
</div>
<br>
<?php
        if(isset($_POST["submit"]))
        {
            include "connection.php";
         $sql="INSERT INTO messages (Name, Contact, Email, Message,LOGS) VALUES ('{$_POST["name"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["message"]}',NOW());";
            if($conn->query($sql))
    {
        echo '
        <div class="alert alert-success">
            <strong>Success!</strong> Your message has been Successfully sent!
        </div>
        
        
        ';
    }
        }
    ?>

<form action="Suggest_Words.php" method="post" >
<div class="w3-cell-row">


<div class="w3-container w3-cell w3-mobile">


<label class="form-label" for="firstname">Name:</label>
<input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required >
<br>




<label class="form-label" for="phone">Phone No:</label>
<input type="text" class="form-control" name="phone"  placeholder="Enter your phone number" required>
<br>







</div> 


<div class="w3-container w3-cell w3-mobile">




<label class="form-label" for="firstname">Email:</label>
<input type="tel" type="email" id="email" name="email" class="form-control"placeholder="Enter your email" required>
<br>



<label class="form-label" for="firstname">Word and Meaning:</label>
<textarea type="text" class="form-control" name="message" id="message" placeholder="Enter word and meaning" rows="5" cols="10" required></textarea>
<br>

<input type="submit" name="submit" value="Send Message" class="btn btn-success mb-3">

</div>

</form>




</div>


</body>
<?php include "footer.php";?>
</html>