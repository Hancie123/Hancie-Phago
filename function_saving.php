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

        $sql="INSERT INTO `saving` VALUES ('','$date','$amount','', '$category','$remark','Deposit','$id')";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: Saving?msg=Saving Amount saved Successfully");
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
    header("Location: Saving");
}
else {
    echo "Error";
}

}

?>

<?php
if(isset($_POST['delete1'])){

    $id=$_POST['id'];
    


$sql="DELETE FROM saving WHERE Saving_ID='$id'";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Withdraw");
}
else {
    echo "Error";
}

}

?>


<?php


include "connection.php";

if(isset($_POST['withdraw'])){


        $date=$_POST['date'];
        $amount=$_POST['amount'];
        $withdraw=$_POST['withdraw1'];
        $remark=$_POST['remark'];

        $id=$_SESSION['id'];

        $sql="INSERT INTO `saving` VALUES ('','$date','','$amount','$withdraw','$remark','Withdraw','$id')";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: Withdraw?msg=Amount Withdraw Successfully");
         $msg = "Success";
          }

          else {
            echo "Errors";
          }

        
      }

      
?>


