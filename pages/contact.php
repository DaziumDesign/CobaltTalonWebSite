<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Contact Us - Talon - Knowledge within your grasp</title>
  <?php
    include '../partials/_head.php';
  ?>
</head>
<body>
  <div id="root">
    <div id="wrapper">
      <div id="container">
        <?php include '../partials/_header.php'; ?>
        <?php include '../partials/_menu.php'; ?>
        <div id="main" role="main">
          <div class="left_col">
            <ul>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div>
          <div class="top_image">top img</div>
          <div class="content">
            <h1>Contact Us</h1>
            <p>We look forward to hearing from you soon.</p>
            <p>Talon Analytics can be reached using the follow information:</p>
            <p><strong>Corporate HQ Address:</strong>	1010 Huntcliff, Suite 1300 | Atlanta, Georgia 30350</p>
            <p>
            <div class="lgray">
            <strong>Email Addresses:</strong> <br /> 
            <a href="mailto:info@talonanalytics.com">info@talonanalytics.com</a> <br />
            <a href="sales@talonanalytics.com">sales@talonanalytics.com</a><br />
            <a href="techsupport@talonanalytics.com">techsupport@talonanalytics.com</a><br />
            <a href="customerservice@talonanalytics.com">customerservice@talonanalytics.com</a>
            </div>
            <div class="lgray">
              <strong>Phone Numbers:</strong><br />
              <strong>Phone:</strong>  770.518.2444 <br />
              <strong>Customer Technical Support:</strong> 480.621.0004 or 866--- <br />
              <strong>Customer Service:</strong> 770.518.2444 or 866--- <br />
            </div>
            <div id="form_return"></div>
            <div class="contact_form">
            <h3>Contact Form</h3>
              <form id="myForm" method="post" action="__contact-script.php">
                    <input class="website" name="website" type="text"/>
                    <fieldset>
                      <label for="from_email">Your Email</label>
                      <input type="text" name="from_email" id="from_email"/>
                    </fieldset>
                    <fieldset>
                      <label>Your Phone</label>
                      <input type="text" name="phone" id="phone"/>
                    </fieldset>
                    <fieldset>
                      <label>Your Name</label>
                      <input type="text" name="name" id="name"/>
                    </fieldset>
                    <fieldset>
                      <label>Comapny Name</label>
                      <input type="text" name="company_name" id="company_name"/>
                    </fieldset>
                    <fieldset>
                      <label>Department</label>
                      <input type="text" name="department" id="department"/>
                    </fieldset>
                    <fieldset>
                      <label>Job Role</label>
                      <input type="text" name="role" id="role"/>
                    </fieldset>
                    <fieldset>
                      <label>Type of Retailer</label>
                      <input type="text" name="retailer" id="retailer"/>
                    </fieldset>
                    <fieldset>
                      <label>Number of Stores</label>
                      <input type="text" name="stores" id="stores"/>
                    </fieldset>
                    <fieldset>
                      <label>Annual Revenue</label>
                      <input type="text" name="revenu" id="revenue"/>
                    </fieldset>
                    <fieldset>
                    <label>Your Message</label>
                      <textarea name="textmessage" cols="45" rows="5" id="textmessage"></textarea>
                    </fieldset>
                    <fieldset>
                      <input class="contact-submit" type="submit" name="Submit" id="submit_button" value="Submit"/>
                    </fieldset>
              </form>
            </div>
          </div>
          <div class="right_col">Right Col</div>
        </div>
      </div><!-- eo #container -->
    </div><!-- eo #wrapper -->
  <div id="root_footer"></div>
</div> <!-- eo #root -->
<?php include '../partials/_footer.php'; ?>
<script type="text/javascript" src="js/mylibs/jquery.validate.js"></script>
<script type="text/javascript" src="js/mylibs/additional_methods.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("form").validate({
      rules: {
          from_email: {
              required: true,
              email: true
          },
          phone: {
                required: true,
                phoneUS: true
            },
          name: "required"
        },
        messages: {
            email: "Please enter a valid email address",
            phone: "Please enter a valid phone number",
            name: "Please enter your name"

        }
        
    });
//    $('form').submit(function() {
//        data = $(this).serialize()
//        $('.contact_form').slideUp('slow')
//        $('#form_return').load('__contact-script.php', data);
//        return false;
//    }); 
});
</script>
</body>
</html>
