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
              <h2 class="text-theme-colored font-36">Add New Event</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
               
                <li class="active">Add New Event</li>
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
           <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add New Event</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="EventTitle">Event Title</label>  
  <div class="col-md-4">
  <input id="EventTitle" name="EventTitle" type="text" placeholder="Event Title" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="EventDetails">Event Content</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="EventDetails" name="EventDetails">Event Content</textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filepicturebutton">Picture</label>
  <div class="col-md-4">
    <input id="filepicturebutton" name="filepicturebutton" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="StartDateTime ">Start Date Time </label>  
  <div class="col-md-4">
  <input id="StartDateTime " name="StartDateTime " type="text" placeholder="Start Date Time " class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="EndDateTime">End Date Time</label>  
  <div class="col-md-4">
  <input id="EndDateTime" name="EndDateTime" type="text" placeholder="End Date Time" class="form-control input-md">
    
  </div>
</div>
<!-- Link input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="EndDateTime">If Any Web Link</label>  
  <div class="col-md-4">
  <input id="EndDateTime" name="EndDateTime" type="text" placeholder="End Date Time" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"> &nbsp; </label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-primary">Save</button>
    <button id="button2id" name="button2id" class="btn btn-warning">Cancel</button>
  </div>
</div>

</fieldset>
</form>
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