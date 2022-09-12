<!-- ------------------Room Expenses Tracker Php Functions ---------------->

<?php

session_start();
include "connection.php";
if(isset($_POST['room_saving'])){


if(!empty($_POST['date']) && !empty($_POST['income']) && !empty($_POST['remark'])){

        $date=$_POST['date'];
        $income=$_POST['income'];
        $remark=$_POST['remark'];
        $date3=$_POST['date3'];

        $id=$_SESSION['id'];

        $sql="INSERT INTO `room_expenses`(`Expenses_ID`, `Date`, `Deposit`, `Withdraw`, `Remark`, `Status`, `Date2`, `Date3`, `User_ID`) VALUES ('','$date','$income','','$remark','Deposit',NOW(), '$date3', '$id')";

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
        $date3=$_POST['date3'];
        $id=$_SESSION['id'];

        $sql="INSERT INTO `room_expenses`(`Expenses_ID`, `Date`, `Deposit`, `Withdraw`, `Remark`, `Status`, `Date2`, `Date3`, `User_ID`) VALUES ('','$date','','$withdraw','$remark','Withdraw',NOW(),'$date3', '$id')";

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