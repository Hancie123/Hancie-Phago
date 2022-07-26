
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="Images/Logo.ico">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hancie Phago</title>
    <link rel="stylesheet" href="CSS/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
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
    margin-top: 90px;
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


<?php
        if(isset($_POST["submit"]))
        {
            include "connection.php";
         $sql="INSERT INTO messages (Name, Contact, Email, Message,LOGS) VALUES ('{$_POST["name"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["message"]}',NOW());";
            if($conn->query($sql))
    {
        echo '
        <div class="alert alert-success">
            <strong>Success!</strong> Your message has been Successfully sent!
        </div>
        
        
        ';
    }
        }
    ?>

<style>


.text-effect{
    color: transparent;
    font-family: 'Kalam', cursive;
    font-size: 4rem;
    font-weight: 600;
    text-align: center;
    letter-spacing: 2px;
    -webkit-text-stroke: 3px #009432;
    text-stroke: 3px #009432;
    position: relative;
    z-index: 1;
}
.text-effect:before{
    content: attr(data-content);
    color: #0bba45;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    animation: animate 3s ease-in-out infinite;
}
@keyframes animate{
    0%, 100%{
        clip-path: polygon(0% 45%,16% 44%,33% 50%,54% 60%,70% 61%,84% 59%,100% 52%,100% 100%,0% 100%);
    }
    50%{
        clip-path: polygon(0% 60%,15% 65%,34% 66%,51% 62%,67% 50%,84% 45%,100% 46%, 100% 100%,0% 100%);
    }
}
@media only screen and (max-width: 990px){
    .text-effect{ font-size: 90px; }
}
@media only screen and (max-width: 767px){
    .text-effect{ font-size: 70px; }
}
@media only screen and (max-width: 576px){
    .text-effect{ font-size: 50px; }
}
@media only screen and (max-width: 479px){
    .text-effect{
        font-size: 40px;
        line-height: 50px;
        -webkit-text-stroke: 2px #009432;
        text-stroke: 2px #009432;
    }
}



.btn{
    color: #fff;
    background-color: transparent;
    font-family: 'Cutive', serif;
    font-size: 17px;
    font-weight: 700;
    text-transform: capitalize;
    letter-spacing: 1px;
    padding: 7px;
    border: none;
    border-radius: 0;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease 0s;
}
.btn:focus,
.btn:hover{
    color: #fff;
    background-color: transparent;
    border: none;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2) inset, 0 0 10px rgba(0, 0, 0, 0.3);
}
.btn:before,
.btn:after,
.btn span:before,
.btn span:after{
    content: "";
    background: #ff793f;
    width: 50%;
    height: 50%;
    border-radius: 10px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 0.3s ease-in-out;
}
.btn:after{
    background: #34ace0;
    top: auto;
    bottom: 0;
    left: auto;
    right: 0; 
}
.btn span:before{
    background: #ff5252;
    left: auto;
    right: 7px;
    top: 7px;
}
.btn span:after{
    background-color: #33d9b2;
    top: auto;
    bottom: 7px;
    left: 7px;
}
.btn:hover:before{
    top: 7px;
    left: 7px;
}
.btn:hover:after{
    bottom: 7px;
    right: 7px;
}
.btn:hover span:before{
    top: 0;
    right: 0;
}
.btn:hover span:after{
    bottom: 0;
    left: 0;
}
.btn span{
    background-color: #444;
    padding: 7px 20px;
    display: block;
}
@media only screen and (max-width: 767px){
    .btn{ margin-bottom: 20px; }
}


</style>


<div class="text-effect text-center mb-3" data-content="CONTACT ME"><span>CONTACT ME</span></div>
<br>
<form method="post" action="Contact_Us.php" role="form" >

<div class="row">


<div class="col">
<div class="control-group form-group">
<div class="controls">
<label>Full Name:</label>
<input type="text" class="form-control" name="name" required>
<p class="help-block"></p>
</div>
</div>
    </div>

    <div class="col">
<div class="control-group form-group">
<div class="controls">
<label>Phone Number:</label>
<input type="tel" class="form-control" name="phone" required>
</div>
</div>
    </div>
</div>

<br>
<div class="control-group form-group">
<div class="controls">
<label>Email Address:</label>
<input type="email" class="form-control" name="email"  >
</div>
</div>
<br>
<div class="control-group form-group">
<div class="controls">
<label>Message:</label>
<textarea id="editor1" rows="5" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
</div>
</div>
<div id="success"></div></br>
<!-- For success/fail messages -->
<button type="submit" name="submit" class="btn btn-lg"><span>Send Message</span></button>
</form>
    
</div>








        </div>
    </section>


    <script>
                        CKEDITOR.replace( 'editor1' );
                </script>



    <div class="arrow-top"> <i class="fas fa-arrow-up"></i> </div>
    <script src="index.js"></script>
</body>
<?php include "footer.php"; ?>

</html>