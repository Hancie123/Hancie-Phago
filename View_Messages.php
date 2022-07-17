
<?php 

session_start();
include "connection.php";
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<?php include "Admin_Nav.php"; ?>
</head>
<body>

<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Message Inbox</h2>
</div>
<br>
	<?php 
				include "connection.php";

				
				$sql="SELECT * FROM messages  WHERE ID=$_POST[id]";
				$result=$conn->query($sql);
				if($result->num_rows>0)
				{
					if($row=$result->fetch_assoc())
					{
						echo "<h4> Name: ".$row['Name']."</br><hr> Email: <small>".$row['Email']."</small></h4>";
						echo "<b> Message: ".$row['Message']."</b></br>";
                        echo"<b>Contact: ".$row['Contact']."</b>";
						echo"<p class='text-info pull-right'>Message Received at ".$row['Logs']."</p>";
						
					}
				}
			?>










</div>
          

</body>
</html>