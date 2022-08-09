
<?php include("includes/connection.php"); 

session_start();
session_destroy();
session_start();

if(isset($_POST['btn-qualification']))
{
     $University = $_POST['University'];
      $Degree = $_POST['Degree'];
      $Time = $_POST['Time'];
	  $College = $_POST['College'];

	  


	 $sql_qualification="INSERT INTO alumniqualification ( `University`, `Degree`, `Time`, `Location`, `status`, `college`) VALUES ( '".$University."', '".$Degree."', '".$Time."', '".$firstname."', NULL, '".$College."');";
	 echo $sql_qualification;

	if (mysqli_query($conn, $sql_qualification)) {
		echo "New record created successfully";
	  } else {
		echo "Error: " . $sql_qualification . "<br>" . mysqli_error($conn);
	  }


}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="NIST Alumni" />
<meta name="keywords" content="NIST,Alumni,Alumni NIST,Engineering,Btech,Mtech" />
<meta name="author" content="Swatikanta Mishra" />

<!-- Page Title -->
<title>The Official Alumni Network of National Institute of Science & Technology</title>
<?php include("includes/external.php"); ?>
</head>
<body>
<div id="wrapper" class="clearfix">
	<!-- DATABASE -->
<?php include("includes/connection.php"); ?> 

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
              <h2 class="text-theme-colored font-36">Complete your Profile </h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
               
                <li class="active">Complete your Profile </li>
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
            <div class="col-md-2">
&nbsp;            </div>
            <div class="col-md-10">
              <h4 class="line-bottom text-uppercase mt-0">Complete your profile Quick four steps to complete your profile!
</h4>
              
             <div class="col-sm-12">
			<div class="row">
            <div class="widget">
              
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab1" aria-expanded="true">Photograph</a></li>
                <li class=""><a data-toggle="tab" href="#tab2" aria-expanded="false">Educational Details</a></li>
                <li class=""><a data-toggle="tab" href="#tab3" aria-expanded="false">Contact Details</a></li>
                  <li class=""><a data-toggle="tab" href="#tab4" aria-expanded="false">Invite friends</a></li>
              </ul>
              <div class="tab-content">
                <div id="tab1" class="tab-pane fade active in">
                <!--tab1 content start here-->
                <div class="border-box-plain">
	<form action="https://alumni.nist.edu/start/photograph_save.dz" method="post" accept-charset="utf-8" enctype="multipart/form-data">	<div class="row">
		<div class="col-sm-12">
			<h2 class="dark-heading">Profile Photograph</h2>
			<p class="help-block">
			Please upload a profile picture you will be able to crop the picture and adjust the thumbnail <br> in 'Edit Profile' section after login.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-3 col-sm-push-0 col-xs-push-1 col-xs-10">
					<div class="tube10x" style="border:1px dashed #cfd6e7"><span class="tube10x" style="border:1px dashed #cfd6e7"><img id="img_prev" src="images/profile-icon.png" class="img-responsive"></span></div>
					<div class="tube5y visible-xs-inline-block"></div>
				</div>
				<div class="col-sm-3 hide-picture tube20">
					<p>Choose a profile picture</p>
					<!-- ------------------------------------------------------ -->
					<input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
                     <img src="admin/assets/uploads/<?php echo $_SESSION['bio']['avatar'] ?>" alt="" id="cimg">
					<!-- -------------------------------------------------------------- -->
					<p><input type="file" name="userfile" onChange="readURL(this);"></p>
					<p class="text-light"><small>Only PNG, JPEG, JPG allowed. Max file size of 2MB.</small></p>
				</div>
													<div class="col-sm-4 tube20" style="border-left: 1px solid #eeeeee">
						<a href="https://alumni.nist.edu/accounts/social_connect/authenticate/connect_fb_onboarding_pic.dz" class="disabled facebook-btn small  social-connect-btn"><span class="icon"></span><span class="btn-text">Pull from Facebook</span>
						</a>
						<p class="text text-light text-small">Your profile picture will be pulled from Facebook</p>
					</div>
								<div class="col-sm-9 show-picture tube40y" style="display: none;">
					<a href="https://alumni.nist.edu/start/education.dz" class="btn btn-success">Continue with this picture</a>
					<br>or <a id="show-picture-id" class="btn btn-text" href="https://alumni.nist.edu/start/photograph.dz#"><span class="underline">Upload a Different Picture</span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 tube20y">
			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-9">
					<input type="submit" id="hide-picture-btn"  name="btn-qualification" class="btn btn-success" value="Save and Continue" style="display: none;">
					<a data-toggle="tab" href="#tab2" aria-expanded="false" class="btn btn-text pull-right"><span class="underline">Skip &amp; Go to Next Step</span> »</a>
				</div>
			</div>
		</div>
			</div></form>
