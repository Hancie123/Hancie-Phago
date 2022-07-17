<?php
session_start();

include "connection.php";

if(isset($_POST['submit'])){


if(!empty($_POST['date']) && !empty($_POST['amount']) && !empty($_POST['category']) && !empty($_POST['remark'])){

        $date=$_POST['date'];
        $amount=$_POST['amount'];
        $category=$_POST['category'];
        $remark=$_POST['remark'];

        $id=$_SESSION['id'];

        $sql="INSERT INTO `daily_expenses` VALUES ('','$date','$amount','$category','$remark','$id', Now())";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: Daily_Expenses.php?msg=Expenses id saved");
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
    


$sql="DELETE FROM daily_expenses WHERE Expenses_ID='$id'";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Daily_Expenses.php");
}
else {
    echo "Error";
}

}

?>