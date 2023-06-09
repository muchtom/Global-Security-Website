<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Global Security</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/g.jpeg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <style>

/* @import url(//fonts.googleapis.com/css?family=Lato:300:400); */

body {
  margin:0;
}

h1 {
  /* font-family: 'Lato', sans-serif; */
  font-weight:300;
  letter-spacing: 2px;
  font-size:48px;
}
p {
  /* font-family: 'Lato', sans-serif; */
  letter-spacing: 1px;
  font-size:14px;
  color: #333333;
}
.info{
    padding-top: 20px;
    padding-left: 20px;
}

.header {
  position:relative;
  text-align:center;
  background: linear-gradient(60deg, rgb(6, 1, 27) 0%, rgb(69, 87, 87) 100%);
  color:white;
}
.logo {
  width:50px;
  fill:white;
  padding-right:15px;
  display:inline-block;
  vertical-align: middle;
}

.inner-header {
  height:30vh;
  width:100%;
  margin: 0;
  padding: 0;
}

.flex { /*Flexbox for containers*/
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}

.content {
  position:relative;
  height:20vh;
  text-align:center;
  background-color: white;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
/* .parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
} */
/* @keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
} */
/*Shrinking for mobile*/
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
  .content {
    height:30vh;
  }
  h1 {
    font-size:24px;
  }
}
        .emahover p:hover{
            cursor: pointer;
            opacity: .7;
            color: burlywood;
           
        }
        .heading{
            padding-top: 30px;
           
        }     
        .heading h1{
            font-size: 40px;
           text-align: center;
           font-family: 'Courier New', Courier, monospace;
           font-style: italic;
           color: rgb(114, 114, 236);
        }
        .about-content h2{
           font-size: 60px;
           font-weight: normal;
           font-family: 'Times New Roman', Times, serif;
           margin-left: 15px;
        }
        .content h2{
            font-size: 30px;
            text-align: center;
            padding-bottom: 50px;
        }
        .about-content h4{
            font-size: 20px;
            margin-left: 15px;
        }
        .about-content p{
            margin-left: 15px;
        }
        .reasons{
            padding-top: 30px;
        }
        .content .reasons h3{
            text-align: center;
            font-size: 40px;
        }
        .content .reasons h3 span{
            color: grey;
            font-style: italic;
        }
        .cards{
            background-color: rgb(215, 195, 195);
        }
        .cards .card{

            margin-top: 10px;
           padding: 100px 150px ;
            background-color: rgb(171, 171, 238);
            margin-bottom: 10px;
            border-radius: 12px;

        }
        .cards .time h4{
        text-decoration: underline solid rgb(111, 111, 237) 9px;

        }
        .cards .mission h4{
            text-decoration: underline solid rgb(85, 85, 242) 9px; 
        }
        .cards h4{
            text-decoration: underline solid rgb(85, 85, 242) 9px; 
        } 
        .dropdown {
  display: inline-block;
  position: relative;
}

button{
  border:none;
  border-radius:5px;
  padding:15px 30px;
  font-size:18px;
  cursor:pointer;
}

button:hover{
  background-color:#ddd;
}

.dropdown-options {
  display: none;
  position: absolute;
  overflow: auto;
  background-color:#fff;
  border-radius:5px;
  box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
}

.dropdown:hover .dropdown-options {
  display: block;
}

.dropdown-options a {
  display: block;
  color: #000000;
  padding: 5px;
  text-decoration: none;
  padding:20px 40px;
}

