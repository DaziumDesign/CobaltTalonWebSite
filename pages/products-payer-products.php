<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
  <!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
    <!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
      <!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          <title>Products - Talon - Knowledge within your grasp</title>
<?php
include '../partials/_head.php';
?>
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
        <?php include '../partials/_products_menu.php'; ?>

          <!--Start of Main Content-->
          <div class="content">
            <h2>Payer Products</h2>
            <!--Talon Analytics of Payer Products-->
            <p>Leveraging historical data on patient claims history, patient demographic/psychographic/behavioral characteristics, we employ statistical models to:</p>

            <div id="cost" class="payer">
              <p>
              <div class="thumb_right">
                  <a rel="[health]" class="popup" href="/images/products/syst-coc-mgmt.jpg"><img src="/images/products/syst-coc-mgmt-thumb.jpg" width="150" height="101"></a>
              </div>
              <strong>Cost of Care Analytics</strong> Comprehensive
              analytic solutions deliver business insight for healthcare
              costs and trends. Cost drivers are identified. Business
              leaders study the results and determine strategies
              to address the cost drivers.
              </p>
            </div>

            <div id="admit" class="payer">
              <p>
                <div class="thumb_right">
                  <a rel="[health]" class="popup" href="/images/products/behavoral-health.jpg"><img src="/images/products/behavoral-health-thumb.jpg" width="150" height="101"></a>
                </div>
                <strong>Re-admittance Predictor</strong> group patients into risk classes, and then predict the likelihood that a given patient will require readmission after treatment, e.g., behavioral health rehabilitation (psychological/psychiatric, drug/alcohol addiction)
              </p>
            </div>

            <div id="treatment" class="payer">
              <p><div class="thumb_right">
                  <a  rel="[health]" class="popup" href="/images/products/coc-mgmt-predictor.jpg"><img src="/images/products/coc-mgmt-predictor-thumb.jpg" width="150" height="101"></a>
                </div>
                <strong>Treatment Predictor </strong> group patients into risk classes, and then predict the likelihood that a given patient will require a certain type of treatment, e.g., spinal surgery</p>
            </div>

            <div id="marketing" class="payer">
              <p>
              <div class="thumb_right">
                <a rel="[health]" class="popup" href="/images/products/marketing-analytics.jpg"><img src="/images/products/marketing-analytics-thumb.jpg" width="150" height="101"></a>
              </div>
              <strong>Marketing Analytics </strong> group members into market classes, and then predict the likelihood that a given member will opt to purchase a particular insurance product, e.g. dental insurance; that information can be used to prioritize marketing and sales efforts, target market products, test marketing message effectiveness, and then measure the effectiveness and ROI of marketing campaigns.
              </p>
            </div>

            <div id="risk" class="payer">
              <p>   <strong>Risk Scoring Analytics </strong></p>
              <p>The art of predicting health risk has become a price of admission for healthcare payers over recent years.  Now that healthcare reform regulations are eliminating traditional, upfront underwriting practices, payers are looking to perfect this art.  The Talon Knowledge Engine&#8482; enables the risk prediction process by integrating  best-in-class, claims-based risk models with other more proactive data types.  The result is a solution that allows healthcare payers to identify and manage their customer's health needs more effectively than with current capabilities.</p>
            </div>

          </div>
          <!--Start of Right Column-->
        <div class="right_col"><?php include '../partials/_products_right.php'; ?></div>

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
