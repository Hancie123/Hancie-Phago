
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="icon" href="logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="footer.css" />
  <?php include "nav.php";?>
</head>

<body>

<style>
.contact-clean {
  background: #f1f7fc;
  padding: 80px 0;
}

@media (max-width:767px) {
  .contact-clean {
    padding: 20px 0;
  }
}

.contact-clean form {
  max-width: 480px;
  width: 90%;
  margin: 0 auto;
  background-color: #ffffff;
  padding: 40px;
  border-radius: 4px;
  color: #505e6c;
  box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
}

@media (max-width:767px) {
  .contact-clean form {
    padding: 30px;
  }
}

.contact-clean h2 {
  margin-top: 5px;
  font-weight: bold;
  font-size: 28px;
  margin-bottom: 36px;
  color: inherit;
}

.contact-clean .form-group:last-child {
  margin-bottom: 5px;
}

.contact-clean form .form-control {
  background: #fff;
  border-radius: 2px;
  box-shadow: 1px 1px 1px rgba(0,0,0,0.05);
  outline: none;
  color: inherit;
  padding-left: 12px;
  height: 42px;
}

.contact-clean form .form-control:focus {
  border: 1px solid #b2b2b2;
}

.contact-clean form textarea.form-control {
  min-height: 100px;
  max-height: 260px;
  padding-top: 10px;
  resize: vertical;
}

.contact-clean form .btn {
  padding: 16px 32px;
  border: none;
  background: none;
  box-shadow: none;
  text-shadow: none;
  opacity: 0.9;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 13px;
  letter-spacing: 0.4px;
  line-height: 1;
  outline: none !important;
}

.contact-clean form .btn:hover {
  opacity: 1;
}

.contact-clean form .btn:active {
  transform: translateY(1px);
}

.contact-clean form .btn-primary {
  background-color: #055ada !important;
  margin-top: 15px;
  color: #fff;
}


</style>







<section class="position-relative py-4 py-xl-5">
        <div class="container-fluid position-relative">
            <div class="row">
                <div class="col"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d984.633677895667!2d88.06982448733412!3d26.489128050382956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf929f81eea291bdf!2sNH%20Group!5e1!3m2!1sen!2snp!4v1658318435118!5m2!1sen!2snp" width="100%" height="100%" style="border:1; border-radius:30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                <div class="col-md-6 col-xl-4">
                    <div>
                        <form class="p-3 p-xl-4" method="post" action="Contact_Us.php">
                            <h2>CONTACT US</h2>
                            <p class="text-muted">If you experience any issues or questions while utilizing our application, 
                              you can get in touch with us right away by using our contact form.</p>
                            <div class="mb-3"><label class="form-label" for="name">Name</label><input class="form-control" type="text" id="name" name="name"></div>
                            <div class="mb-3"><label class="form-label" for="phone">Phone No</label><input class="form-control" type="phone" id="phone" name="phone"></div>
                            <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" type="email" id="email" name="email"></div>
                            <div class="mb-3"><label class="form-label" for="message">Message</label><textarea class="form-control" id="message" name="message" rows="6"></textarea></div>
                            <div class="mb-3"><button class="btn btn-primary" type="submit" name="submit">Send </button></div>


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


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<?php include "footer.php";?>
</html>