<!DOCTYPE html>
<html lang="en">
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
          <div class="menu local">
            <?php include '../partials/_services_menu.php'; ?>
          </div>
        </div>
        <div class="content">
          <div>
            <h1 id="techsupport">Implementation</h1>
            <p>The entire implementation process takes place in only 60-90 days, depending on customer data quality and integrity. Our Professional Services team works closely with each of our customers to ensure a successful implementation and get you on the fast track to analysis and to provide timely insight that can make a significant difference in your daily decision-making.</p>
            <p>The Cobalt Talon Analytics implementation includes a methodology and toolbox that allows customers to quickly begin realizing real business value from our services. We focus on the essential data elements that will allow the analytics software to more quickly and more easily provide visibility into your business, both at a macro- and micro-level.</p>
            <p>Your end-users will experience the value of the technology through role-based business intelligence dashboards and&nbsp;Cobalt Talon Analytics templates that help them gain insight, identify issues, and take advantage of market opportunities.</p>
            <p><strong>The implementation is divided into three steps:</strong><br />
            </p>
            <ol>
              <li>Data Mapping and Readiness</li>
              <li>Deployment and Data ETL (Extract, Transfer, and Load)</li>
              <li>Testing and Training.</li>
            </ol>
            <p class="center-text"><img src="/images/services/steps_graphic.jpg" /></p>
            <p><strong>Implementation includes the following components</strong></p>
            <ul>
              <li>Cobalt Talon Analytics software functionality</li>
              <li>Cobalt Talon Analytics Platform functionality</li>
              <li>Automated data loads and verification that the data is successfully and properly loaded</li>
              <li>Testing of the Cobalt Talon Analytics software, including KPIs/metrics, role-specific dashboards, scorecard templates, and mathematical and statistical model verification and validation</li>
              <li>Technical and functional end-user training</li>
            </ul>
          </div>
        </div>
        <div class="right_col">
          <div class="customer_benefits">
            <h3><a class="loc" href="#customer_benefits">Customer Benefits</a></h3>
            <ul>
              <li>Increased business performance <a href="#customer_benefits1">More</a></li>
              <li>Strategic competitive advantage <a href="#customer_benefits2">More</a></li>
              <li>Increased efficiency of operations + spending <a href="#customer_benefits3">More</a></li>
              <li>Pay as you go model <a href="#customer_benefits4">More</a></li>
              <li>Reduced implementation risk in rolling out <a href="#customer_benefits5">More</a></li>
              <li>Able to focus on your core business <a href="#customer_benefits6">More</a></li>
            </ul>
            <div class="action">
              <h4>Is the Cobalt Talon solution right for you?</h4>
              <p><a class="fancy" href="/contact#contact">Check It Out</a></p>
            </div>
          </div>
        </div>
      </div>
    <div id="root_footer"></div>
  </div>
</div>
<?php include '../partials/_footer.php'; ?>
<?php include '../partials/_scripts.php'; ?>
<script type="text/javascript">
$(document).ready(function(){
  var hash = window.location.hash
  cust_benefits(hash)
  $('.customer_benefits a').click(function() {
    cust_benefits(this.hash)
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
