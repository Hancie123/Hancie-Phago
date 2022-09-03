
<?php 

session_start();
if(!isset($_SESSION['email'])){
header("Location:Login.php");
}

?>



<?php

$id=$_SESSION['id'];
include "connection.php";
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


<div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Post your blog
                        <a href="Delete_Blog.php" class="add-more-form float-end btn btn-primary">Delete Blog</a>
                            
                        </h4>
                    </div>


                    <div class="card-body " >

                    <div class="container-fluid bg-success m-2 p-2 text-light" style="border-radius:4px">

<form action="function_blog.php" method="post" enctype="multipart/form-data" >

<div class="mb-3 mt-3">
    <label for="title" class="form-label">Title:</label>
    <input type="text" class="form-control" id="title" placeholder="Enter blog title" name="title" required>
  </div>

  <div class="mb-3 mt-3">
<input type="file" id="image" name="image" class="form-control">
</div>

<div class="mb-3 mt-3">
    <label for="title" class="form-label">Description:</label>
    <textarea  class="form-control" id="title" placeholder="Enter blog description" name="description"></textarea>
  </div>


<div class="mb-3 mt-3">
<label for="name">Author</label>
<select class="form-select" id="author" placeholder="Enter Author Name" name="author">
<option><?php echo $options;?></option></select> 
</div>

<div class="mb-3 mt-3">
<div id="toolbar-container"></div>

    <!-- This container will become the editable. -->
    <textarea id="editor" name="editor">
        <p>Hello <?php echo $_SESSION['name']?> ! Please post some interesting blogs from here.</p>
</textarea>
  </div>

<input type="submit" name="submit" value="Publish Blog" class="btn btn-primary">

</form>

</div>




<script>
CKEDITOR.replace('editor');
</script>





                    </div>
                </div>
            </div>
        </div>
    </div>




          
<br>
</body>
</html>