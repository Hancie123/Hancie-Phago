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

<?php
if(isset($_POST['edit'])){

    $id=$_POST['id'];

    $word=$_POST['word'];
    $meaning=$_POST['meaning'];


$sql="UPDATE `wanem_dictionary` SET `Words`='$word',`Meaning`='$meaning' WHERE Meaning_ID='$id'";

$query720=mysqli_query($conn, $sql);

if($query720){
    header("Location: Dictionary_Management.php");
}
else {
    echo "Error";
}

}

?>


<?php
if(isset($_POST['add'])){

    $id=$_POST['id'];

    $word=$_POST['word'];
    $meaning=$_POST['meaning'];


$sql="INSERT INTO `wanem_dictionary`(`Meaning_ID`, `Words`, `Meaning`, `Meaning in Nepali`, `Antonym`, `Synonym`, `Sentences`) VALUES ('','$word','$meaning','','','','')";

$query720=mysqli_query($conn, $sql);

if($query720){
    header("Location: NH_Online_Dictionary.php");
}
else {
    echo "Error";
}

}

?>