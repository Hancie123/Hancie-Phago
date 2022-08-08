
<?php 

session_start();
if(!isset($_SESSION['email'])){
header("Location:Login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Images/Logo.ico">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hancie Phago</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<?php include "Admin_Nav.php"; ?>
</head>
<body>

<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Text Encryptor or Decryptor</h2>
</div>
<br>

<div class="container">
      
          <textarea class="w3-input w3-border rounded" placeholder="Enter Message To Encrypt or Decrypt" id="myInput" rows="10" cols="10"></textarea>
          <br>
          <button class="btn btn-success" onClick="nh720()">Encrypt or Decrypt</button>
         
          <div>
          <br>
            Output:             
            <h4  id="myMessage"></h4>
          </div>
        <br>
        
        
      
    </div>

</div>
<script>
function nh720(){
    const message = document.querySelector('#myInput').value
    if(message==""){
      alert("Empty field to Encrypt or Decrypt.");
    }
    var t = message.split('')
    var key = 'abcdefghijklmnopqrstuvwxyz'
    var word = ''
    t.forEach((letter)=>{
      idx = key.indexOf(letter.toLowerCase());
      if(idx !== -1){
        idx < key.length / 2 ?
        letter == letter.toUpperCase() ?
        word += key[idx + 13].toUpperCase() :
        word += key[idx + 13] :
        letter == letter.toUpperCase() ?
        word += key[idx - (key.length / 2)].toUpperCase() :
        word += key[idx - (key.length / 2)];
      } else {
        idx === -1 ? word += letter : '';
      }
    });
    document.querySelector('#myMessage').innerText = word
  }


  
</script>


</body>
</html>