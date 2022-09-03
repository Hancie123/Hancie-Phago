
<style>
footer {
  background-color: #292c2f;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 50px;
  bottom: 0;
  color: #fff;
}

.footer-navigation h3 {
  margin: 0;
  font: normal 36px Cookie, cursive;
  margin-bottom: 20px;
  color: #fff;
}

.footer-navigation h3 a {
  text-decoration: none;
  color: #fff;
}

.footer-navigation h3 span {
  color: #5383d3;
}

.footer-navigation p.links a {
  color: #fff;
  text-decoration: none;
}

.footer-navigation p.company-name {
  color: #8f9296;
  font-size: 14px;
  font-weight: normal;
  margin-top: 20px;
}

@media (max-width:767px) {
  .footer-contacts {
    margin: 30px 0;
  }
}

.footer-contacts p {
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
}

.footer-contacts p a {
  color: #5383d3;
  text-decoration: none;
}

.fa.footer-contacts-icon {
  background-color: #33383b;
  color: #fff;
  font-size: 18px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 38px;
  margin: 10px 15px 10px 0;
}

span.new-line-span {
  display: block;
  font-weight: normal;
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer-about h4 {
  display: block;
  color: #fff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-about p {
  line-height: 20px;
  color: #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

div.social-links {
  margin-top: 10px;
  color: #fff;
}



</style>


<footer>

        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#">Hancie <span>Phago</span></a></h3>
                <p class="links"><a href="index.php">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Contact</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="Login.php">Login</a></p>
                <p class="company-name">Hancie Phago © <?php echo date("Y"); ?> </p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Kathmandu</span>New Baneshwor</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-start"> +977 9825915122</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">hanciewanemphago@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-4 footer-about">
                <h4>About</h4>
                <p class="text-light"> I sincerely welcome you to my website, visitors. From this page, you are already familiar with my name. 
                  I made this website for everyday personal usage. This website serves as both my portfolio and a listing 
                  of all of my qualifications and programming abilities. </p>
                
            </div>
            
        </div>
    </footer>
  
<div class="footer-copyright">
<div class="container-fluid bg-dark text-light  text-center p-2">
<p>Copyright © 2022- <?php echo date("Y"); ?>. All rights reserved. Design by Hancie Phago</p>

</div>
</div>
</footer>