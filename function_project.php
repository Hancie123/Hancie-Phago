<?php
session_start();

include "connection.php";

if(isset($_POST['submit'])){


        $date=$_POST['date'];
        $progress=$_POST['progress'];
        $category=$_POST['category'];
        $project=$_POST['project'];
        $status=$_POST['status'];


        $id=$_SESSION['id'];

        $sql="INSERT INTO `projects` VALUES ('','$date','$project','$category','$progress','$status','$id')";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: Project_Management.php?msg=Project data saved");
         $msg = "Success";
          }

          else {
            echo "Errors";
          }

        
      }

?>


<?php
if(isset($_POST['delete'])){

    $id=$_POST['id'];
    


$sql="DELETE FROM projects WHERE Project_ID='$id'";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Project_Management.php");
}
else {
    echo "Error";
}

}

?>



<?php
if(isset($_POST['edit'])){

    $id=$_POST['id'];

    $date=$_POST['date'];
        $progress=$_POST['progress'];
        $category=$_POST['category'];
        $project=$_POST['project'];
        $status=$_POST['status'];


$sql="UPDATE `projects` SET `date`='$date',`title`='$project',`category`='$category',`progress`='$progress',`status`='$status' WHERE Project_ID='$id'";

$query720=mysqli_query($conn, $sql);

if($query720){
    header("Location: Project_Management.php");
}
else {
    echo "Error";
}

}

?>
