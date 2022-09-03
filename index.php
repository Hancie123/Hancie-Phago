
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hancie Phago</title>
    <link rel="icon" href="/Logo.ico"/>
    <meta name="description" content="Hancie Phago Personal Website">
    <meta name="keywords" content="Hancie Phago, Hancie, Phago, Nitesh Hamal, Personal Website">
    <meta name="author" content="Hancie Phago">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


</head>

<body oncontextmenu="return false">
   <?php include "Nav.php"?>


    <div class="home" id="Home">
        <div class="details">
            <h2 class="text-dark">I'm <font color="red">Hancie </font>Phago</h2>
            <p class="text-dark">Love to learn programming languages.</p>
            <p class="text-dark">Also love to learn and explore new technology.</p> <button><a href="About" style="text-decoration:none; color:white">Know More About ME</a></button>
        </div> <img src=Images/Hancie-Logo1.png />
        <div class="Social-media"> <a href="https://www.facebook.com/hanciephago720/"><i class="fab fa-facebook-f text-dark"></i></a> <a href="https://twitter.com/hancie_phago"><i class="fab fa-twitter text-dark"></i></a> <a href="https://www.instagram.com/hancie720/"><i class="fab fa-instagram text-dark"></i></a> <a href="https://www.linkedin.com/in/hancie-phago-b4681a150/"><i class="fab fa-linkedin-in text-dark"></i></a> <a href="https://github.com/Hancie123"><i class="fab fa-github text-dark"></i></a> </div>
    </div>



 
    
    


<style>

