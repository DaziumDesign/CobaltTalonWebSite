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
          <div class="full_col">
            <img style="width: 688px;" class="main_image" src="images/contact.jpg" />
            <h1>Contact Us</h1>
            <p>We look forward to hearing from you soon.</p>
            <p>Talon Analytics can be reached using the follow information:</p>
            <div class="lgray address">
              <strong>Corporate HQ Address:</strong>  <br />1010 Huntcliff, Suite 1300 <br />  Atlanta, Georgia 30350
            </div>
            <div class="lgray email">
            <strong>Email Addresses:</strong> <br /> 
            <a href="mailto:info@talonanalytics.com">info@talonanalytics.com</a> <br />
            <a href="sales@talonanalytics.com">sales@talonanalytics.com</a><br />
            <a href="techsupport@talonanalytics.com">techsupport@talonanalytics.com</a><br />
            <a href="customerservice@talonanalytics.com">customerservice@talonanalytics.com</a>
            </div>
            <div class="lgray phone">
              <strong>Phone Numbers:</strong><br />
              <em>Main Line:</em><br />  770.518.2444 <br /> <br />
              <em>Customer Technical Support:</em> <br />480.621.0000 <br /> <br />
              <em>Customer Service:</em> <br />770.518.2444 <br />
            </div>
            <div class="contact_form">
            <h3>Contact Form</h3>
            <div id="form_return"></div>
              <form id="contact_form" method="post" action="#">
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
                      <label>Company Name</label>
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
                      <label>Industry</label>
                      <input type="text" name="retailer" id="retailer"/>
                    </fieldset>
                    <fieldset>
                      <label>Location</label>
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
        },
        submitHandler: function() {
                data = $("form#contact_form").serialize()
                $('#contact_form').slideUp('slow')
                $('#form_return').load('partials/__contact-script.php', data);
                return false;
        }
        
        
    });
});
</script>
</body>
</html>
