<?php 
// session_start();
error_reporting(0);
include("includes/connection.php");

$sesuser=$_SESSION['Username'];
// echo $sesuser;
?>


<header class="header">
    <div class="header-top bg-deep sm-text-center" style=" border-left: solid #df9d00 10px;">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right sm-pull-none sm-text-center mt-10 sm-text-center">
                <li><a class="text-white" href="https://nist.edu/">NIST Home</a></li>
                <li><a class="text-white" href="https://www.nist.edu/downloads/downloads.html" target="_blank">News Letter</a></li>
				<li><a class="text-white" href="contact.php">Contact Us</a></li>
                <li><a class="text-white" href="signup.php">Giving Back</a></li>
               
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right sm-pull-none sm-text-center mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored"></i> <a class="text-white" href="#">+91-0680-2492421/422</a> </li>
                     <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored"></i> <a class="text-white" href="#">info@nist.edu</a> </li>
                <li class="sm-display-block mt-sm-10 mb-sm-10">
                  <a class="btn btn-colored btn-flat btn-theme-colored" href="signup.php" >Login/Register Here </a>

                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
        <div class="container">
          <nav id="menuzord-right" class="menuzord orange bg-lightest">
            <a class="menuzord-brand" href="index.php">
              <img src="images/logo-cms.png" alt="">
            </a>
            
            <ul class="menuzord-menu">
              <li class="active"><a href="index.php">Home</a>
                
              </li>
              
              
              
              <li><a href="#">Message</a>
                <ul class="dropdown">
                  <li><a href="Chairmans-Message.php">Chairman's Message</a></li>
                  <li><a href="Principals-Message.php">Principal's Message</a></li>
                  <li><a href="Registrars-Message.php">Registrar's Message</a></li>
                </ul>
              </li>
 				<li><a href="newsroom4.php">Newsroom</a> </li>
               <li><a href="showevent2.php">Events</a> </li>
               <li><a href="webinar.php">Webinar</a> </li>
               <li><a href="jobs.php">Jobs</a> </li>
               <li><a href="fund.php">Fund Raising</a> </li>



               <li><a href="#home">Gallery</a>
                <ul class="dropdown">
                  <li><a href="Photo-Gallery.php">Photo Gallery</a></li>
                  <li><a href="Video-gallery.php">Video gallery</a></li>
                </ul>
              </li>
				    <!--<li><a href="#home">Alumni Assist</a>
                <ul class="dropdown">
                  <li><a href="Volunteer.php">Volunteer</a></li>
                  <li><a href="General-Request.php">General Request</a></li>
                </ul>
              </li>-->
               <li><a href="#home">Alumni Award </a>
				  <ul class="dropdown">
                  <li><a href="pdf/NIST_Dist_Alumni_Award.pdf" target="_blank">DAA Guidelines </a></li>
                  <li><a href="pdf/NIST_Dist_Alumni_Award_NominatioForm.pdf"  target="_blank">DAA Nomination Form</a></li>
                  <li><a href="Distinguished-Alumni-Award.php">Distinguished Alumni Awards</a></li>
                  <li><a href="Star-Alumni-Award.php">Star Alumni Award</a></li>
                </ul>
				</li>     
				   <li><a href="members.php">Members</a> </li>  
			  </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>