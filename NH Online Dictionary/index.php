<?php
if(isset($_GET['search']))
{
    $valueToSearch = $_GET['term'];
    
    $query = "SELECT * FROM `wanem_dictionary` WHERE Words LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM wanem_dictionary ORDER BY RAND() LIMIT 1";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    
$connect = mysqli_connect("localhost", "root", "", "hancie");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>


<?php
if(isset($_GET['search']))
{
    $valueToSearch1 = $_GET['term'];
    
    $query1 = "SELECT * FROM `wanem_dictionary` WHERE Words ='$valueToSearch1'";
    $search_result720 = filterTable($query1);
    
}
 else {
    $query1 = "SELECT * FROM `wanem_dictionary` where Words='Dictionary'";
    $search_result720 = filterTable($query1);
}

// function to connect and execute the query
function filterTable1($query1)
{
    
  $connect = mysqli_connect("localhost", "root", "", "hancie");
    $filter_Result1 = mysqli_query($connect1, $query1);
    return $filter_Result1;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <title>NH Online Dictionary | <?php while($row = mysqli_fetch_array($search_result720)):?> <?php echo $row['Words'];?> definition and meaning<?php endwhile;?></title>
    <link rel="icon" href="Images/Logo.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="logo.ico">
    <meta name="description" content="NH Online Dictionary">
    <meta name="keywords" content="Hancie Phago, Hancie, Phago, Nitesh Hamal, NH Online Dictionary, Nepali Dictionary, English Dictionary">
    <meta name="author" content="Hancie Phago">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- jQuery UI -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<?php include "nav.php";?>
</head>

 <style>
h1 {
	font-size: 4.5em;
	color: black;
}

.z-text {
	transform: rotateX(-15deg);
	transition: transform 1s;
}

.z-layer:not(:first-child) {
	color: #689238;
}


@media (orientation:portrait){
  h1 {
	font-size: 2.5em;
	color: black;
}

}

</style>
    

<section  class="position-relative py-4 py-xl-5">

<div id="home" class="container">

<h1 id="title" class="text-center">
	<span data-z data-z-event="pointer">NH Online Dictionary</span>
</h1>
<br>
<br>

<style>

#card {

    border-radius: 1.5em;
}

</style>

<div id="card" class="w3-card-4">

<div id="card" class="w3-container bg-success">
<form  method="GET" class="container mt-3">

<div class="input-group mb-3">
<input type="text" name="term" id="term" onClick="this.select();" placeholder="Search meaning" class="form-control" required>

<input type="submit" name="search" value="Search Meaning" class="btn btn-primary"><br><br>
</div>
</div>
</div>
</form>


<br>

     
<?php 


if($row = mysqli_fetch_array($search_result)) { ?>

  <div class="w3-card-4">

  <div class="w3-container  text-light bg-success">
    <h2>Word: <?php echo $row['Words'];?></h2>
  </div>
  <br>
  <div class="w3-container text-center">
  <h3>English Meaning</h3>
  <br>
  <h4><?php echo $row['Meaning'];?></h4>
  
  
   </div>
  
  
  <br>
  <div class="w3-container text-light bg-success">
    <h5>Designed by Hancie Phago</h5>
  </div>
  
  </div>
  <br>
  
  
  
  
  
  


<?php } else  { ?>

  
<div class="w3-container text-center">
  <h2>Sorry, no results in the Dictionary.</h2>
  <p>Is this a new word that you would like to suggest is added to the NH Online Dictionary?</p>
  <a href="Suggest_Words">Click to suggest words</a>
</div>


<?php } ?>
  
<br>  

    
</div>
</section>

<script type="text/javascript">

  $(function() {
     $( "#term" ).autocomplete({
       source: 'function_dictionary.php',
     });
  });
</script>



<script src="https://bennettfeely.com/ztext/js/ztext.min.js"></script>

</body>
<?php include "footer.php";?>
</html>