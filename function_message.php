<?php
if(isset($_POST['delete'])){

    $id=$_POST['id'];
    
include "connection.php";

$sql="DELETE FROM messages WHERE ID='$id'";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Message_Inbox");
}
else {
    echo "Error";
}

}

?>