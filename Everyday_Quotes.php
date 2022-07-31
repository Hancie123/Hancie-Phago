
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script type="text/javascript" src="Scripts/nepali-date-picker.min.js"></script>
<link rel="stylesheet" href="Scripts/nepali-date-picker.min.css">
<?php include "Admin_Nav.php"; ?>

</head>
<body>
<br>

<style>

.container {
  width: 100%;
  background-color: #f43543;
  padding: 50px 40px;
  box-shadow: 0 20px 65px rgba(87, 11, 16, 0.5);
  position: relative;
  border-radius: 8px;
  text-align: center;
}

 
.container p {
  color: #fdd8d8;
  line-height: 2;
  font-size: 18px;
}
.container h3 {
  color: #ffffff;
  margin: 20px 0 60px 0;
  font-weight: 600;
  text-transform: capitalize;
}
.container button {
  background-color: #ffffff;
  border: none;
  padding: 15px 45px;
  border-radius: 5px;
  font-size: 18px;
  font-weight: 600;
  color: #f43543;
  cursor: pointer;
}

</style>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Daily Quotes</h2>
</div>
<br>

<div class="wrapper">
      <div class="container bg-danger">
        <p id="quote">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas,
          magni.
        </p>
        <h3 id="author">Lorem, ipsum.</h3>
        <button id="btn">Get Quote</button>
        <br>
      </div>
    </div>
    <br>
   <script>
    let quote = document.getElementById("quote");
let author = document.getElementById("author");
let btn = document.getElementById("btn");

const url = "https://api.quotable.io/random";

let getQuote = () => {
  fetch(url)
    .then((data) => data.json())
    .then((item) => {
      quote.innerText = item.content;
      author.innerText = item.author;
    });
};

window.addEventListener("load", getQuote);
btn.addEventListener("click", getQuote);

</script>

          

</div>
</body>
</html>