</div>
	
                <!--tab1 content end here-->
                </div>
                <div id="tab2" class="tab-pane fade">
                 <!--tab2 content start here-->
                 	<form action="https://alumni.nist.edu/start/education_save.dz" method="post" accept-charset="utf-8" data-handle-submit="1">	<input type="hidden" name="type" value="1">
	<input type="hidden" name="id" value="">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="dark-heading">Highest Educational Details</h2>
			<p class="help-block">
			Please add details of your highest level of qualification. If you have already submitted the details earlier, please add second highest educational qualification details. You may <a href="https://alumni.nist.edu/start/contact.dz" class="underline">skip this step</a> if not applicable.
			</p>
		</div>
		<div class="col-sm-12">
			<div class="row">
						<div class="form-group">
				<label class="col-sm-3 control-label">University / Institution / College <span class="req">*</span></label>
				<div class="col-sm-8">
			 		<div class="select2-container e6-education" id="s2id_e6-education" style="width: 100%;"><a href="javascript:void(0)" onClick="return false;" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen">Name of the university / institute / college</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1"><div class="select2-drop select2-display-none bigdrop select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><input type="text" name="institutution" value="" class="e6-education select2-offscreen" id="e6-education" placeholder="Name of the university / institute / college" tabindex="-1">
				</div>
			</div>

			<div class="form-group">
			<label class="col-sm-3 control-label">Degree / Program<span class="req">*</span></label>
			<div class="col-sm-8">
				 <input type="text" name="course" value="" class="form-control" placeholder="Eg: MBA - Finance">
			</div>
			</div>

			<input type="hidden" name="institute_type" value="2">


						<div class="form-group">
			<label class="col-sm-3 control-label">Time Period</label>
			<div class="col-sm-3">
					 <select name="year_from" class="form-control">
<option value="" selected="selected">Select start year</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>

<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
</select>			</div>
			<div class="col-sm-3">
					 <select name="year_to" class="form-control">
