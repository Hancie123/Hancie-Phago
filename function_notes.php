<?php
session_start();

include "connection.php";

if(isset($_POST['submit'])){


if(!empty($_POST['title']) && !empty($_POST['notes'])){

        $title=$_POST['title'];
        $notes=$_POST['notes'];
        $id=$_SESSION['id'];

        $sql="INSERT INTO `notes` VALUES ('','$title','$notes','$id')";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: MyNote?msg=NoteSaved");
         $msg = "Success";
          }

          else {
            echo "Errors";
          }

        
      }

      

        else {
        echo "Please fill all the fields!";
      }
       



     }
    


?>


<?php
if(isset($_POST['delete'])){

    $id=$_POST['id'];
    


$sql="DELETE FROM notes WHERE Note_ID='$id'";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Manage_Notes");
}
else {
    echo "Error";
}

}

?>


<?php
if(isset($_POST['edit'])){

    $id=$_POST['id'];
    $title=$_POST['title'];
    $edit=$_POST['notes'];


$sql="UPDATE notes SET Title='$title', Notes='$edit' WHERE Note_ID='$id'";

$query720=mysqli_query($conn, $sql);

if($query720){
    header("Location: Manage_Notes");
}
else {
    echo "Error";
}

}

?>
