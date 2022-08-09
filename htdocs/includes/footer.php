<footer id="footer" class="footer pb-0" data-bg-img="images/footer-bg.png" data-bg-color="#000616">
    <div class="container pb-20">
      <div class="row multi-row-clearfix">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark" style="color:#FFFFFF;"> 
            <p class="font-12 mt-10 mb-10"  style="color:#FFFFFF;">NIST Institute of Science and Technology,
Institute Park, Pallur Hills, Berhampur, Odisha
India, Pin:761008</p>
            <a class="btn btn-default btn-transparent btn-xs btn-flat mt-5" href="https://nist.edu/about/nistataglance.html" target="_blank">Read more</a>
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-20">
            
            <li><a href="https://www.facebook.com/TheNISTian" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="https://www.linkedin.com/school/thenistian/" target="_blank"><i class="fa fa-linkedin "></i></a></li>
            <li><a href="https://twitter.com/TheNISTian" target="_blank"><i class="fa fa-twitter "></i></a></li>
            <li><a href="https://www.youtube.com/c/TheNISTian" target="_blank"><i class="fa fa-youtube "></i></a></li>
            <li><a href="https://www.instagram.com/TheNISTian" target="_blank"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://www.flickr.com/people/thenistian/" target="_blank"><i class="fa fa-flickr"></i></a></li>		
			<li><a href="https://in.pinterest.com/TheNISTian/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
          <!--  <li><a href="https://t.me/joinchat/fVikoWJpyU01NzNl" target="_blank"><i class="fa fa-telegram "></i></a></li>-->
		    <!--<li><a href="https://www.flickr.com/photos/187951694@N02" target="_blank" class="fl-socialicon"><i class="fa fa-flickr"></i></a></li>-->
			<li><a href="https://api.whatsapp.com/send?phone=917205326478&amp;text=Hi!%20I%20wish%20to%20ask%20you%20some%20questions%20regarding%20admission." target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        	<!--<li><a href="" target="_blank" class="gp-socialicon"><i class="fa fa-google-plus"></i></a></li>-->
            
            
            
             <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>-->
            </ul>
          </div>
        </div>
        <!--<div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Twitter Feed</h5>
            <div class="list-border">
			  <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-timeline twitter-timeline-rendered" style="position: static; visibility: visible; display: inline-block; width: auto; height: 250px; padding: 0px; border: none; max-width: 100%; min-width: 180px; margin-top: 0px; margin-bottom: 0px; min-height: 200px;" data-widget-id="profile:https://twitter.com/TheNISTian" title="Twitter Timeline"></iframe>
			  
			  </div>
          </div>
        </div>-->
        <div class="col-sm-6 col-md-6">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Facebook Feed</h5>
            <div class="list-border">
			  <iframe allow="encrypted-media" allowtransparency="true" frameborder="0" height="190" scrolling="no" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTheNISTian&amp;tabs=timeline&amp;width=550px&amp;height=190&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" style="border:none;overflow:hidden" width="550px"></iframe>
			  
			  </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Contact</h5>
            <form id="footer_quick_contact_form" name="footer_quick_contact_form" class="quick-contact-form" action="includes/quickcontact.php" method="post">
              <div class="form-group">
                <input id="form_email" name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <textarea id="form_message" name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat mt-0" data-loading-text="Please wait...">Send Message</button>
              </div>
            </form>

            <!-- Quick Contact Form Validation-->
            <script type="text/javascript">
              $("#footer_quick_contact_form").validate({
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
        </div>
      </div>
    </div>
    <div class="container-fluid bg-theme-colored p-20">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="text-white font-11 m-0">Copyright &copy;2021 NIST. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="../js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="../js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>