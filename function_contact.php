<?php
session_start();

include "connection.php";

if(isset($_POST['submit'])){


if(!empty($_POST['name']) && !empty($_POST['dob']) && !empty($_POST['email']) && !empty($_POST['mobile'])){

        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $address=$_POST['address'];

        $id=$_SESSION['id'];

        $sql="INSERT INTO `contact` VALUES ('','$name','$gender','$dob','$mobile','$email','$address','$id')";

        $query=mysqli_query($conn, $sql);


             if($query){

              
        header("Location: Contact_Management?msg=Contact is Saved");
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
    


$sql="DELETE FROM contact WHERE Contact_ID='$id'";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Search_Contacts");
}
else {
    echo "Error";
}

}

?>


<?php
if(isset($_POST['edit'])){

    $id=$_POST['id'];
    
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $address=$_POST['address'];


$sql="UPDATE `contact` SET Name='$name',Gender='$gender',DOB='$dob',Mobile='$mobile',Email='$email',Address='$address'  WHERE Contact_ID='$id'";

$query720=mysqli_query($conn, $sql);

if($query720){
    header("Location: Manage_Contacts?contactedited");
}
else {
    echo "Error";
}

}

?>