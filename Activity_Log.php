
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include "Admin_Nav.php"; ?>
</head>
<body>


<style>
        .dt-buttons a {
            margin-left: 12px;
            font-size: 12px;
            padding: 6px;
            border: 1px solid #e4e4e4;
            background: #FFF;
            box-shadow: 0px 0px 14px 0px #ececec;
        }
        
       
</style>

<div class="container-fluid">
<div class="w3-container bg-success text-light">
  <h2>Activity Logs</h2>
</div>
<br />
<div class="table-responsive">  
<table id="example" class="table  table-striped table-borderless table-hover">
<thead class="bg-success text-light">
<tr>
                                
<th>ID</th>
<th>Page URL</th>
<th>Referrer URL</th>
<th>IP Address</th>
<th>User Agent</th>
<th>Created</th>

</tr>
</thead>

</table>
<br>
</div> 


<script type="text/javascript" src="Scripts/datatables.min.js"></script>
<script type="text/javascript" language="javascript">
    $(document).ready(function() {

        $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "Fetch/fetch_visitor_log.php",
                type: "POST"
            },
            dom: 'lBfrtip',
            buttons: [
                'excel', 'csv', 'pdf', 'copy','print'
            ],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ]
        });

    });
</script>


</div>
</div>  
<br>
</body>
</html>