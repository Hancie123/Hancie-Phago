
<?php 

session_start();
if(!isset($_SESSION['email'])){
header("Location:Login.php");
}

?>



<?php 
    require_once('connection.php');

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }

    $num_per_page = 05;
    $start_from = ($page-1)*05;
    
    $query = "select * from blog limit $start_from,$num_per_page";
    $result = mysqli_query($conn,$query);

?>



<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Logo.ico">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hancie Phago</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
<?php include "Admin_Nav.php"; ?>
</head>
<body>
<br>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>




<div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Delete Blog Posts
                        <a href="Blog_Management.php" class="add-more-form float-end btn btn-primary">Back</a>
                        </h4>
                    </div>


                   


                    <div class="card-body " >
<table class="table table=striped table-hover">
                       <tr class="bg-success text-light">
                    <th>Blog ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
</tr>


<?php
include "connection.php";


while($row=mysqli_fetch_array($result)){

?>
<tr>
<td><?php echo $row['Blog_ID'];?></td>
<td><?php echo $row['Title'];?></td>
<td>
    <img src="<?php echo $row['Image']; ?>" width="100px" height="100px" alt="image" >
</td>
<td><?php echo $row['Author'];?></td>
<td><?php echo $row['Description'];?></td>
<td><?php echo $row['Date'];?></td>

<td>
    <form  action="function_blog.php" method="post">
    <input type="hidden" value="<?php echo $row['Blog_ID'];?>"   name="blog_id" class="btn btn-primary" value="Delete">
    <input type="hidden" value="<?php echo $row['Image']; ?>" name="image" class="btn btn-primary" value="Delete">
    <input type="submit" name="delete" class="btn btn-primary" value="Delete">

</form>

</tr>


<?php
}



?>






                                   
</table>

<?php

$pr_query = "select * from blog ";
    $pr_result = mysqli_query($conn,$pr_query);
    $total_record = mysqli_num_rows($pr_result );
                
    $total_page = ceil($total_record/$num_per_page);

    if($page>1)
    {
    echo "<a href='Delete_Blog.php?page=".($page-1)."' class='btn btn-danger'
>Previous</a>";
    }

                
    for($i=1;$i<$total_page;$i++)
    {
    echo "<a href='Delete_Blog.php?page=".$i."' class='btn btn-primary'>$i</a>";
    }

    if($i>$page)
    {
    echo "<a href='Delete_Blog.php?page=".($page+1)."' class='btn btn-danger'
>Next</a>";
    }

    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>


</html>



