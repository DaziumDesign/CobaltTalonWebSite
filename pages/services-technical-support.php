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
          <h2 id="techsupport">Technical Support</h2>
          <p>We are here to help you and value customer feedback.</p>
          <p>The Cobalt Talon analytics Technical Support team is experienced in troubleshooting and resolving issues that arise from any of the components of your analytics architecture, so your end-users always have a high degree of confidence in the results. Our highly-skilled, experienced, and well-trained Technical Support team keeps your <a href="/products/analytic-platform">Cobalt Talon Analytic Platform</a> solution running smoothly, handles direct questions from your end-user base, and tracks your product feature modification and enhancement requests (PFMERS) for inclusion in future releases. We LOVE your feedback and input!</p>
          <p>Please contact support <a href="/contact?dept=tech_support#contact">here</a></p>
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
      $.scrollTo('/services#customer_benefits', 1000);
      $(hash + ' .acc_text').delay(1200).slideToggle()
    }
  }
});
</script>
</body>
</html>