
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
<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- jQuery UI -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js">
</script>
<?php include "Admin_Nav.php"; ?>
<?php include "Dictionary_topbar.php"; ?>
</head>
<body>
<br>
<div class="w3-card-4">
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
    $query = "SELECT * FROM `wanem_dictionary` where Words='A'";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("sql305.epizy.com", "epiz_32019522", "SV8RhBMBuDJxb", "epiz_32019522_hancie");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>



<div class="w3-card-4 ">

<div class="w3-container bg-success">
<form  method="post" class="container mt-3">

<div class="input-group mb-3">
<input type="text" name="term" id="term" placeholder="Search meaning" class="form-control">

<input type="submit" name="search" value="Search Meaning" class="btn btn-primary"><br><br>
</div>
</div>
</div>
</form>


<br>
<br>

     
<?php while($row = mysqli_fetch_array($search_result)):?>
    <div class="w3-card-4 mb-4">

<div class="w3-container  text-light bg-success">
  <h2>Word: <?php echo $row['Words'];?></h2>
</div>
<br>

<div class="w3-container text-center">
<h3>English Meaning</h3>
<br>
<h3><?php echo $row['Meaning'];?></h3>
</div>

<br>
<br>
<form action="Edit_Meaning.php" method="post" class="mx-2">
<input type="hidden" value="<?php echo $row['Meaning_ID']; ?> " name="id">
<button name="edit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Update Meaning</button>
</form>
<br>
</div>



<?php endwhile;?>

</div>
<br>





<script type="text/javascript">
  $(function() {
     $( "#term" ).autocomplete({
       source: 'function_dictionary.php',
     });
  });
</script>



</body>
</html>