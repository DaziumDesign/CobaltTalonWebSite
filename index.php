<!doctype html>
<?php include '../partials/_ie.php'; ?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>Cobalt Talon - Knowledge within your grasp</title>
<link rel="stylesheet" type="text/css" href="css/slidorion.css" />
<link rel="stylesheet" href="/css/colorbox.css" type="text/css" media="screen" charset="utf-8"/>
<?php include 'partials/_head.php'; ?>
</head>
<body>
<div id="root">
  <div id="wrapper">
    <div id="container">
      <div id="container2">
        <?php include 'partials/_header.php'; ?>
        <?php include 'partials/_menu.php'; ?>
        <div id="main" role="main">
          <?php include 'partials/_slider.php'; ?>
          <img src="/images/layout/hozbar.jpg" width="950" height="8">
          <div id="modules">
            <div class="module">
              <h2><a href="/products">Products</a></h2>
              <div class="module-content">
                <p>Facing items such as industry-changing legislation, new competitive threats, and constant requirements to be more efficient; companies today are asking themselves the same question – How can vast amounts of data be transformed into actionable business intelligence that improves performance?</p>
                <p>Cobalt Talon provides a comprehensive solution that enables new strategies with enhanced business intelligence. The solution covers the entire spectrum from basic reporting to advanced analytics - all delivered on best-in-class technologies which guarantee performance and agility.</p>
              </div>
              <p class="module-button"><a class="fancy" href="/products">Learn More</a></p>
            </div>
            <div class="module">
              <h2><a href="/services">Services</a></h2>
              <div class="module-content">
                <p>Critical success factors to gaining full advantage of any new system include ease-of-use, end-user adoption, system to business value mapping, and an ongoing enhancements process required to keep pace with an ever-changing world.</p>
                <p>Cobalt Talon addresses these factors by offering a full range of services to ensure customers gain optimal value. Customers access the solution via an online portal, as a service, without software or hardware acquisition or installation. Cobalt Talon also provides implementation services, training, technical support, and other extended services based on customer need.</p>
              </div>
              <p class="module-button"><a class="fancy" href="/services">Learn More</a></p>
            </div>
            <div class="module last">
            <h2>View our Demo Video</h2>
              <div class="module-content">
                <div class="video-preview"> <a href="#" class="popup"><img src="images/video-thmb.jpg" width="200" height="111" alt="Video"></a> </div>
                <h2><a href="/company/events">Events</a></h2>
                <p><strong>Healthcare Business Intelligence Summit</strong><br>
                  Minneapolis, MN<br>
                  <em>September 20, 2012</em></p>
              </div>
              <p class="module-button"><a class="fancy" href="/company/news-and-events">More Info...</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="root_footer"></div>
</div>
<?php include 'partials/_footer.php'; ?>
<script src="js/mylibs/jquery.min.js"></script>
<script src="js/mylibs/jquery.easing.js"></script>
<script src="js/mylibs/jquery.slidorion.js"></script>
<script>
	$(function() {
		$('#slidorion').slidorion({
			first: 2,
			easing: 'easeInOutCubic',
			effect: 'fade',
			autoPlay: true,
			hoverPause: true,
			first: 1,
			interval: 8000,
			speed: 1000,
		});
	});
</script>
</body>
</html>
