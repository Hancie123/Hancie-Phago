

<!DOCTYPE html>
<html lang="en">

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
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  
<!-- jQuery UI -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<?php include "nav.php";?>
</head>

<body>


<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['term'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `wanem_dictionary` WHERE Words LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `wanem_dictionary` where Words='Computer'";
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
<form  method="post" class="container mt-3">

<div class="input-group mb-3">
<input type="text" name="term" id="term" placeholder="Search meaning" class="form-control" required>

<input type="submit" name="search" value="Search Meaning" class="btn btn-primary"><br><br>
</div>
</div>
</div>
</form>


<br>

     
<?php while($row = mysqli_fetch_array($search_result)):?>
    <div class="w3-card-4">

<div class="w3-container  text-light bg-success">
  <h2>Word: <?php echo $row['Words'];?></h2>
</div>
<br>
<div class="w3-container text-center">
<h3>English Meaning</h3>
<h3><?php echo $row['Meaning'];?></h3>


 </div>


<br>
<div class="w3-container text-light bg-success">
  <h5>Designed by Hancie Phago</h5>
</div>

</div>
<br>


<?php endwhile;?>

</div>
    </section>



<script type="text/javascript">

  $(function() {
     $( "#term" ).autocomplete({
       source: 'function_dictionary.php',
     });
  });
</script>


<script>
function body_load(){if(window.matchMedia("(orientation: landscape)").matches){document.querySelector('#title').style.transform="none";}
setTimeout(function(){document.getElementById('pop_message_outer').style.opacity="1";if(window.matchMedia("(orientation: landscape)").matches){document.querySelector('.blog-link').style.backgroundColor="rgba(128,128,128,0.6)";}},1000);}
var height_increase_var=0;function height_increase(){if(height_increase_var%2==0){document.querySelector('.inner-section-box-third').style.height="auto";document.querySelector('.more_button').innerHTML="Less";}else{document.querySelector('.inner-section-box-third').style.height="150vh";document.querySelector('.more_button').innerHTML="More";}
height_increase_var+=1;}
var call_nav_counter=0;function call_nav(){call_nav_counter+=1;if(call_nav_counter%2==0){document.querySelector('nav').style.transform="translateX(100%)";}else{document.querySelector('nav').style.transform="none";}}
</script>

<script src="https://bennettfeely.com/ztext/js/ztext.min.js"></script>

</body>
<?php include "footer.php";?>
</html>