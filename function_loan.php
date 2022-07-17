<?php
session_start();

include "connection.php";

if(isset($_POST['submit'])){


if(!empty($_POST['date']) && !empty($_POST['receiver']) && !empty($_POST['giver']) && !empty($_POST['status'])){

        $date=$_POST['date'];
        $receiver=$_POST['receiver'];
        $giver=$_POST['giver'];
        $amount=$_POST['amount'];
        $status=$_POST['status'];
        $remark=$_POST['remark'];

        $id=$_SESSION['id'];

        $sql="INSERT INTO `loan` VALUES ('','$date','$giver','$receiver','$amount','$remark','$status','$id',NOW())";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: Loan_Borrow?msg=Data is Saved");
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
    


$sql="DELETE FROM loan WHERE Loan_ID='$id'";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Loan_Borrow");
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
    $receiver=$_POST['receiver'];
    $giver=$_POST['giver'];
    $amount=$_POST['amount'];
    $status=$_POST['status'];
    $remark=$_POST['remark'];


$sql="UPDATE `loan` SET Date='$date',Giver_Name='$giver',Receiver_Name='$receiver',Amount='$amount',remark='$remark',Status='$status' WHERE Loan_ID='$id'";

$query720=mysqli_query($conn, $sql);

if($query720){
    
    header("Location: Loan_Borrow?Loanedited");
}
else {
    echo "Error";
}

}

?>