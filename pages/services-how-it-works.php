<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
  <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Cobalt Talon - Knowledge within your grasp</title>
  <?php
    include '../partials/_head.php';
  ?>
  <script type="text/javascript">
$(document).ready(function() {
    $('#slider').cycle({
		fx: 'scrollLeft' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>
  
  <link rel="stylesheet" type="text/css" href="/css/colorbox.css" />
  </head>
  <body>
    <div id="root">
      <div id="wrapper">
        <div id="container">
          <?php include '../partials/_header.php'; ?>
          <?php include '../partials/_menu.php'; ?>
          <div id="main" role="main">
        <!--Start Left Column-->
              <div class="left_col">
                <?php
                include '../partials/_services_menu.php';
                ?>
              </div>
            <div class="top_image"></div>
            <div class="content">
              <h1><strong>Talon Knowledge Engine&#8482; (TKE)</strong></h1>
              <h2>How It Works</h2>
              <ol>
                <li>Client sends raw, industry-standard data to Cobalt Talon's processing center.</li>
                <li>Cobalt Talon enhances the data with industry-specific classifications, data augmentation services, and by appending predictive intelligence to relevant records. </li>
                <li>Cobalt Talon models and places the enhanced data onto the high-performance analytic database platform where it can be accessed by an industry leading business intelligence application.</li>
                <li>Client accesses the solution via their own private and secure analytics portal where they utilize strong reporting and analytic features and functions.</li>
                <li> Client is directly enabled to launch new business programs and/or offerings that lead to positive business results.</li>
              </ol>
              <em>Click image for a larger view.</em>
              <p><a href="/images/talon-healthcare-visual-lg.jpg" class="popup"><img src="/images/talon-healthcare-visual.jpg" alt="Talon Healthcare Visual" width="590" height="386" border="0"></a></p>
            </div>
            <div class="right_col">
              <div class="customer_benefits">
                <h3><a class="loc" href="#customer_benefits">Customer Benefits</a></h3>
                	<ul>
                  		<li>Increased business performance <a href="/services#customer_benefits1">More</a></li>
                  		<li>Strategic competitive advantage <a href="/services#customer_benefits2">More</a></li>
                  		<li>Increased efficiency of operations + spending <a href="/services#customer_benefits3">More</a></li>
                  		<li>Pay as you go model <a href="/services#customer_benefits4">More</a></li>
                  		<li>Reduced implementation risk in rolling out <a href="/services#customer_benefits5">More</a></li>
                  		<li>Able to focus on your core business <a href="/services#customer_benefits6">More</a></li>
                	</ul>
            	</div>
            </div>
          </div>
        </div>
        <!-- eo #container -->
      </div>
      <!-- eo #wrapper -->
      <div id="root_footer"></div>
    </div>
    <!-- eo #root -->
    <?php include '../partials/_footer.php'; ?>
  </body>
</html>
