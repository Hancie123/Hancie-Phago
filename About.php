
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="Images/Logo.ico">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Me</title>
    <meta name="description" content="Hancie Phago Personal Website">
    <meta name="keywords" content="Hancie Phago, Hancie, Phago, Nitesh Hamal, Personal Website">
    <meta name="author" content="Hancie Phago">
    <link rel="stylesheet" href="CSS/login.css" />
    <link rel="stylesheet" type="text/css" href="CSS/About.css">
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




<br>
<br>
<br>



<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1 class="text-center">About Me</h1>
				</div>
				<div class="content">
					<h3 class="text-danger text-center">SOFTWARE ENGINEER</h3>
					<p>Hello! My name is Hancie Phago. Currently studying software engineering at PCPS
                         College which is located at Kupondole, Lailitpur. You can contact me directly through this website if you'd like to get in 
                        touch with me.</p>
					<div class="button">
						<a href="mailto:hanciephago@gmail.com">CONTACT ME</a>
					</div>
				</div>
				<div class="social">
					<a href="https://www.facebook.com/hanciephago720/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/hancie_phago"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/hancie720/"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="Images/Hancie-Phago.jpg">
			</div>
		</div>
	</div>








       






    <div class="arrow-top"> <i class="fas fa-arrow-up"></i> </div>
    <script src="index.js"></script>
</body>
<?php include "footer.php"; ?>

</html>