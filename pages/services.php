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
<!--Start Main Content-->
         	<div class="content">
           		<img class="main_image" src="/images/services/main.jpg" />
              		<h2>Overview</h2>
              			<p>Now more than ever healthcare payers and providers are faced with complex business opportunities and regulatory challenges that can no longer be solved without effective analytics. Cobalt Ventures and Talon Analytics have partnered to  bring the strength of healthcare management together with healthcare analytics to form Cobalt Talon. Using the Cobalt Talon Knowledge for Healthcare, along with Cobalt business modeling, your company will be able to address these new opportunities as well as serve the traditional reporting and analytic needs required in the industry. </p>
                    <p><strong>The Cobalt Talon Knowledge Engine&#8482; for Healthcare</strong> solution covers all of the basics and integrates advanced, proprietary predictive analytic models and methodologies that enable companies to solve the most pressing industry-specific business problems. The end result is significant, tangible economic benefit and ultimately a strategic competitive advantage for Cobalt Talon customers. </p>
             		<h3><a href="/services/how-it-works">TKE: How it works</a></h3>
                <!--Recipe-->
                <div class="text_with_image">
                  <h2>Recipe for a Successful Analytic Product</h2>
                  <div class="talon_key">
                    <img src="/images/services/talon_key.jpg" />
                  </div>
                  <ul class="acc_class">
                    <li><strong><a class="acc_link" href="#">Top-notch People</a></strong></li>
                    <ul class="acc_text">
                      <li>Analytic experts that understand the basics of reporting and analytic solutions as well as cutting-edge, advanced methods such as data mining and statistical model design and deployment</li>
                      <li>Business Partners that understand how to put all the pieces together in order to leverage technology to drive results</li>
                      <li>Product experts that serve and listen to the customer and proactively design and develop solutions within the product to return the most value.</li>
                    </ul>
                  </ul>
                  <ul class="acc_class">
                    <li><strong><a class="acc_link" href="#">World-Class Technologies</a></strong></li>
                    <ul class="acc_text">
                      <li><strong><em>Teradata</em></strong> Data Warehousing Appliance (<strong>Gartner Group</strong> Magic Quadrant Leader) - The world's largest company solely focused on creating enterprise agility through database software, enterprise data warehousing, data warehouse appliances, and analytics. It’s all they do. They deliver award-winning, integrated, purpose built platforms based on the most powerful, scalable, and reliable technology platform in the industry. </li>
                      <li><strong><em>Microstrategy</em></strong> Business Intelligence Software (<strong>Gartner Group</strong> Magic Quadrant Leader) - A global leader in Business Intelligence. Millions of people use their software every day for unlimited data analysis, reports and dashboards, mobile BI, data mining, forecasting, operations management, and executive decision making. </li>
                      <li>Other technologies required for the solution include - Extract Transform and Load (ETL) tools, Metadata application and repository, data modeling tools, and more</li>
                    </ul>
                  </ul>
                  <ul class="acc_class">
                    <li><strong><a class="acc_link" href="#">Best-in-Class Analytic Methods</a></strong></li>
                    <ul class="acc_text">
                      <li>Targeted advanced analytic methodologies which are relevant to pressing business opportunities (e.g., propensity to buy models) are developed and baked into the product, taking the heavy lifting off of the customer and allowing them to take quick and impactful business action.</li>
                      <li>Industry specific, commercially available methodologies are also embedded into the solution.&nbsp; These methods are typically used to take raw data into data organized into more meaningful analytic classifications in order to align with industry benchmarks and allow customers to focus on processed information versus raw and often meaningless details.&nbsp; Though a core set of such methods will be included in the base product, customers will have the ability to pick and choose virtually any method that fits their business the best and it can be integrated into the product.&nbsp;&nbsp;&nbsp;&nbsp; </li>
                    </ul>
                  </ul>
                  <ul class="acc_class">
                    <li><strong><a class="acc_link" href="#">Product Delivery Model</a></strong></li>
                    <ul class="acc_text">
                      <li>The product is delivered as a service – Basically, the client provides access to their data, Cobalt Talon processes and enhances the data, Cobalt Talon places the raw and enhanced data into a model that resides on the database platform and accessed via the business intelligence application.</li>
                      <li>The solution is delivered to the client via a secure, dedicated connection (web-/mobile-based).&nbsp; The client has no new hardware or software to purchase.</li>
                    </ul>
                  </ul>
                </div>
                <!--Customer Benefits-->
              	<div class="customer_benefits_list text_with_image">
              		<h2 id="customer_benefits"><a class="acc_link" href="#">Customer Benefits</a></h2>
              			<p>The following lists some of the various benefits that a customer will receive by using the Cobalt Talon Analytic Product.</p>
                    <div class="customer_benefits_micro">
                      <img src="/images/services/micro.jpg" />
                       Enterprise data with MicroStrategy Mobile.
                    </div>
              				<ul>
                        <li id="customer_benefits1" class="acc_class"><a href="#" class="acc_link">Increased Business Performance</a>
                          <p class="acc_text">Significantly <strong>improved business performance</strong> measured in terms of significant, tangible, economic benefits, including increased operating/net profit and margins, cash flow from operations/EBITDA, customer service and experience, and market share</p>
                        </li>
                        
                        <li id="customer_benefits2" class="acc_class"><a href="#" class="acc_link">Strategic Competitive Advantage</a>
                        <p class="acc_text"><strong>Strategic competitive advantage</strong> gained from predictive insight into the future of customer and competitor behavior, product line profitability/ROI, and trending and patterns in performance</p>
                        
                        </li>
                        <li id="customer_benefits3" class="acc_class">
                          <a href="#" class="acc_link">Increased Efficiency of Operations + Spending</a>
                          <div class="acc_text">
                            <strong>Increased efficiency of operations and budgetary spending</strong>
                        <ul>
                          <li type="circle">Optimally allocating scarce, valuable resources, like human and financial capital, where they will deliver the greatest business benefit and ROI</li>
                        </ul>
                          </div>
                        </li>
                        <li id="customer_benefits4" class="acc_class"><a href="#" class="acc_link">Pay as You Go Model</a>
                          <div class="acc_text"><strong><em>Pay-as-you-go</em> payment model</strong> <strong>for analytics software &amp; solutions</strong> delivered as a service
                        <ul>
                          <li type="circle">Amortizes, shared infrastructure costs for accessing a world-class analytics, business intelligence, and data warehousing infrastructure and solution</li>
                          <li type="circle">Annuitizes technology expenditures on a usage basis
                            <ul>
                              <li type="square">Avoids large capital outlays for Analytics technology components, e.g., software</li>
                              <li type="square">Paying to use Analytics becomes a more predictable monthly operating expense</li>
                              <li type="square">Leverages Analytics without the technical staff and overhead costs required to manage them.</li>
                            </ul>
                          </li>
                        </ul>
                      </div>   
                        </li>
                        <li id="customer_benefits5" class="acc_class"><a href="#" class="acc_link">Reduced Implementation Risk in Rolling Out</a>
                         <div class="acc_text">Dramatically<strong> reduced implementation risk in rolling out</strong> analytics, business intelligence, and data warehousing solutions relative to “rolling your own”
                        <ul>
                          <li type="circle">Reduces technical and operational complexity underlying Analytics implementation</li>
                          <li type="circle">Analytics technology stack is operated, managed, and supported for you</li>
                        </ul>
                      </div>
                        </li>   
                        <li id="customer_benefits6" class="acc_class"><a href="#" class="acc_link">Able to Focus on Your Core Business</a>
                          <div class="acc_text">Enables your firm to stay <strong>focused on your core business</strong>, while leveraging world-class Analytics solutions and resources to solve complex and complicated business problems</div>
                        </li>
                			</ul>
            </div>
