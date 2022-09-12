
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script type="text/javascript" src="Scripts/nepali-date-picker.min.js"></script>
<link rel="stylesheet" href="Scripts/nepali-date-picker.min.css">
<?php include "Admin_Nav.php"; ?>
<?php include "topbar.php"; ?>

</head>
<body>

<br>
<div class="w3-container">
  <h2 class="text-center">Room Expenses Details</h2>

<br/>


<form class="container" method="post">
<?php
include "connection.php";
$query = "SELECT * FROM `room_expenses`  GROUP BY Date3 ORDER BY Expenses_ID  DESC ";
$result = mysqli_query($conn, $query);
$options = "";

while($row = mysqli_fetch_array($result))
{
    $options = $options."<option>$row[7]</option>";
}

?>

<div class="input-group mb-3">
<select class="form-select" id="remark" placeholder="Enter remarks" name="remark">
<option><?php echo $options;?></option></select>
<button class="btn btn-success" type="submit" name="search1">Search</button>
<input type="button" class="btn btn-danger text-light" onclick="generate()" value="Export To PDF" />
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
</div>
</form>


<br>
<div class="table-responsive">  
<table id="hancie" class="table table-bordered table-striped">
<thead class="bg-success text-light">
<tr>
                                
<th>Expense ID</th>
<th>Date</th>
<th>Expenses</th>
<th>Remarks</th>

 </tr>
 </thead>
<tbody>
<?php
require "connection.php";
if(ISSET($_POST['search1'])){

$remark=$_POST['remark'];
include "connection.php";
$id=$_SESSION['id'];
$query=mysqli_query($conn, "SELECT * , SUM(Withdraw) as Result1 FROM room_expenses  WHERE User_ID='$id' AND Status='Withdraw' GROUP BY Date2 ORDER BY Expenses_ID") or 
die(mysqli_error());
$row=mysqli_num_rows($query);

while($fetch=mysqli_fetch_array($query)){
?>
<tr>
   
<tr>
  <td> <?php echo $fetch['Expenses_ID'];?></td>
  <td> <?php echo $fetch['Date'];?></td>
  <td> <?php echo $fetch['Withdraw'];?></td>
  <td> <?php echo $fetch['Remark'];?></td>
  

</tr>




<?php



}



}





?>
  

 
</tbody>

</table>


</div> 


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
    <!--  Datatables JS-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>   
    

   



</div>



<script>


function generate() {
    var doc = new jsPDF('p', 'pt', 'letter');
    var htmlstring = '';
    var tempVarToCheckPageHeight = 0;
    var pageHeight = 0;
    pageHeight = doc.internal.pageSize.height;
    specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector  
        '#bypassme': function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"  
            return true
        }
    };
    margins = {
        top: 150,
        bottom: 60,
        left: 40,
        right: 20,
        width: 600
    };
    var y = 20;
    doc.setLineWidth(2);
    doc.text(250, y = y + 30, "Expenses Report");
    doc.autoTable({
        html: '#hancie',
        startY: 70,
        theme: 'grid',
        columnStyles: {
            0: {
                cellWidth: 100,
            },
            1: {
                cellWidth: 150,
            },
            2: {
                cellWidth: 140,
            },
            3: {
                cellWidth: 150,
            }
            
            
        },
        styles: {
            minCellHeight: 20
        }
    })
    doc.save('Room_Expenses.pdf');
}

</script>
          

</div>


</body>
</html>