<?php
session_start();

include "connection.php";

if(isset($_POST['submit'])){


if(!empty($_POST['url']) && !empty($_POST['category']) && !empty($_POST['account']) && !empty($_POST['password'])){

        $url=$_POST['url'];
        $category=$_POST['category'];
        $account=$_POST['account'];
        $password=$_POST['password'];

        $id=$_SESSION['id'];

        $sql="INSERT INTO `password` (`Password_ID`, `URL`, `Category`, `Account`, `Password`, `User_ID`) VALUES ('','$url','$category','$account','$password','$id')";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: MyPasswords?msg=Password is Saved");
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
    


$sql="DELETE FROM password WHERE Password_ID='$id'";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Manage_Passwords");
}
else {
    echo "Error";
}

}

?>


<?php
if(isset($_POST['edit'])){

    $id=$_POST['id'];
    
    $url=$_POST['url'];
    $category=$_POST['category'];
    $account=$_POST['account'];
    $password=$_POST['password'];


$sql="UPDATE password SET URL='$url', Category='$category', Account='$account', Password='$password'WHERE Password_ID='$id'";

$query720=mysqli_query($conn, $sql);

if($query720){
    header("Location: Manage_Passwords");
}
else {
    echo "Error";
}

}

?>