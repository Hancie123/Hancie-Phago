
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
<?php include "Admin_Nav.php"; ?>
</head>
<body>

</style>

<div id="container" class="w3-card-4 ">

<div class="w3-container bg-success text-light">
  <h2>Backup Database</h2>
</div>
<br>
<form class="w3-container" method="POST" action="backup.php">
<div class="form-group row">
<label for="server" class="col-sm-3 col-form-label">Server</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="server" placeholder="sql305.epizy.com" value="sql305.epizy.com"required readonly></br>
</div>
</div>
<div class="form-group row">
<label for="username" class="col-sm-3 col-form-label">Username</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="username" placeholder="epiz_32019522" value="epiz_32019522"required readonly></br>
</div>
</div>
<div class="form-group row">
<label for="password" class="col-sm-3 col-form-label">Password</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="password" placeholder="SV8RhBMBuDJxb" value="SV8RhBMBuDJxb"readonly></br>
</div>
</div>
<div class="form-group row">
<label for="dbname" class="col-sm-3 col-form-label">Database</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="dbname" placeholder="epiz_32019522_hancie" value="epiz_32019522_hancie"required readonly></br>
</div>
</div>
<button type="submit" class="btn btn-primary mb-2" name="backup">Backup</button>
</form>
</div>
</div>

</div>
          

</body>
</html>