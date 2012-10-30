<!doctype html>
<?php include '../partials/_ie.php'; ?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Cobalt Talon - Knowledge Within Your Grasp</title>
<?php include '../partials/_head.php'; ?>
</head>
<body>
<div id="root">
  <div id="wrapper">
    <div id="container">
      <?php include '../partials/_header.php'; ?>
      <?php include '../partials/_menu.php'; ?>
      <div id="main" role="main">
        <div class="left_col">
          <?php include '../partials/_services_menu.php'; ?>
        </div>
        <div class="content">
        	<h1>Services</h1>
          <h2 id="training">Training</h2>
          <p>Easy-to-use Cobalt Talon analytics software actually requires very little training</p>
          <p>Since the <a href="/products/how-it-works"><strong><em>Cobalt Talon Analytics Platform</em></strong></a> is designed specifically to targeted business users who are engaged in solving well-defined, industry-specific problems, the end-user training regimen is amazingly simple, straightforward, and not all that time-consuming. In a matter of hours and days, Cobalt Talon’s training programs will get your end-users familiar with the full range of dashboards, scorecards, models, reports, and data drill-down capabilities included in Cobalt Talon analytics software.</p>
          <p>Since there is no technology to deploy on site, the only customer-side IT support required is an encrypted VPN or secure socket layer Internet (tunnel) connection, an industry-standard web browser, and OS support for a downloadable mobile app, or laptop or PC desktop app.</p>
          <p>We look forward to you contacting Cobalt Talon soon to discuss your organization's analytics needs.</p>
        </div>
        <div class="right_col">
          <?php include '../partials/_services_right.php'; ?>
      </div>
    </div>
  </div>
  <div id="root_footer"></div>
</div>
<?php include '../partials/_footer.php'; ?>
<script type="text/javascript">
$(document).ready(function(){
  var hash = window.location.hash cust_benefits(hash)
  $('.customer_benefits a').click(function() {cust_benefits(this.hash)
    return false
  })
  function cust_benefits(hash) {
    var needle=/\#customer_benefits(\d+)/
    var match = hash.match(needle)
    if(match) {
      $.scrollTo('#customer_benefits', 1000);
      $(hash + ' .acc_text').delay(1200).slideToggle()
    }
  }
});
</script>
</body>
</html>