.dropdown-options a:hover {
  color: #0a0a23;
  background-color: #ddd;
  border-radius:5px;
}
.vertical {
            border-left: 6px solid rgb(129, 129, 221);
            height: 40px;
            position:absolute;
            left: 50%;
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <!-- <div class="container-fluid  pt-3 d-none d-lg-block" style="background-color:rgb(34, 34, 199)
     ;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10  text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <div class="emahover">
                        <p ><a href="contact.html"><i class="fa fa-envelope mr-2"></i>info@globalsecuritytech.com.au </a></p>
                        </div>
                        <p class="text-body px-3">|</p>
                        <p style="color: rgb(232, 232, 207) ;"><i class="fa fa-phone-alt mr-2"></i>+012 345 6789 | 92 Charles Avenue, Logan Central, QLD  4114 </p> 
                    </div>
                </div>
                <div class="col-lg-2 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">

                <img src="img/g.jpeg" width="300px" height="100px">
               
                <!-- <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">Global Security</span></h1>
                </a> -->
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-2">
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="about.html" class="nav-item nav-link ">About</a>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                        <div class="dropdown" style="padding-top: 10px;">
                          <button  style="background-color: white;">Services</button>
                          <div class="dropdown-options">
                              <a href="service.html">Intruder Alarms</a>
                              <a href="cctv.html">CCTV Systems</a>
                              <a href="home-automation.html">Home Automation</a>
                              <a href="intercom-installation.html">Intercom Installation</a>
                              <a href="access-control.html">Access Control</a>
                              <a href="networking.html">Networking</a>
                          </div>
                        </div>
                        <div class="call-us" style="padding-top: 0px;">
          
                            <p><i class="fa fa-phone-alt mr-2"></i>+012 345 6789 | 92 Charles Avenue, Logan Central, QLD  4114 </p>
                          
                        </div>
                         <div class="contact-us" style="padding-top:20px;">
                            <div class="row">
                                <div class="col-lg-8" style="padding-top: 15px;">
                                <button  style="background-color: green; border-style: none; padding: 2px 40px; color: white; border-style: none;"><a style="color: white; text-decoration: none;" href="contact.php">Get Quote</a></button>
                            </div>
                            <div class="col-lg-4">
                                <i style="color: white; padding-top: 19px;" class='fas fa-location-arrow'></i>
                            </div>   
                            </div>
                          </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->



    <!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">

    <!--Content before waves-->
    <div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->
    <div class="picture" style="padding-top: 45px;">
   <img src="img/sec.jpeg" height="320px">
</div>
    <h1 style="color:#ddd">EXPLORE MORE CONTACT US</h1>
    </div>
    
    <!--Waves Container-->
    <div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
    </svg>
    </div>
    </div>

   <div class="map">
    <img src="img/map.webp" width="1340px">
   </div>
   <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h5>
                <h1>Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                       
                        <form action="code.php" method="POST" name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="row">
                <div class="col-lg-6">
        <label for="name">Name: </label>
        <input class="form-control border-0 p-4" id="name" name="name" type="text" placeholder="Name" size="3" required>
        <p class="help-block text-danger"></p>
        <br>
        <br>
        </div>
         <div class="col-lg-6">
        <label for="email">Your Email: </label>
        <input  class="form-control border-0 p-4" id="email" name="email" type="email" placeholder="example@example.com" size="23" required>
        <p class="help-block text-danger"></p>
        <br>
        <br>
    </div>
    </div>
        <div class="row">
            <div class="col-lg-6">
        </div>
        <textarea  class="form-control border-0 p-4"   id="comment" name="comment" placeholder="Message here..." rows="3" cols="4"></textarea>
        <p class="help-block text-danger"></p>
        <br>
        <br>
        <div class="button">
        <button class="baba" >Submit</button>
        <p class="help-block text-danger"></p>
        </div>
    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Footer Start -->
   <div class="container-fluid  text-white-50 py-5 px-sm-3 px-lg-5"
   style="margin-top: 0px; background-color: rgb(54, 54, 150);">
   <div class="row pt-5">

       <div class="col-lg-6 col-md-6 mb-5">
           <!-- <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5> -->
           <h5 style="color:white ; text-decoration: underline;">RESIDENTIAL SECURITY AND COMMERCIAL SECURITY</h5>

           <div class="d-flex flex-column justify-content-start">

               <div class="resi">
                   <a href="home-automation.html">Home Security Systems</a><br>
                   <a href="cctv.html">CCTV Systems</a><br>
                   <a href="access-control.html">Access Control</a><br>
                   <a href="intercom-installation.html">Intercoms</a><br>
                   <a href="networking.html">Networking</a>
               </div>

           </div>
       </div>
       <div class="col-lg-3 col-md-6 mb-5">
           <h5 style="color:white ; text-decoration: underline;">Business Hours</h5>

           <div class="d-flex flex-column justify-content-start">
               <i class='fas fa-business-time' style="color: white;"></i>
               <p style="color:burlywood">Mon~Fri:08:00-17:00</p>
               <p style="color:burlywood">Sat:08:00~13:00</p>
           </div>
       </div>
       <div class="col-lg-3 col-md-6 mb-5">
           <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;  text-decoration: underline;">Contact Us</h5>
           <p style="color:burlywood"><i class="fa fa-map-marker-alt mr-2"></i>92 Charles Avenue, Logan Central, QLD 4114</p>
           <p style="color:burlywood"><i class="fa fa-phone-alt mr-2"></i>+012 345 6789 </p>
           <a href="contact.html" style="text-decoration: none ;"><i
                   class="fa fa-envelope mr-2"></i>info@globalsecuritytech.com.au </a>
       </div>

   </div>
   <div class="row pt-5">

   </div>
   <div class="col-lg-3 col-md-6 mb-5">
       <h3 style="color: white ; font-style:italic;">Charles AVenue</h3>
       <p style="color:white"> 92 Charles Avenue, Logan Central, QLD 4114 </p>
       <div class="cc">
           <a href="https://www.google.com/maps/place/92+Charles+Ave,+Logan+Central+QLD+4114,+Australia/@-27.6402073,153.0968425,17z/data=!3m1!4b1!4m5!3m4!1s0x6b9144101edceba3:0xb2c7ef3a9550be8c!8m2!3d-27.6402073!4d153.0968425"
               style="background-color:black ; padding:10px 20px 10px 20px; border-radius:15px;">VIEW MAP</a>
       </div>
   </div>
</div>
</div>



   

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
 
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/26550457.js"></script>
 
  <script src="//code.tidio.co/gyxnpmg0uxkbt1ytachcw60v4ctfklwj.js" async></script>
</body>

</html>