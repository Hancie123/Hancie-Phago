<?php
if(isset($_POST['submit'])){

$title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$editor=$_POST['editor'];



include "connection.php";

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$image_name=addslashes($_FILES['image']['name']);
$image_size=addslashes($_FILES['image']['tmp_name']);

move_uploaded_file($_FILES['image']['tmp_name'], "BlogImage/" .$_FILES['image']['name']);
$location="BlogImage/".$_FILES['image']['name'];


$sql="INSERT INTO `blog`(`Blog_ID`, `Title`, `Image`, `Author`, `Description`, `Date`, `Body`) VALUES ('','$title','$location','$author','$description',NOW(),'$editor')";
include "connection.php";
$query=mysqli_query($conn, $sql);

if($query){
    echo '<script type="text/javascript">';
    echo ' alert("Blog uploaded successfully!")'; 
    echo '</script>';
    header("Location:Blog_Management.php");
}

else {
    echo "Error";
}


}


?>


<?php
if(isset($_POST['delete'])){

$blog_id=$_POST['blog_id'];
$image=$_POST['image'];

include "connection.php";

$sql="DELETE FROM blog WHERE Blog_ID='$blog_id'";

$query=mysqli_query($conn, $sql);

if($query){
    
    unlink("Blog/".$image);
    echo "Deleted";
    header("Location:Delete_Blog.php");
}

else {
    echo "error";
}

}


?>