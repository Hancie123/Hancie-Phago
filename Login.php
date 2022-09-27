<?php 

if(isset($_POST['submit'])){

$email=$_POST['email'];
$password=$_POST['password'];


$sql="SELECT * FROM users WHERE Email='$email' && Password='$password'";

include "connection.php";

$query=mysqli_query($conn, $sql);
  $num_rows=mysqli_num_rows($query);

if($num_rows>0){
    session_start();

$row=mysqli_fetch_array($query);
  
$_SESSION['email']=$email;
$_SESSION['id']=$row['User_ID'];
$_SESSION['name'] =$row['Name'];
$_SESSION['dob'] =$row['DOB'];
$_SESSION['mobile'] =$row['Mobile'];
$_SESSION['email'] =$row['Email'];
$_SESSION['address'] =$row['Address'];
$_SESSION['password'] =$row['Password'];

$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (30*60 * 60);


header("Location: Home");



}

else{
    echo '<script type="text/javascript"> alert("Incorrect Username and Password") </script>';
  }

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="Images/Logo.ico">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hancie Phago</title>
    <meta name="description" content="Hancie Phago Personal Website">
    <meta name="keywords" content="Hancie Phago, Hancie, Phago, Nitesh Hamal, Personal Website">
    <meta name="author" content="Hancie Phago">
    <link rel="stylesheet" href="CSS/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body oncontextmenu="return false">
   <?php include "Nav.php"?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: 'Poppins', sans-serif;
}

header {
    z-index: 20;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #25274D;
    height: 100px;
    width: 100%;
    position: fixed;
    border-radius: 0 0 20% 10%;
    box-shadow: 0px 1px 2px #E6E7E8;
    transition: all 0.4s ease-in-out;
}

header .logo {
    height: 60px;
    width: 60px;
    margin-left: 20px;
}

header .logo img {
    width: 100%;
    height: 100%;
    border-radius: 100%;
}

header .menu {
    margin-right: 30px;
}

header .menu ul li {
    display: inline-block;
   
}

header .menu ul li a {
    color: #E6E7E8;
    padding: 10px 20px;
    text-decoration: none;
}

header .menu ul li a:hover {
    background-color: #697184;
}

header #bar-animation {
    position: relative;
    height: 20px;
    width: 20px;
    margin-right: 20px;
    cursor: pointer;
    display: none;
}

header #bar-animation span {
    position: absolute;
    height: 2px;
    width: 100%;
    border-radius: 10px;
    background-color: #E6E7E8;
}

header #bar-animation span::before {
    content: '';
    position: absolute;
    height: 2px;
    width: 70%;
    right: 0;
    border-radius: 10px;
    background-color: #E6E7E8;
    margin-top: 50%;
    transform: translateY(-50%);
}

header #bar-animation span::after {
    content: '';
    position: absolute;
    height: 2px;
    width: 100%;
    border-radius: 10px;
    background-color: #E6E7E8;
    margin-top: 100%;
}

#bar-animation.active-bar span::before {
    transition: 1s;
    opacity: 0;
}

#bar-animation.active-bar span {
    transition: 1s;
    transform: translateY(13px) rotate(45deg);
}

#bar-animation.active-bar span::after {
    transition: 1s;
    transform: translateY(-20px) rotate(-90deg);
}

.menu-wrapper.fullMenushow {
    transition: 0.6s;
    left: 0;
}

#home {
    margin-top: 1.3rem;
}






.shrinkHeader {
    height: 80px;
    border-radius: 0;
}

.arrow-top {
    color: red;
}

.fa-arrow-up {
    position: fixed;
    bottom: 2%;
    right: 2%;
    background-color: #E6E7E8;
    padding: 15px;
    border-radius: 100%;
    cursor: pointer;
}




@media(max-width:726px) {
    header #bar-animation {
        display: block;
    }

    .menu-wrapper {
        position: absolute;
        width: 100%;
        height: 100vh;
        top: 0;
        left: -150%;
        background-image: linear-gradient(rgba(25, 10, 109, 0.5), rgba(140, 90, 255, 0.5)), url(profile.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    header .menu {
        position: absolute;
        width: 100%;
        margin-top: 100px;
        left: 50%;
        text-align: center;
        transform: translateX(-50%);
    }

    header .menu ul li {
        position: relative;
        width: 100%;
        padding: 10px 20px;
    }

    header .menu ul li a {
        width: 100%;
    }

 
    
}


@media(max-width:300px) {
    .box-1 {
        height: 250px;
    }
}

@keyframes comeIn {
    0% {
        left: -150%;
    }

    100% {
        left: 0;
    }
}



html{
    scroll-behavior: smooth;
}

/* custom scroll bar */
::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: rgb(84, 83, 83);
}

