<?php
session_start();

include "connection.php";

if(isset($_POST['submit'])){


    if ($_POST["password"] === $_POST["confirm_password"]) {


      if(!empty($_POST['password']) && !empty($_POST['confirm_password'])){

        $password=$_POST['password'];
        $id=$_SESSION['id'];

        $sql="UPDATE users SET Password='" . $_POST["password"] . "' WHERE User_ID='" . $_SESSION["id"] . "'";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: User_Password?msg=Passwordischangedsuccessfully");
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
     else {

        echo "Password does not match";
     }




}

?>

