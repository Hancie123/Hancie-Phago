
<?php 

session_start();
if(!isset($_SESSION['email'])){
header("Location:Login.php");
}

?>

<?php
include "connection.php";
$id=$_SESSION['id'];
$query = "SELECT * FROM `users` WHERE User_ID='$id'";
$result = mysqli_query($conn, $query);
$options = "";

while($row = mysqli_fetch_array($result))
{
    $options = $options."<option>$row[1]</option>";
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

</head>
<body>
<br>


<?php
if(isset($_POST['view'])){
    include "connection.php";
    $id=$_POST['id'];
    
    $sql="SELECT * FROM notes WHERE Note_ID='$id'";
    
    $query=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($query)){
       ?>


<div id="my-section" class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2><?php echo $_SESSION['name'];?> Note's <span><button class="btn btn-danger text-light w3-right my-1" onclick="window.print()">Print</button></span></h2>
  
</div>
<br>
<div  class="w3-container">


<div class="w3-cell-row">

<div class="w3-container w3-cell w3-mobile">
<label for="id" class="form-label h3 text-dark">Note ID:</label>
<label class="text-dark"><h3 text-dark><?php echo $row['Note_ID']; ?></h3></label>
    </div>

    <style>
        #search720{
            width:30em;
        }
    </style>

    <div id="search720" class="w3-container w3-cell w3-mobile">
    <form action="javascript:void(0)" method="" id="searchBar" name="searchBar">
    <div class="input-group mb-3">
  <input type="text" name="search" id="search" class="form-control" placeholder="Search">
  <input name="search_button" type="button" class="btn btn-success" value="Search" onClick="findAndHighlight()">
</div>
    </form>

    </div>

    <!-- Row Close -->
    </div>

<!-- container close -->
    </div>


<hr>

<div class="w3-container w3-cell w3-mobile">


<label class="form-label h5 text-dark" for="date">Title:</label>
<label  class="form-label h5 text-dark" name="date"> <?php echo $row['1'];?></label>
<br>
<br>
<label class="form-label h5 text-dark" for="firstname">Note:</label>
<br>
<label  class="form-label  text-dark" name="receiver" id="paragraph"> <?php echo $row['2'];?></label> 
<br>
<br>

</div>


<br>
</form>
						
 



    </div>


    <style>
@media print{
    body *:not(#my-section):not(#my-section *){
        visibility: hidden;
    }
   
    span{
        visibility:hidden;
    }
}


</style>


<?php
    }
}

?>
</div>

<style>
#paragraph span{
    background-color: #00C9A7;
    color:white;
}
</style>

<script>
 
 
    function findAndHighlight() {
 
    var text = document.getElementById("search").value;
    var search = new RegExp("(\\b" + text + "\\b)", "gim");
    var e = document.getElementById("paragraph").innerHTML;
    var enew = e.replace(/(<span>|<\/span>)/igm, "");
    document.getElementById("paragraph").innerHTML = enew;
    var newe = enew.replace(search, "<span>$1</span>");
    document.getElementById("paragraph").innerHTML = newe;
 
}
</script>


<br>
</body>
</html>