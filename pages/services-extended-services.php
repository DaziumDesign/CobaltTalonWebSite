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
          <h2 id="extserv">Extended Services</h2>
          <p>In addition to the implementation, Cobalt Talon analytics offers a range of extended services to ensure that you get the maximum value from Cobalt Talon analytics software.</p>
          <p><strong>Extended Services Include</strong></p>
          <ul>
            <li>Additional mathematical and statistical model development for other key business challenges</li>
            <li>Implementing additional reports, dashboards, scorecards, and KPIs/metrics</li>
            <li>Incorporating additional data or subject areas</li>
            <li>Further tuning application performance</li>
            <li>Additional training from Cobalt Talon analytics experts to ensure that your team gets maximum value from Cobalt Talon’s solutions</li>
          </ul>
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