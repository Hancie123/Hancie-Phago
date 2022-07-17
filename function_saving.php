<?php
session_start();

include "connection.php";

if(isset($_POST['submit'])){


if(!empty($_POST['date']) && !empty($_POST['amount']) && !empty($_POST['income']) && !empty($_POST['remark'])){

        $date=$_POST['date'];
        $amount=$_POST['amount'];
        $category=$_POST['income'];
        $remark=$_POST['remark'];

        $id=$_SESSION['id'];

        $sql="INSERT INTO `saving` VALUES ('','$date','$amount','$category','$remark','$id')";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: Saving.php?msg=Saving Amount saved");
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
    


$sql="DELETE FROM saving WHERE Saving_ID='$id'";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Saving.php");
}
else {
    echo "Error";
}

}

?>