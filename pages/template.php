<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
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
          <div class="content">Content</div>
          <div class="right_col">Rigth col</div>
        </div>
      </div><!-- eo #container -->
    </div><!-- eo #wrapper -->
  <div id="root_footer"></div>
</div> <!-- eo #root -->
<?php include '../partials/_footer.php'; ?>
</body>
</html>
