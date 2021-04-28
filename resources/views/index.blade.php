<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartVisit</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ url('public/doctor/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/doctor/css/flaticon.css') }}">
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ url('public/doctor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/doctor/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/doctor/css/custom.css') }}">
    <link rel="stylesheet" href="{{ url('public/doctor/css/animate.min.css') }}"/>
</head>
<body>
    
    <header class="homeheader">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="images/greenlogo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                             About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                                Contact Us
                        </a>
                    </li>
                  </ul>
                  
                </div>
              </nav>
        </div>
    </header>

    <section class="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                   <div class="homecontent">

                    <div class="comingsoon">
                        <h1 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">Coming Soon</h1>
                        <p class="wow fadeIn" data-wow-duration="4s" data-wow-delay="0.2s">We're currently working on creating something fantastic. We'll
                            be here soon, subscribe to be notified.</p>
                        <a href="{{ url('doctor/login')}}" class="wow fadeIn" data-wow-duration="6s" data-wow-delay="0.2s">
                            <button type="button" class="editbtn">Notify Me</button>
                        </a>
                    </div>

                   </div>
                </div>
            </div>
        </div>
    </section>

    <section class="AboutSec">
       <div class="aboutprovider">
        <div class="container">
            <div class="about-heading">
                <h2>About Us</h2>
            </div>

            <div class="centerbg">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="centerhead">
                            <h5 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">TO BECOME A PROVIDER</h5>
                            <p class="wow fadeIn" data-wow-duration="4s" data-wow-delay="0.2s">Join the Team of networks of licensed professionals with same goal, improving lives of people
                                anywhere and anytime.</p>
                                
                            <div class="greenbgimg wow fadeIn" data-wow-duration="6s" data-wow-delay="0.2s">
                                <img src="images/landingimg.png" alt="">
                            </div>

                           <div class="centerheadbottomcont wow fadeIn" data-wow-duration="6s" data-wow-delay="0.2s">
                            <p>At Smart Visits, telemedicine isn’t just a virtual visit, it’s an experience worth exploring. Our
                                platform is user friendly and tailored to capturing most relevant information using artificial
                                intelligence.</p>

                            <p>We are at forefront of growth and welcome you to apply and join our exciting team!</p>
                           </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="Values">
                <div class="container">
                    <div class="valueheading">
                        <h5>Our Core Values</h5>
                    </div>
                    <div class="valueiconarea">
                        <div class="row">
                            <div class="col-md-3">
                               <div class="valuecol wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                <div class="valueicon">
                                    <img src="{{ url('public/doctor/images/icons/trust.png') }}" alt="">
                                </div>
                                <span>Trust</span>
                               </div>
                            </div>
                            <div class="col-md-3">
                               <div class="valuecol wow fadeIn" data-wow-duration="4s" data-wow-delay="0.2s">
                                <div class="valueicon">
                                    <img src="{{ url('public/doctor/images/icons/integrity.png') }}" alt="">
                                </div>
                                <span>Integrity</span>
                               </div>
                            </div>
                            <div class="col-md-3">
                               <div class="valuecol wow fadeIn" data-wow-duration="6s" data-wow-delay="0.2s">
                                <div class="valueicon">
                                    <img src="{{ url('public/doctor/images/icons/empathy.png') }}" alt="">
                                </div>
                                <span>Empathy</span>
                               </div>
                            </div>
                            <div class="col-md-3">
                               <div class="valuecol wow fadeIn" data-wow-duration="8s" data-wow-delay="0.2s">
                                <div class="valueicon">
                                    <img src="{{ url('public/doctor/images/icons/communication.png') }}" alt="">
                                </div>
                                <span>Communication</span>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>

        <div class="aboutform">
            <div class="container">
                <h5>If you are interested to join, please fill in and submit the application below.</h5>
                
                <div class="formview wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
    
                                <div class="form-group">
                                    <h6>Address</h6>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">States</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Zipcode</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label for="">Street Address</label>
                                    <input type="text" class="form-control">
                                </div>
    
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control">
                                </div>
    
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="number" class="form-control">
                                </div>
    
                                <div class="form-group">
                                    <label for="">What Position Are You Applying For?</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group aboutbtn-group">
                                    <div class="uploadbtn">
                                        <input type="file" id="file" />
                                        <label for="file">cv file upload <img src="{{ url('public/doctor/images/icons/upload.png') }}" alt=""> </label>
                                    </div>

                                    <button type="button" class="editbtn">Submit</button>
                                </div>
    
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>  

    <section class="Contactsec">
        <div class="container">
            <div class="contacthead">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Contact Us</h2>
                    </div>

                    <div class="col-lg-6">
                        <div class="contactsocial">
                            <ul>
                                <li class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li class="wow fadeIn" data-wow-duration="4s" data-wow-delay="0.2s">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="wow fadeIn" data-wow-duration="6s" data-wow-delay="0.2s">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="contactline">
                    <div class="contactcontent">
                        <h5 class="wow fadeIn" data-wow-duration="6s" data-wow-delay="0.2s">TO BECOME A PROVIDER</h5>
                        <p class="wow fadeIn" data-wow-duration="6s" data-wow-delay="0.2s">We are at forefront of growth and welcome you to apply <br>
                            and join our exciting team!</p>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="contacticonset wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="icon">
                                        <img src="images/icons/callwifi.png" alt="">
                                    </div>
                                    <span>+123456789</span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="contacticonset wow fadeIn" data-wow-duration="4s" data-wow-delay="0.2s">
                                    <div class="icon">
                                        <img src="images/icons/envelop.png" alt="">
                                    </div>
                                    <span>Admin@Smarvisits.Health</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="contactform">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contactformtitle wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                <h3>Send a message</h3>
                            </div>
                        </div>

                        <div class="col-md-7 wow fadeIn" data-wow-duration="4s" data-wow-delay="0.2s">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="" id=""  rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group contactgroup">
                                <button type="button" class="editbtn">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <footer class="footersec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="footerlogo wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                        <img src="images/greenlogo.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footerlink wow fadeIn" data-wow-duration="4s" data-wow-delay="0.2s">
                       <ul>
                           <li><a href="#">About</a></li>
                           <li><a href="#">Contact Us</a></li>
                       </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="copyright wow fadeIn" data-wow-duration="6s" data-wow-delay="0.2s">
                        <p>Copyrght Smartvisits 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



<!-- JS, Popper.js, and jQuery -->
<script src="{{ url('public/doctor/js/jquery.min.js') }}"></script>
<script src="{{ url('public/doctor/js/bootstrap.min.js') }}"></script>
<script src="{{ url('public/doctor/js/wow.min.js') }}"></script>

<script>
    new WOW().init();
</script>

</body>
</html>