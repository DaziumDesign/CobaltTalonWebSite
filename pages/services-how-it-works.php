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
  <title>Talon - Knowledge within your grasp</title>
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
  </head>
  <body>
    <div id="root">
      <div id="wrapper">
        <div id="container">
          <?php include '../partials/_header.php'; ?>
          <?php include '../partials/_menu.php'; ?>
          <div id="main" role="main">
            <div class="left_col">
              <h3>Services</h3>
           	  <p><a href="#">Knowledge Engine</a></p>        
                <p><a href="#">Implementation</a></p>
                <p><a href="#">Extended Services</a></p>
                <p><a href="#">Training</a></p>
                <p><a href="#">Tech Support</a></p>
            </div>
            <div class="top_image"></div>
            <div class="content">
              <h1><strong>Talon Knowledge Engine (TKE)</strong></h1>
              <h2>How It Works</h2>
              <ol>
                <li>Client sends raw, industry-standard data to Talon's processing center</li>
                <li>Talon enhances the data with industry-specific classifications, data augmentation services, and by appending predictive intelligence to relevant records; </li>
                <li>Talon models and places the enhanced data onto the high-performance analytic database platform where it can be accessed by an industry leading business intelligence application</li>
                <li>Client accesses the solution via their own private and secure analytics portal where they utilize strong reporting and analytic features and functions.</li>
                <li> Client is directly enabled to launch new business programs and/or offerings that lead to positive business results.</li>
              </ol>
              <p><img src="../images/talon-healthcare-visual.jpg" alt="Talon Healthcare Visual" width="590" height="386" border="0"></p>
            </div>
            <div class="right_col">
              <h3><a href="#">Customer Benefits</a></h3>
            	<ul>
            	  <li>Increased business performance <a href="#">(more)</a></li>
                  </ul>
                  <ul>
            	  <li>Strategic competative advantage <a href="#">(more)</a></li>
                  </ul>
            	  <ul>
                  <li>Increased efficiency of operations + spending <a href="#">(more)</a></li>
                  </ul>
                  <ul>
            	  <li>Pay as you go model <a href="#">(more)</a></li>
                  </ul>
                  <ul>
            	  <li>Reduced implementation risk in rolling out <a href="#">(more)</a></li>
                  </ul>
            	  <ul>
                  <li>Able to focus on your core business <a href="#">(more)</a></li>
                  </ul>
            	</ul>
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
