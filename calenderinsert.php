<?php
include "conn.php";
session_start();

if (isset($_POST["title"]))
{
    
    $query = "
 INSERT INTO events VALUES ('', :title, :start_event, :end_event, :id)";
    $statement = $connect->prepare($query);
    $statement->execute(array(
        ':title' => $_POST['title'],
        ':start_event' => $_POST['start'],
        ':end_event' => $_POST['end'],
        ':id'=>$_SESSION['id']
    ));
}

?>