.btn{
    color:#555;
    font-family: 'Finlandica', sans-serif;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 10px 20px;
    border-radius: 10px;
    border: 3px solid #ef0f34;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease 0s;
}
.btn:focus{ color: #555; }
.btn:hover{ color: #fff; }
.btn:before{
    content: "";
    background: #ef0f34;
    height: 10px;
    width: 10px;
    border-radius: 6px;
    position: absolute;
    top: 3px;
    right: 3px;
    z-index: -1;
    transition: all 0.3s ease 0s;
}
.btn:hover:before{
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
}
@media only screen and (max-width: 767px){
    .btn{ margin-bottom: 30px; }
}

</style>



<!---------------------Developer Section -------------------->
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="Images/Hancie-Phago.png"></div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-center">
                <div style="max-width: 350px;">
                    <h2 class="text-uppercase fw-bold">Hancie Phago</h2>
                    <p class="text-uppercase">Software Developer</p>
                    <p class="my-3">Hello! My name is Hancie Phago. I am a software developer and currently
studying software engineering at PCPS College. Visit my website if you'd like to get in touch 
with me.</p><a href="tel: 9825915122" class="btn btn-lg">
                <span>CONTACT ME</span>
            </a>
                </div>
            </div>
        </div>
    </div>



    <section id="services2" class="services2">
        <div class="container-md section-title">
            <div class="text-center">
                <h5 class="d-inline-block justify-content-lg-center" style="background-color: #e2d6b5;width: 120px;margin-left: 0px;border-radius: 30px;padding: 5px;margin-top: 20px;color: #ffffff;font-size: 18px;">SERVICES</h5>
                <h2 style="color: #75aadb;">I Offer Awesome<span style="color: #d12d33;"><strong>&nbsp;Services</strong></span></h2>
                <br>
            </div>
            <div class="row">
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class='bx bx-window-alt' style="margin-bottom: 15px;"></i>
                            <h4 class="title">Windows Application<a href="#"></a></h4>
                            <p class="description">I can create personalized Windows application for the clients to meet their demands.<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class='bx bxl-android' style="margin-bottom: 15px;"></i>
                            <h4 class="title">Android Application<a href="#"></a></h4>
                            <p class="description">For clients, I may design a custom Android application to satisfy their needs.<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class='bx bxl-internet-explorer' style="margin-bottom: 15px;"></i>
                            <h4 class="title">Web Application<a href="#"></a></h4>
                            <p class="description">The use of web applications is essential for simple task 
    completion. I can design a customized web application for each client to satisfy their needs.<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class='bx bxl-edge' style="margin-bottom: 15px;"></i>
                            <h4 class="title">Website<a href="#"></a></h4>
                            <p class="description">For my clients, I can create a custom website that will help them advertise their businesses online.<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="card-section-imagia">
        <h1>Our team</h1>
        <h2>NH GROUP</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 ">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                <div class="user-imagia"><img class="img-circle" alt="" src="Images/Hancie-Phago.jpg"></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia">Hancie Phago</h3>
                                    <p class="subtitle-imagia">Software Developer</p>
                                    <p class="text-center"><em>I sincerely welcome you to my website, visitors. From this page, you are already familiar with my name.
                                         I made this website for everyday personal usage. This website serves as both my portfolio and a listing of all of my 
                                         qualifications and programming abilities.</em></p>
                                </div>
                                <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                            </div>
                            <div class="back-imagia">
                                <div class="content-imagia content-back-imagia">
                                    <div>
                                        <h3 class="text-center">Hancie Phago</h3>
                                        <p class="text-center">I sincerely welcome you to my website, visitors. From this page, you are already familiar with my name. 
                                            I made this website for everyday personal usage. This website serves as both my portfolio and a listing 
                                            of all of my qualifications and programming abilities. <br>
                                            In terms of my background, I am a software engineering student at PCPS College in Kupondole, Lalitpur.
                                             Additionally, I completed my +2 education at St.Xavier's School after completing my school-level education from Siddhartha 
                                             Shishu Sadan School.My goal to become a professional software engineer has existed since I was young. Being in the 
                                             industry of software engineering requires a lot of career development because technology is constantly evolving. 
                                             Moving forward with all of today's programming languages and technologies has put a lot of pressure and burden on us.</p>
                                    </div>
                                </div>
                                <div class="footer-imagia">
                                    <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-sm-6 ">
                    <div class="card-container-imagia">
                        <div class="card-imagia">
                            <div class="front-imagia">
                                <div class="cover-imagia"><img alt="" src="https://unsplash.it/720/500?image=1067"></div>
                                <div class="user-imagia"><img class="img-circle" alt="" src="Images/Nitesh.JPG"></div>
                                <div class="content-imagia">
                                    <h3 class="name-imagia">Nitesh Hamal</h3>
                                    <p class="subtitle-imagia">Software Developer</p>
                                    <p class="text-center"><em>Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves. </em></p>
                                </div>
                                <div class="footer-imagia"><span><i class="fa fa-plus"></i> More info</span></div>
                            </div>
                            <div class="back-imagia">
                                <div class="content-imagia content-back-imagia">
                                    <div>
                                        <h3 class="text-center">Lorem Ipsum</h3>
                                        <p class="text-center">Et hanc quidem praeter oppida multa duae civitates exornant Seleucia opus Seleuci regis, et Claudiopolis quam deduxit coloniam Claudius Caesar. Isaura enim antehac nimium potens, olim subversa ut rebellatrix interneciva aegre vestigia claritudinis pristinae monstrat admodum pauca. </p>
                                    </div>
                                </div>
                                <div class="footer-imagia">
                                    <div class="social-imagia text-center"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>














<style>

.fit-cover {
  object-fit: cover;
}

#column:hover{
    background: #524eb7;
    border-radius:13px;
    color:white;

}




:root{  --main-color: #0c7c99; }
.counter{
    color: var(--main-color);
    background: var(--main-color);
    font-family: 'Poppins', sans-serif;
    text-align: center;
    width: 195px;
    height: 195px;
    padding: 0 0 20px 20px;
    margin: 0 auto;
    border-radius: 100px 100px;
    position: relative;
    z-index: 1;
}
.counter:before{
    content: "";
    background: #fff;
    width: 100%;
    height: 100%;
    border-radius: 100px 100px;
    box-shadow: 10px 10px 10px rgb(0,0,0,0.1);
    position: absolute;
    top: 0;
    left: 15px;
    z-index: -1;
}
.counter .counter-icon{
    color:#fff;
    background: var(--main-color);
    font-size: 30px;
    line-height: 70px;
    width: 70px;
    height: 70px;
    margin: 0 auto 25px;
    border-radius: 50px;
}
.counter h3{
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0 0 15px;
}
.counter .counter-value{
    font-size: 30px;
    font-weight: 600;
}
.counter.blue{ --main-color: #0083E7; }
.counter.green{ --main-color: #00B853; }
.counter.orange{ --main-color: #f98348; }
@media screen and (max-width:990px){
    .counter{ margin-bottom: 40px; }
}  


#projectTitle {
  font-weight: bold;
}

</style>


<!-------------------- Project Counter Section ----------------------->
<div class="container my-4">
<h2 id="projectTitle" class="text-center">PROJECT COMPLETED</h2><br>

<br>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="counter">
                <div class="counter-icon"><i class="bi bi-browser-edge"></i></div>
                <h3>Website Designing</h3>
                <span class="counter-value">10</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter orange">
                <div class="counter-icon"><i class="bi bi-browser-chrome"></i></div>    
                <h3>Web Application</h3>
                <span class="counter-value">5</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter blue">
                <div class="counter-icon"><i class="bi bi-window"></i></div>    
                <h3>Desktop Application</h3>
                <span class="counter-value">5</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter green">
                <div class="counter-icon"><i class="bi bi-android2"></i></div>    
                <h3>Android Application</h3>
                <span class="counter-value">2</span>
            </div>
        </div>
    </div>
</div>

<script>
 
$(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
</script>


<!------------------ My Project Section -------------------->

<div id="container" class="container  py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 id="projectTitle" >MY PROJECTS</h2>
                <p class="w-lg-50">These are the projects which i have done.</p>
            </div>
        </div>

    <ul class="nav nav-tabs justify-content-center" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#home">Web Application</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu1">Desktop Application</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu2">Android Application</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <div id="home" class="container tab-pane active"><br>
      <h3 class="text-center">Web Application and Website</h3>
      
<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">

<div id="column" class="col p-2">
        <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 40vh;" src="Images/Om-Kalpataru-Carriers.jpeg">
            <div class="py-4">
                <h4>Om Kalpataru Carriers</h4>
                <p>Om Kalpataru Carriers Pvt.Ltd is a transport company company of Nepal
                     which provides transport services to different part of Nepal.
                      Most services are provided to eastern region of Nepal. 
                      The head office is in Birgunj which is the major trading
                       areas between india and Nepal. We'd like to promote 
                       ourselves as one of NEPAL's leading transport service
                        providers.</p>
            </div>
        </div>
    </div>

    <div id="column" class="col p-2">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 40vh;" src="Images/Web-Application.jpg">
                    <div class="py-4">
                        <h4>Naindra Tea Farming</h4>
                        <p>A online program called Naindra Tea Farming keeps track of all the tea records. The data is collected 
                            and safely stored on the server with the aid of this web application. Data on employee billing 
                            and tea is stored there.</p>
                    </div>
                </div>
            </div>

            <div id="column" class="col p-2">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 40vh;" src="Images/Website.jpg">
                    <div class="py-4">
                        <h4 >Hancie e-Learning Studio</h4>
                        <p>A web application called Hancie e-Learning Studio aids in improving one's knowledge and abilities 
                            as a computer programmer. Hancie e-Learning studio's primary goal is to assist programmers in 
                            finding the right solutions to their challenges.</p>
                    </div>
                </div>
            </div>

<!--  Row Close -->
</div> 


<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
<div id="column" class="col p-2">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 40vh;" src="Images/Dictionary.jpg">
                    <div class="py-4">
                        <h4 >NH English Dictionary</h4>
                        <p>The website NH English Dictionary offers word definitions and 
                            meanings. By supplying all relevant word meanings, it is 
                            designed to satisfy any user's need. Every day, new words
                             are added so that users can access all the terms they 
                             require for daily use.</p>
                    </div>
                </div>
            </div>


            <div id="column" class="col p-2">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 40vh;" src="Images/Health.jpeg">
                    <div class="py-4">
                        <h4 >Hamro Nepali Health</h4>
                        <p>Nepal Kids Health will provide comprehensive health information and 
                            answers to specific questions for teens. The information will
                             be straightforward, clear, understandable, medically accurate, and up-to-date.</p>
                    </div>
                </div>
            </div>

<!-- Row Close -->
</div>

<!-- Container Close -->
</div>

    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Desktop Applications</h3>
      
      <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">

      <div id="column" class="col p-2">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 40vh;" src="Images/Desktop-Application.jpg">
                    <div class="py-4">
                        <h4 >Luton Online Hotel Booking</h4>
                        <p >The desktop program Luton Online Hotel Booking System enables customers to make online GUI-based 
                            room reservations. There are five positions in this program. The hotel manager and receptionist 
                            are in charge of the system. Through their laptop or mobile device, customers can directly reserve a room
                             that is available.</p>
                    </div>
                </div>
            </div>

            <div id="column" class="col p-2">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 40vh;" src="Images/NH Dictionary.jpg">
                    <div class="py-4">
                        <h4>NH Nepali Dictionary</h4>
                        <p>Find out the meaning of English words or phrases in the Nepali language and vice-versa. Search for 
                            terms both in Nepali as well as in English and get an accurate definition as well as its closest 
                            translation. It contains more than 30,000 words listed alphabetically.</p>
                    </div>
                </div>
            </div>


            <div id="column" class="col p-2">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 40vh;" src="Images/NH Library Management System.png">
                    <div class="py-4">
                        <h4>NH Library Mangement System</h4>
                        <p>This specialized application offers an advanced library management system, which carries an 
                            intuitive dashboard UI for management.The system has several modules for members, books, book issues,
                             book returns, magazines, and newspapers. You can be able to track the books issued and how many
                              have not been returned easily.</p>
                    </div>
                </div>
            </div>

      <!-- Row Close -->
</div>


<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
<div id="column" class="col p-2">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 40vh;" src="Images/NH Hotel Management 5467576.png">
                    <div class="py-4">
                        <h4>NH Hotel Mangement System</h4>
                        <p>NH Hotel management application software for your hotel rooms and enjoy the automation of your hotel 
                            from anywhere. Our Hotel management system is an all-in-one reservation and accommodation 
                            management system specifically developed for Hotels, Resorts, and Guest Houses in Nepal 
                            aiming at easy maintenance.</p>
                    </div>
                </div>
            </div>

<!-- Row Close -->
</div>

<!-- Container Close -->
</div>


    <div id="menu2" class="container tab-pane fade"><br>
      <h3 class="text-center">Android Application</h3><br>
      <h5 class="text-center">Coming Soon!</h5>
    </div>
</div>

    <!-- Main Container Close -->
</div>





<!-- ------------------Contact Us Section --------------------->
<div class="contact" id="Contact">
        <h2 id="projectTitle" class="text-center">GET IN TOUCH</h1>
        <div class="contact-heading text-dark"> You have any idea or suggestion contact us </div>
        <div class="contact-form">
            <div class="input-details">
                <h1>Contact Us</h1>
                <div class="input-container"> <label>Full Name</label> <input type="text" placeholder="Full Name" /> </div>
                <div class="input-container"> <label>Email Address</label> <input type="text" placeholder="Email" /> </div>
            </div>
            <div class="input-message"> Message<textarea placeholder="write message to us ..."></textarea> <button>Send Message</button> </div>
        </div>
    </div>
    <div class="arrow-top"> <i class="fas fa-arrow-up"></i> </div>
    <script src="index.js"></script>



    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "1828091824092441");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    
</body>
<?php include "footer.php"; ?>

</html>