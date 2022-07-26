

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Images/Logo.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Suggestion Words</title>
    <link rel="icon" href="logo.ico">
    <meta name="description" content="Hancie Phago Personal Website">
    <meta name="keywords" content="Hancie Phago, Hancie, Phago, Nitesh Hamal, NH Online Dictionary">
    <meta name="author" content="Hancie Phago">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
  <?php include "nav.php";?>
</head>
<body>
<br>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2 class="text-center">Suggest Word and Meaning</h2>
</div>
<br>

<style>

#about {

    font-size: 1.6rem;
}
</style>
<!-- <div class="container">
<p id="about">NH Online Dictionary is the outcome of the users efforts and needs. If you want tosuggest us any words and meaning which 
    are not available in our dictionary database then you can suggest us words.</p>
</div> -->
<br>
<?php
        if(isset($_POST["submit"]))
        {
            include "connection.php";
         $sql="INSERT INTO messages (Name, Contact, Email, Message,LOGS) VALUES ('', '', '', '{$_POST["message"]}',NOW());";
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



<label class="h4" for="firstname">Word and Meaning:</label>
<textarea type="text" class="form-control" name="message" id="editor" placeholder="Enter word and meaning" rows="5" cols="10" required></textarea>
<br>

<input type="submit" name="submit" value="Send Message" class="btn btn-success mb-3">

    </div>
</div>
</form>




</div>

<script>
CKEDITOR.replace('editor');
</script>
</body>
<?php include "footer.php";?>
</html>