<option value="0000">Present</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
</select>			</div>
			</div>

			<div class="form-group">
			<label class="col-sm-3 control-label">Location</label>
			<div class="col-sm-6">
				<input type="text" name="city" value="" class="form-control google-establishment-location" placeholder="City/ Town of the University / Institute / College ">
			</div>
			</div>
			</div>
		</div>
		<div class="">
			<div class="col-sm-12 tube20y">
				<div class="row">
					<div class="col-sm-3 col-sm-push-0 col-xs-3 col-xs-push-9">
						<a data-toggle="tab" href="#tab1" aria-expanded="false" class="btn btn-text">« <span class="underline">Back</span></a>
					</div>
					<div class="col-sm-4 col-sm-pull-0 col-xs-pull-3 col-xs-9">
						<input type="submit" class="btn btn-success" value="Save and Continue">
					</div>
					<div class="col-sm-5 col-xs-8">
						<a data-toggle="tab" href="#tab3" aria-expanded="false" class="btn btn-text pull-right"><span class="underline">Skip &amp; Go to Next Step</span> »</a>
					</div>
				</div>
			</div>

		</div>

	</div>
	</form>
                 <!---tab2 content end here--->
                </div>
                <div id="tab3" class="tab-pane fade">
                
                  <!--tab3 content start here-->
              <form action="https://alumni.nist.edu/start/contact_save.dz" method="post" accept-charset="utf-8" data-handle-submit="1">	<div class="row">
		<div class="col-sm-12">
			<h2 class="dark-heading">Contact Information</h2>
			<p class="help-block">Contact Number and Email are visible to admin by default, You can control who should be able to view the contact information after your registration is approved</p>
		</div>
		<div class="col-sm-12">
			<div class="row">
				<!--
				<div class="form-group">
					<label class="col-sm-4 control-label">Home Phone Number</label>
					<div class="col-sm-8">
						<input type="text" name="contact[1][contact_number]"  value=""   placeholder="Eg: +91-22-27654321"  class="form-control">
					</div>
				</div>
				-->
				<!-- <input type="hidden" name="contact[1][contact_number]"  value=""> -->
				<!--
				<div class="form-group">
					<label class="col-sm-3 control-label">Mobile Number</label>
					   <label class="col-sm-6 control-label">
					        <p class="text-dark pull-left"><strong>+91-9337255075 &nbsp;&nbsp;&nbsp;&nbsp; </strong><small>(added earlier)</small></p>
				      </label>
				</div>
				-->
				<div class="form-group">
					<label class="col-sm-3 control-label">Primary Email</label>
					   <label class="col-sm-6 control-label">
					        <p class="text-dark pull-left"><strong>abhisikta.mishra@nist.edu &nbsp;&nbsp;&nbsp;&nbsp; </strong><small>(used to login)</small></p>
				      </label>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Secondary Email</label>
					<div class="col-sm-6">
						<input type="text" name="emails[1][email_id]" value="" class="form-control" placeholder="example@gmail.com">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Website / Portfolio / Blog</label>
					<div class="col-sm-6">
						<div class="input-group">
							<span class="input-group-addon">http://</span>
							<input type="text" name="social[0][social_profile_id]" value="" class="form-control" placeholder="www.yourwebsite.com">
						</div>
					</div>
					<input type="hidden" name="social[0][social_profile_type]" value="6">
				</div>
				<!-- ---------------- LinkedIn Profile --------- ---- -->
				<div class="form-group">
				<label class="col-sm-3 control-label">LinkedIn Profile</label>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">https://</span>
						<input type="text" name="social[2][social_profile_id]" value="" class="form-control" placeholder="www.linkedin.com/in/username">
					</div>
				</div>
				<input type="hidden" name="social[2][social_profile_type]" value="3">
				</div>
				<!-- ---------------- Twitter Handle --------- ---- -->
				<div class="form-group">
				<label class="col-sm-3 control-label">Twitter Handle</label>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">@</span>
						<input type="text" name="social[5][social_profile_id]" value="" class="form-control" placeholder="username only">
					</div>
				</div>
				<input type="hidden" name="social[5][social_profile_type]" value="4">
				</div>
			</div>
		</div>

		<!-- ----------- Address for Correspondence ----------- -->
				<div class="col-sm-12">
			<hr>
			<h3 class="dark-heading">Address for Correspondence</h3>
		</div>

		<div class="col-sm-12">
			<div class="row">
				<div class="form-group">
					<label class="col-sm-3 control-label">Address</label>
					<div class="col-sm-8">
						<input type="text" name="address[0][address]" value="" placeholder="H.No, Building Name, Street " class="form-control">
					</div>
				</div>
								<div class="form-group">
					<label class="col-sm-3 control-label">City</label>
					<div class="col-sm-5">
						<div class="col-sm-12 input-group has-feedback has-clear">
							<div class="select2-container e6" id="s2id_e61" style="width: 100%;"><a href="javascript:void(0)" onClick="return false;" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen">Enter City</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1"><div class="select2-drop select2-display-none bigdrop select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><input type="text" name="address[0][full]" value="" id="e61" class="e6 select2-offscreen" placeholder="Enter City" autocomplete="off" tabindex="-1">
							<small><br>Please select city from suggestions</small>
							<!-- <span class="form-control-clear glyphicon glyphicon-remove form-control-feedback hidden"></span> -->
							<!-- <input type="hidden" class="go-location-fill" value=""> -->
							<input type="hidden" value="1" name="address[0][address_type]">
							<input type="hidden" id="latitude_e61" class="latitude" value="0" name="address[0][latitude]">
							<input type="hidden" id="longitude_e61" class="longitude" value="0" name="address[0][longitude]">
						</div>
											</div>
										</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Postal Code</label>
					<div class="col-sm-2">
						<input type="text" name="address[0][pincode]" id="postal_code" value="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
		</div>
				<!-- --------------------------------------- ---------- -->
		<div class="">
			<div class="col-sm-12 tube20y">
				<div class="row">
					<div class="col-sm-3 col-sm-push-0 col-xs-3 col-xs-push-9">
												<a data-toggle="tab" href="#tab2" aria-expanded="false" class="btn btn-text">« <span class="underline">Back</span></a>
					</div>
					<div class="col-sm-4 col-sm-pull-0 col-xs-pull-3 col-xs-9">
						<input type="submit" class="btn btn-success" value="Save and Continue">
					</div>
					<div class="col-sm-5 col-xs-8">
					
						<a data-toggle="tab" href="#tab4" aria-expanded="false" class="btn btn-text pull-right"><span class="underline">Skip &amp; Go to Next Step</span> »</a>
					</div>
				</div>
			</div>
		</div>

	</div>
	</form>
              
               <!---tab4 content end here--->
             
                </div>
                
                   <div id="tab4" class="tab-pane fade">
                    <!--tab4 content start here-->
                 <div>
