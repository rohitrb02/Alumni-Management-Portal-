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
              <h2 class="text-theme-colored font-36">Contact</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
               
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

      <!-- Divider: Contact -->
    <section class="divider layer-overlay overlay-white-9" data-bg-img="http://placehold.it/1920x1280">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-7">
            <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="form-transparent" action="includes/sendmail.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Subject <small>*</small></label>
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
               <!-- <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>-->
              </div>
            </form>
            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
          <div class="col-md-5">
             <h3 class="line-bottom mt-0">Get in touch with us</h3>
            <p>National Institute of Science and Technology (Autonomous)</p>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">College Location</h5>
                <p> Institute Park, Pallur Hills, Berhampur, Odisha India, Pin:761008</p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Contact Number</h5>
                <p><a href="tel:+325-12345-65478">0680-3925403/404</a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Email Address</h5>
                <p><a href="mailto:supporte@yourdomin.com">info@nist.edu</a></p>
              </div>
            </div>
            
           
            <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
            <li><a href="https://www.facebook.com/TheNISTian" target="_blank" class="fb-socialicon"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="https://www.linkedin.com/school/thenistian/" target="_blank" class="li-socialicon"><i class="fa fa-linkedin "></i></a></li>
            <li><a href="https://twitter.com/TheNISTian" target="_blank" class="tw-socialicon"><i class="fa fa-twitter "></i></a></li>
            <li><a href="https://www.youtube.com/c/TheNISTian" target="_blank" class="you-socialicon"><i class="fa fa-youtube "></i></a></li>
            <li><a href="https://www.instagram.com/TheNISTian" target="_blank" class="in-socialicon"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://www.flickr.com/people/thenistian/" target="_blank" class="fl-socialicon"><i class="fa fa-flickr"></i></a></li>		
			<li><a href="https://in.pinterest.com/TheNISTian/" target="_blank" class="pi-socialicon"><i class="fa fa-pinterest"></i></a></li>
        
		    <!--<li><a href="https://www.flickr.com/photos/187951694@N02" target="_blank" class="fl-socialicon"><i class="fa fa-flickr"></i></a></li>-->
			<li><a href="https://api.whatsapp.com/send?phone=917205326478&amp;text=Hi!%20I%20wish%20to%20ask%20you%20some%20questions%20regarding%20admission." target="_blank" class="wa-socialicon"><i class="fa fa-whatsapp"></i></a></li>
        	<!--<li><a href="" target="_blank" class="gp-socialicon"><i class="fa fa-google-plus"></i></a></li>-->
            
            
            
            
            <!--  <li><a href="https://www.facebook.com/TheNISTian" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/TheNISTian" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
            
              <li><a href="https://www.instagram.com/TheNISTian" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" data-bg-color="#D71619"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" data-bg-color="#A4CA39"><i class="fa fa-android"></i></a></li>
              <li><a href="#" data-bg-color="#4C75A3"><i class="fa fa-vk"></i></a></li>-->
            </ul>

            <!--<div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Make a Video Call</h5>
                <p>NISTSkype</p>
              </div>
            </div>-->
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid p-0">
        <div class="row">

   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3625.668084088554!2d84.748388!3d19.197502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x821828cd629bb075!2sNational%20Institute%20of%20Science%20and%20Technology%20(Autonomous)!5e1!3m2!1sen!2sin!4v1629650509729!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  <!-- Footer -->
  <?php include("includes/footer.php"); ?>
</body>
</html>