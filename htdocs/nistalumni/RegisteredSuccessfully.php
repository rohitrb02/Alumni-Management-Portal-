<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="NIST Alumni" />
<meta name="keywords" content="NIST,Alumni,Alumni NIST,Engineering,Btech,Mtech" />
<meta name="author" content="Abhisikta Mishra" />

<!-- Page Title -->
<title>The Official Alumni Network of National Institute of Science & Technology</title>
<?php include("includes/external.php"); ?>
</head>
<body>
<div id="wrapper" class="clearfix">
  <!-- Header -->
  <?php include("includes/header.php"); ?>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-theme-colored font-36">Registared Successfully</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
               
                <li class="active">Registared Successfully</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

      <!-- Divider: Contact -->
 <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            
            <div class="col-md-12">
              <h3 class="line-bottom text-uppercase mt-0" style="text-align:center;">Thank You
</h3>
              
              <h4 align="center">You are Successfully Registared</h4>
              <h4  align="center">Below the Login Credential</h4>
<p  align="center">

<?php

  
   echo "<table align=\"center\" >";
   echo "<tr><td>Username</td><td>Password</td></tr>";
   echo "<tr><td>" . $_SESSION["username"] . "</td><td>" . $_SESSION["password"] . "</td></tr>";
   echo "</table>";

  
    ?></p>
	
	<h6 style="text-align:center;"> Save The Above For Your Future Reference</h6>
	
				
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
  </div>
  <!-- end main-content -->
   <!-- Footer -->
  <?php include("includes/footer.php"); ?>

</body>
</html>