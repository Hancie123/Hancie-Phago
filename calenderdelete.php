<?php
if (isset($_POST["id"]))
{
    include ('conn.php');
    $query = "
 DELETE from events WHERE id=:id
 ";
    $statement = $connect->prepare($query);
    $statement->execute(array(
        ':id' => $_POST['id']
    ));
}

?>


<?php
if(isset($_POST['delete'])){

    $id=$_POST['id'];
    

    include ('connection.php');
$sql="DELETE from events WHERE id=$id";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Upcoming_Events.php");
}
else {
    echo "Error";
}

}

?>



<?php
if(isset($_POST['delete1'])){

    $id=$_POST['id'];
    

    include ('connection.php');
$sql="DELETE from events WHERE id=$id";

$query=mysqli_query($conn, $sql);

if($query){
    header("Location: Events_History.php");
}
else {
    echo "Error";
}

}

?>