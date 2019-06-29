<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico"> 
<link href="<?php echo base_url();  ?>assets/css/w3.css" rel="stylesheet">
    <title>KNRUHS</title>
    <style>
    .header {
        position: fixed;        
        top: 0;
        width: 100%;
    }
</style>
  </head>

  <body>
	<div id="wrap">
	 <div class="w3-container w3-teal header">
        <h4 style="text-align: center"><img src="<?php echo base_url();?>assets/images/knruhs_logo_minized.png" width="30" alt="" />Kaloji Narayana Rao University of Health Sciences</h4>        
      </div>
      <div class="w3-bar w3-purple w3-padding-16">
          &nbsp;
      </div>
    <div class="w3-bar w3-purple">
        <a class="w3-bar-item w3-button w3-mobile" href='<?php echo base_url();?>welcome' <?php if(!preg_match("^welcome$^",current_url()) && !preg_match("^public_org$^",current_url()) && !preg_match("^login/logout$^",current_url())) echo 'style="color: black"'; ?> >Home</a>
        <a class="w3-bar-item w3-button w3-mobile" href='<?php echo base_url();  ?>welcome/about_us' <?php if(!preg_match("^welcome/about_us$^",current_url())) echo 'style="color: black"'; ?> >About Us</a>
        <a class="w3-bar-item w3-button w3-mobile" href='<?php echo base_url();?>welcome/administration' <?php if(!preg_match("^welcome/administration$^",current_url())) echo 'style="color: black"'; ?> >Administration</a>
        <a class="w3-bar-item w3-button w3-mobile" href='<?php echo base_url(); ?>welcome/notification' <?php if(!preg_match("^welcome/notification$^",current_url())) echo 'style="color: black"'; ?> >Notifications</a>
        <a class="w3-bar-item w3-button w3-mobile" href='<?php echo base_url();?>welcome/contact' <?php if(!preg_match("^welcome/contact$^",current_url())) echo 'style="color: black"'; ?> >Contact</a>
        <a class="w3-bar-item w3-button w3-mobile" style="color: black" target = '_blank' href='<?php echo base_url();?>assets/documents/knruhs_terms_and_conditions.pdf'>Terms And Conditions</a>
        <a class="w3-bar-item w3-button w3-mobile" style="color: black" target = '_blank' href='http://knruhs.telangana.gov.in'>Alt Website</a>
        <a class="w3-bar-item w3-button w3-mobile" href='<?php echo base_url();?>login' <?php if(!preg_match("^login$^",current_url()) || preg_match("^login/logout$^",current_url())) echo 'style="color: black"'; ?> >Login</a>
    </div>
    
	<div class="container">