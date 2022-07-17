<?php
include "conn.php";
session_start();
$data = array();
$id=$_SESSION['id'];


$query = "SELECT * FROM events WHERE User_ID=$id ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach ($result as $row)
{
    $data[] = array(
        'id' => $row["id"],
        'title' => $row["title"],
        'start' => $row["start_event"],
        'end' => $row["end_event"]
    );
}

echo json_encode($data);

?>
