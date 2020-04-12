<?php
if($_POST["message"]) {
    mail("ankurmishra9@yahoo.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
<?php

if($_POST["submit"]) {
    $recipient="ankurmishra9@yahoo.com";
    $subject="Form to email message";
    $sender=$_POST["miniusername"];
    $senderEmail=$_POST["miniemail"];
    $message=$_POST["message"];

    $mailBody="Name: $miniusername\nEmail: $miniemail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $miniusername <$miniemail>");

    $thankYou="<p>Thank you ! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>

<html lang="en">
	
<head>
	<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

  <meta charset="utf-8">
  <title>Ankur Mishra</title>
  <meta name="description" content="Nothing">
  <meta name="keywords" content="Yupp">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="author" content="thomsoon.com">
  <link rel="icon" type="image/png" href="img/icon.png" />

<!--Style-->

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style-responsive.css">  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="common-css/bootstrap.css" rel="stylesheet">
	
	<link href="common-css/ionicons.css" rel="stylesheet">
	
	<link href="common-css/fluidbox.min.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/styles.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/responsive.css" rel="stylesheet">
	
	<link href="01-cv-portfolio/css/responsive1.css" rel="stylesheet">
	
  
</head>

<body>
<?=$thankYou ?>
<!--Preloader-->

<div class="preloader" id="preloader">
    <div class="item">
      <div class="spinner">
      </div>
    </div>
</div>

<div class="opacity-nav">

        <div class="menu-index" id="buttons" style="z-index:999999">
        <i class="fa  fa-close"></i>
        </div>

    <ul class="menu-fullscreen">
      <li><a class="ajax-link" href="#home"target="blank">Home</a></li>
      <li><a class="ajax-link" href="#certificationss"target="blank">Certifications</a></li>
      <li><a class="ajax-link" href="#portfolio-id"target="blank">Portfolio</a></li>
      <li><a class="ajax-link" href="#contact"target="blank">Contact</a></li>
	  <li><a class="ajax-link" href="cv.pdf" download >C.V</a>
    </ul>

</div>
<!--Header-->
  
<div id="home"></div>
  <header id="fullscreen">
      <div class="logo" id="full"><a class="ajax-link" >&nbsp;&nbsp;Ankur Mishra</a></div>
        <div class="menu-index" id="button">
        <i class="fa fa-bars"></i>
        </div>
        
  </header>
 <!--Content-->
  

  <div class="content" id="ajax-content">

        <div class="text-intro">

          <h1>Contact</h1>
          <p>To contact me please use the contact form visible. When sending files, please use the following e-mail</p>

          <form method="post" action="contact.php" data-jkit="[form:validateonly=true]">
          
          <div class="contact-one">
            <p>
              <label for="miniusername">Username:</label><br />
              <input name="miniusername" id="miniusername" data-jkit="[validate:required=true;min=3;max=10;error=Please enter your username (3-10 characters)]">
            </p>
          </div>  
          
          <div class="contact-two">  
            <p>
              <label for="miniemail">E-mail:</label><br />
              <input name="miniemail" id="miniemail" data-jkit="[validate:required=true;strength=50;error=Please write your email]">
            </p>
          </div>  
          
          <div class="contact-three">  
            <p>
              <label>Message:</label><br />
              <textarea id="message" name="message"></textarea><br/><br/>
              
              <input class="button-submit" name="submit" type="submit" value="SUBMIT" />
            </p>
          </div>            
            
            <p>
            </p>
          </form>
          
          
        </div>
        
	<br/><br/><br/><br/><br/><br/><br/><br/>      
  </div>



  <!--Home Sidebar-->

<div id="ajax-sidebar"></div>



  <!--Footer-->

  <footer id="ajax-footer">

    <div class="footer-margin">
      <div class="social-footer">
        <a href="https://www.facebook.com/aankurmishraa"><i class="fa fa-facebook"></i></a>
        <a href="https://www.linkedin.com/in/ankurmishraa/"><i class="fa fa-linkedin"></i></a>
		 <a href="https://www.instagram.com/ankur_mishraa/"><i class="fa fa-instagram"></i></a>
		  <a href="https://github.com/ankurmishraa/"><i class="fa fa-github"></i></a>
		   <a href="https://api.whatsapp.com/send?phone=+919198119596."><i class="fa fa-whatsapp"></i></a>
      
      </div>     
      <div class="copyright">© Copyright 2019 ankurmishra.me All Rights Reserved.</div>
    
    </div>


  </footer>


<!-- SCIPTS -->
	
	<script src="common-js/jquery-3.2.1.min.js"></script>
	
	<script src="common-js/tether.min.js"></script>
	
	<script src="common-js/bootstrap.js"></script>
	
	<script src="common-js/isotope.pkgd.min.js"></script>
	
	<script src="common-js/jquery.waypoints.min.js"></script>
	
	<script src="common-js/progressbar.min.js"></script>
	
	<script src="common-js/jquery.fluidbox.min.js"></script>
	
	<script src="common-js/scripts.js"></script

  <script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/modernizr.custom.42534.js" type="text/javascript"></script>
  <script src="js/jquery.waitforimages.js" type="text/javascript"></script>
  <script src="js/typed.js" type="text/javascript"></script>
  <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>  
  <script src="js/imagesloaded.pkgd.min.js" type="text/javascript"></script>    
  <script src="js/jquery.jkit.1.2.16.min.js"></script>
 
  <script src="js/script.js" type="text/javascript"></script>
  
	<script>
    $('#button, #buttons').on('click', function() {
      $( ".opacity-nav" ).fadeToggle( "slow", "linear" );
    // Animation complete.
    });
  </script>
  


</body>
</html>
