<?php
require_once "connection.php";
if (isset($_GET['term'])) {
     
   $query = "SELECT * FROM wanem_dictionary WHERE Words 
LIKE '{$_GET['term']}%' LIMIT 15";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      $res[] = $user['Words'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>