<div class="row">
	<!-- GOOGLE SIGNIN BUTTON -->

	
    <p class="col-md-8 col-md-offset-2 text-big text-center tube50y tube0b"> Invite your alumni by e-mail </p>
    <p class="col-md-8 col-md-offset-2 text-light text-center">You don't have to type all the e-mail IDs. Sign in to Google account and
       we will import them for you. Identify your alumni and
       send them invitations to signup onto the network with a single click.
    </p>
    </div>

    <!-- OR TAG-->
    <div class="col-md-4 col-md-offset-4 tube10y tube0b">
        <p class="text-center text-lightest"> (or) </p>
    </div>


  <div class="row">
    <div class="col-md-12 tube10y tube0b">
        <div class="col-md-4 col-md-offset-4 text-center">
         <!-- <p class="text-big text-center">Sign-in to import contacts</p> -->
        <a class="google-btn social-connect-btn handle-anchor" data-anchor-disable="0" href="https://alumni.nist.edu/invite/connect_google">
            <span class="icon"></span><span class="btn-text">Import Gmail Contacts</span>
        </a>
        </div>
    </div>
    </div>
   

    <!-- EMAIL BOX-->
    <div class="row">
    <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2 tube20y tube0b">
            <form action="https://alumni.nist.edu/invite/send_invitation.dz" method="post" accept-charset="utf-8" id="google_contacts_search" data-handle-submit="1">            <div class="form-group text-center">
				<div class="select2-container select2-container-multi" id="s2id_e6" style="width: 100%;"><ul class="select2-choices">  <li class="select2-search-field">    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen1" style="width: 517px;">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none">   <ul class="select2-results">   </ul></div></div><input type="text" id="e6" placeholder="Enter emails you want to invite" name="email_list" value="" autocomplete="off" tabindex="-1" class="select2-offscreen">
            </div>
            <span class="text-small text-lightest pull-left">Emails are seperated with commas</span>
			<div class="google_contacts_confirm"></div>
            <input type="submit" value="Invite" class="btn btn-info pull-right tube10y" id="confirm_invite" disabled="">
            </form>        </div>
    </div>

    <!-- CONTACT LIST -->

      <div class="col-md-12">
		<div class="col-md-8 col-md-offset-2">
			<hr>

			<!-- SELECTED CONTACTS -->
			<p class="tube10y tube0b">Selected Contacts : <span class="badge google_contacts_selected_count">0</span>
				<a href="https://alumni.nist.edu/invite/1.dz#" class="google_contacts_clear_all btn-link pull-right" style="display: none;">Clear all <span class="badge">X</span></a>
			</p>
			<ul class="list-group" style="width:auto; max-height:500px; overflow-y:auto;">
				<div class="google_contacts_ajax"><div class="jxlazy no-pad row">
		<div id="append" class="text-center">
				<div class="box w00 tube10y text-center">
			<em class="light ">
				Showing <span class="showing_count">0</span> record(s) of <span class="total_contacts">
				0				</span>
			</em>
	</div>
</div></div></div>
				<span class="preloader" style="display: none;"></span>
			</ul>
		</div>

       </div>
               <div class="">
            <div class="col-sm-12 tube20y">
                <div class="row">
                    <div class="col-sm-3 col-xs-3">
                        						<a data-toggle="tab" href="#tab3" aria-expanded="false" class="btn btn-text">« <span class="underline">Back</span></a>
					</div>
					<div class="col-sm-4 hidden-xs"></div>
					<div class="col-sm-5 col-xs-9">
                        						<a data-toggle="tab" href="#tab4" aria-expanded="false" class="btn btn-text pull-right"><span class="underline">Skip &amp; Go to Next Step</span> »</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    </div>
                   <!--tab4 content start here-->
             
                </div>
              </div>
            </div>

			</div>
		</div>
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