::-webkit-scrollbar-thumb:hover {
    background: #555;
}





</style>

    <section  class="position-relative py-4 py-xl-5">
        <div id="home" class="container">
      <form method="post">
        <label for="username">Email:</label>
        <input type="text" id="username" class="hancie" name="email" placeholder="Email here..." />
        <label for="password">Password:</label>



<div class="input-group">
<input type="password" class="hancie" id="password" name="password" placeholder="Password here..." />
    <span id="span"><i class="fa fa-eye pb-2 mb-2" id="eye" onclick="toggle()"></i></span>
  </div>
        
<input type="submit" id="submit" name="submit" value="Login">
      </form>
      <div class="ear-l"></div>
      <div class="ear-r"></div>
      <div class="panda-face">
        <div class="blush-l"></div>
        <div class="blush-r"></div>
        <div class="eye-l">
          <div class="eyeball-l"></div>
        </div>
        <div class="eye-r">
          <div class="eyeball-r"></div>
        </div>
        <div class="nose"></div>
        <div class="mouth"></div>
      </div>
      <div class="hand-l"></div>
      <div class="hand-r"></div>
      <div class="paw-l"></div>
      <div class="paw-r"></div>
      
    </div>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    </section>

    <!-- ---------------Login Password Show and Hide Icon Script --------------->
    <script>
var state= false;
function toggle(){
    if(state){
	document.getElementById("password").setAttribute("type","password");
	document.getElementById("eye").style.color='#7a797e';
	state = false;
     }
     else{
	document.getElementById("password").setAttribute("type","text");
	document.getElementById("eye").style.color='red';
	state = true;
     }
}
</script>


<style>

/* ---------Login Password Show and Hide Icon --------------*/
::placeholder{
    color: #9a9a9a;
    font-weight: 400;
}

#span{
    position: absolute;
    right: 15px;
    transform: translate(0,-50%);
    top: 50%;
    cursor: pointer;
}
.fa{
    font-size: 20px;
    color: #7a797e;
}

.hancie{
    box-sizing: border-box;
    width: 100%;
    font-size: 0.95em;
    font-weight: 400;
    border: none;
    padding: 0.6em;
    border-radius: 3px;
    font-family: 'Poppins',sans-serif;
    color: #4a4a4a;
    border: none;
    border-bottom: 0.12em solid #3f3554;
    box-shadow: 0 5px 30px rgba(22,89,233,0.4);
}

form input:focus {
  border-color: #ff5959;
}

/* ------------------------------------------------- */

body {
  background-color: #fff;
}
.container {
  height: 31.25em;
  width: 31.25em;
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
}
form {
  width: 23.75em;
  height: 18.75em;
  background-color: #28c7fa;
  position: absolute;
  transform: translate(-50%, -50%);
  top: calc(50% + 3.1em);
  left: 50%;
  padding: 0 3.1em;
  display: flex;
  flex-direction: column;
  justify-content: center;
  border-radius: 0.5em;
}
form label {
  display: block;
  margin-bottom: 0.2em;
  font-weight: 600;
  color: #2e0d30;
}

