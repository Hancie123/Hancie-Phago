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


<!-- ------------------Room Expenses Tracker Php Functions ---------------->

<?php


include "connection.php";
if(isset($_POST['room_saving'])){


if(!empty($_POST['date']) && !empty($_POST['income']) && !empty($_POST['remark'])){

        $date=$_POST['date'];
        $income=$_POST['income'];
        $remark=$_POST['remark'];

        $id=$_SESSION['id'];

        $sql="INSERT INTO `room_expenses`(`Expenses_ID`, `Date`, `Deposit`, `Withdraw`, `Remark`, `Status`, `Date2`, `User_ID`) VALUES ('','$date','$income','','$remark','Deposit',NOW(),'$id')";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: Room_Saving?msg=Saving Amount saved Successfully");
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
if(isset($_POST['room_saving_delete'])){

    $id=$_POST['id'];
    


$sql="DELETE FROM room_expenses WHERE Expenses_ID='$id'";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Room_Saving");
}
else {
    echo "Error";
}

}

?>


<?php


include "connection.php";
if(isset($_POST['room_withdraw'])){


if(!empty($_POST['date']) && !empty($_POST['withdraw']) && !empty($_POST['remark'])){

        $date=$_POST['date'];
        $withdraw=$_POST['withdraw'];
        $remark=$_POST['remark'];

        $id=$_SESSION['id'];

        $sql="INSERT INTO `room_expenses`(`Expenses_ID`, `Date`, `Deposit`, `Withdraw`, `Remark`, `Status`, `Date2`, `User_ID`) VALUES ('','$date','','$withdraw','$remark','Withdraw',NOW(),'$id')";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: Room_Withdraw?msg=Amount withdraw Successfully");
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
if(isset($_POST['room_withdraw_delete'])){

    $id=$_POST['id'];
    


$sql="DELETE FROM room_expenses WHERE Expenses_ID='$id'";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Room_Withdraw");
}
else {
    echo "Error";
}

}

?>