<!--Implementation-->              	
<div class="spacer"></div>
            <div class="acc_class">
               	<h2 id="implementation"><a href="/services/implementation">Implementation</a></h2>
                    	<p>Cobalt Talon targets to get you on the fast track to analysis and to provide timely insight that can make a significant difference in your daily decision-making</p>
                        <p><a href="/services/implementation">Read More</a></p>
					</div>
<!--Extended Services-->              
              <div class="acc_class extserv">
              	<h2 id="extserv"><a class="acc_link" href="#">Extended Services</a></h2>
					<p>In addition to the implementation, Cobalt Talon Analytics offers a range of extended services to ensure that you get the maximum value from Cobalt Talon Analytics software.</p>
                   	<p><a class="acc_link" href="#">Read More</a></p>
              	<div class="acc_text">      
                    <p><strong>Extended Services Include</strong></p>
						<ul>
  							<li>Additional mathematical and statistical model development for other key business challenges</li>
  							<li>Implementing additional reports, dashboards, scorecards, and KPIs/metrics</li>
  							<li>Incorporating additional data or subject areas</li>
  							<li>Further tuning application performance</li>
  							<li>Additional training from Cobalt Talon Analytics experts to ensure that your team gets maximum value from Cobalt Talon’s solutions</li>
						</ul>
                   	</div>
            	</div>
<!--Training-->
			<div class="acc_class training">
            	<h2 id="training"><a class="acc_link" href="#">Training</a></h2>
					<p>Easy-to-use Cobalt Talon Analytics software actually requires very little training</p>
                    <p><a class="acc_link" href="#">Read More</a></p>
  				<div class="acc_text">
                    <p>Since the <a href="/services/how-it-works"><strong><em>Cobalt Talon Knowledge Engine&#8482; </em></strong></a>is designed specifically to targeted business users who are engaged in solving well-defined, industry-specific problems, the end-user training regimen is amazingly simple, straightforward, and not all that time-consuming. In a matter of hours and days, Cobalt Talon’s training programs will get your end-users familiar with the full range of dashboards, scorecards, models, reports, and data drill-down capabilities included in Cobalt Talon Analytics software.</p>
                    <p>Since there is no technology to deploy on site, the only customer-side IT support required is an encrypted VPN or secure socket layer Internet (tunnel) connection, an industry-standard web browser, and OS support for a downloadable mobile app, or laptop or PC desktop app.</p>
                    <p>We look forward to you contacting Cobalt Talon soon to discuss your organization's Analytics needs.</p>
               	</div>
  			</div>
<!--Technical Support-->
			<div class="acc_class techsupport">
				<h2 id="techsupport"><a class="acc_link" href="#">Technical Support</a></h2>
				<p>We are here to help you and value customer feedback.</p>
                <p><a class="acc_link" href="#">Read More</a></p>
			<div class="acc_text">
                <p>The Cobalt Talon Analytics Technical Support team is experienced in troubleshooting and resolving issues that arise from any of the components of your analytics architecture, so your end-users always have a high degree of confidence in the results. Our highly-skilled, experienced, and well-trained Technical Support team keeps your <a href="/services/how-it-works"><strong><em>Cobalt Talon Knowledge Engine&#8482;</em></strong></a> solution running smoothly, handles direct questions from your end-user base, and tracks your product feature modification and enhancement requests (PFMERS) for inclusion in future releases. We LOVE your feedback and input!</p>
				<p>Please contact support <a href="/contact?dept=tech_support#contact">here</a></p>
            </div>
      	</div>
    </div>
<!--Start of Right Column-->
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
              <div class="action">
                <h4>Is the Cobalt Talon solution right for you?</h4>
                <a class="fancy" href="/contact#contact">Check It Out</a>
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