form input:not(:last-child) {
  margin-bottom: 0.9em;
}
#submit {
  font-size: 0.95em;
  padding: 0.8em 0;
  border-radius: 2em;
  border: none;
  outline: none;
  background-color: #3f3554;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 0.15em;
  margin-top: 0.8em;
}
.panda-face {
  height: 7.5em;
  width: 8.4em;
  background-color: #ffffff;
  border: 0.18em solid #2e0d30;
  border-radius: 7.5em 7.5em 5.62em 5.62em;
  position: absolute;
  top: 2em;
  margin: auto;
  left: 0;
  right: 0;
}
.ear-l,
.ear-r {
  background-color: #3f3554;
  height: 2.5em;
  width: 2.81em;
  border: 0.18em solid #2e0d30;
  border-radius: 2.5em 2.5em 0 0;
  top: 1.75em;
  position: absolute;
}
.ear-l {
  transform: rotate(-38deg);
  left: 10.75em;
}
.ear-r {
  transform: rotate(38deg);
  right: 10.75em;
}
.blush-l,
.blush-r {
  background-color: #ff8bb1;
  height: 1em;
  width: 1.37em;
  border-radius: 50%;
  position: absolute;
  top: 4em;
}
.blush-l {
  transform: rotate(25deg);
  left: 1em;
}
.blush-r {
  transform: rotate(-25deg);
  right: 1em;
}
.eye-l,
.eye-r {
  background-color: #3f3554;
  height: 2.18em;
  width: 2em;
  border-radius: 2em;
  position: absolute;
  top: 2.18em;
}
.eye-l {
  left: 1.37em;
  transform: rotate(-20deg);
}
.eye-r {
  right: 1.37em;
  transform: rotate(20deg);
}
.eyeball-l,
.eyeball-r {
  height: 0.6em;
  width: 0.6em;
  background-color: #ffffff;
  border-radius: 50%;
  position: absolute;
  left: 0.6em;
  top: 0.6em;
  transition: 1s all;
}
.eyeball-l {
  transform: rotate(20deg);
}
.eyeball-r {
  transform: rotate(-20deg);
}
.nose {
  height: 1em;
  width: 1em;
  background-color: #3f3554;
  position: absolute;
  top: 4.37em;
  margin: auto;
  left: 0;
  right: 0;
  border-radius: 1.2em 0 0 0.25em;
  transform: rotate(45deg);
}
.nose:before {
  content: "";
  position: absolute;
  background-color: #3f3554;
  height: 0.6em;
  width: 0.1em;
  transform: rotate(-45deg);
  top: 0.75em;
  left: 1em;
}
.mouth,
.mouth:before {
  height: 0.75em;
  width: 0.93em;
  background-color: transparent;
  position: absolute;
  border-radius: 50%;
  box-shadow: 0 0.18em #3f3554;
}
.mouth {
  top: 5.31em;
  left: 3.12em;
}
.mouth:before {
  content: "";
  position: absolute;
  left: 0.87em;
}
.hand-l,
.hand-r {
  background-color: #3f3554;
  height: 2.81em;
  width: 2.5em;
  border: 0.18em solid #2e0d30;
  border-radius: 0.6em 0.6em 2.18em 2.18em;
  transition: 1s all;
  position: absolute;
  top: 8.4em;
}
.hand-l {
  left: 7.5em;
}
.hand-r {
  right: 7.5em;
}
.paw-l,
.paw-r {
  background-color: #3f3554;
  height: 3.12em;
  width: 3.12em;
  border: 0.18em solid #2e0d30;
  border-radius: 2.5em 2.5em 1.2em 1.2em;
  position: absolute;
  top: 26.56em;
}
.paw-l {
  left: 10em;
}
.paw-r {
  right: 10em;
}
.paw-l:before,
.paw-r:before {
  position: absolute;
  content: "";
  background-color: #ffffff;
  height: 1.37em;
  width: 1.75em;
  top: 1.12em;
  left: 0.55em;
  border-radius: 1.56em 1.56em 0.6em 0.6em;
}
.paw-l:after,
.paw-r:after {
  position: absolute;
  content: "";
  background-color: #ffffff;
  height: 0.5em;
  width: 0.5em;
  border-radius: 50%;
  top: 0.31em;
  left: 1.12em;
  box-shadow: 0.87em 0.37em #ffffff, -0.87em 0.37em #ffffff;
}
@media screen and (max-width: 500px) {
  .container {
    font-size: 14px;
  }
}
    </style>



<div class="arrow-top"> <i class="fas fa-arrow-up"></i> </div>
    <script src="index.js"></script>



<script>
let usernameRef = document.getElementById("username");
let passwordRef = document.getElementById("password");
let eyeL = document.querySelector(".eyeball-l");
let eyeR = document.querySelector(".eyeball-r");
let handL = document.querySelector(".hand-l");
let handR = document.querySelector(".hand-r");

let normalEyeStyle = () => {
  eyeL.style.cssText = `
    left:0.6em;
    top: 0.6em;
  `;
  eyeR.style.cssText = `
  right:0.6em;
  top:0.6em;
  `;
};

let normalHandStyle = () => {
  handL.style.cssText = `
        height: 2.81em;
        top:8.4em;
        left:7.5em;
        transform: rotate(0deg);
    `;
  handR.style.cssText = `
        height: 2.81em;
        top: 8.4em;
        right: 7.5em;
        transform: rotate(0deg)
    `;
};
//When clicked on username input
usernameRef.addEventListener("focus", () => {
  eyeL.style.cssText = `
    left: 0.75em;
    top: 1.12em;  
  `;
  eyeR.style.cssText = `
    right: 0.75em;
    top: 1.12em;
  `;
  normalHandStyle();
});
//When clicked on password input
passwordRef.addEventListener("focus", () => {
  handL.style.cssText = `
        height: 6.56em;
        top: 3.87em;
        left: 11.75em;
        transform: rotate(-155deg);    
    `;
  handR.style.cssText = `
    height: 6.56em;
    top: 3.87em;
    right: 11.75em;
    transform: rotate(155deg);
  `;
  normalEyeStyle();
});
//When clicked outside username and password input
document.addEventListener("click", (e) => {
  let clickedElem = e.target;
  if (clickedElem != usernameRef && clickedElem != passwordRef) {
    normalEyeStyle();
    normalHandStyle();
  }
});
</script>




   
</body>
<?php include "footer.php"; ?>

</html>