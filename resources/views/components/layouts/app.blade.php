<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Scan Website. Community Id: FE/24/5836778312">
		<meta name="keywords" content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup">		
		<!-- SITE TITLE -->
		<title>Cybal-Tool By Ndemafia Wilmsith</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/fontawesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">	
		<!--jquery-simple-mobilemenu Css-->
        <link rel="stylesheet" href="assets/css/jquery-simple-mobilemenu.css">			
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">		
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">	
		<!-- Style CSS -->					
		<link rel="stylesheet" href="assets/css/style.css">					
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        @livewireStyles
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloaders">
			<span class="loader"></span>
		</div>
		<!-- END PRELOADER -->		

		<!-- START NAVBAR -->  
		<div id="navigation" class="navbar-light bg-faded site-navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="col-20 align-self-center">
						<div class="site-logo">
							<a href="{{route('home')}}"><img src="assets/img/logo-top.png" alt=""></a>          				
						</div>
					</div><!--- END Col -->
					
					{{-- <div class="col-60 d-flex justify-content-center">
						<nav id="main-menu">
							<ul>
								<li class="menu-item-has-children"><a href="#">Home</a>
									<ul>										
										<li><a href="index.html">Home 01</a></li>
										<li><a href="index2.html">Home 02</a></li>
										<li><a href="index3.html">Home 03</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="#">About</a>
									<ul>										
										<li><a href="about.html">About 01</a></li>
										<li><a href="about2.html">About 02</a></li>
									</ul>
								</li>				  				  
								<li class="menu-item-has-children"><a href="services.html">Services</a>
									<ul>										
										<li><a href="services.html">Services</a></li>
										<li><a href="service_details.html">Service Deails</a></li>
									</ul>
								</li>								
								<li class="menu-item-has-children"><a href="#">Pages</a>
									<ul>										
										<li><a href="project.html">Project</a></li>
										<li><a href="project_details.html">Project Details</a></li>
										<li><a href="pricing.html">Pricing Plan</a></li>
										<li><a href="team.html">Team</a></li>
										<li><a href="faq.html">Faq Page</a></li>			
										<li><a href="404.html">404</a></li>				
									</ul>
								</li>							
								<li class="menu-item-has-children"><a href="blog.html">Blog</a>
									<ul>										
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog_details.html">Blog Details</a></li>
									</ul>
								</li>							  
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div><!--- END Col --> --}}
					
					<div class="col-20 d-none d-xl-block text-end align-self-center">
						<a href="{{route('scan')}}" class="btn_one">Scan Now</a>
					</div><!--- END Col -->
					
					{{-- <ul class="mobile_menu">						
						<li><a href="#">Home</a>
							<ul class="sub-menu">										
								<li><a href="index.html">Home 01</a></li>
								<li><a href="index2.html">Home 02</a></li>	
								<li><a href="index3.html">Home 03</a></li>							
							</ul>
						</li>						
						<li><a href="#">About</a>
							<ul class="sub-menu">										
								<li><a href="about.html">About 01</a></li>
								<li><a href="about2.html">About 02</a></li>									
							</ul>
						</li>						  				  
						<li><a href="about.html">About</a></li>
						<li><a href="#">Services</a>
							<ul class="sub-menu">										
								<li><a href="services.html">Services</a></li>
								<li><a href="service_details.html">Service details</a></li>										
							</ul>
						</li>
						<li><a href="#">Pages</a>
							<ul class="sub-menu">									
								<li><a href="project.html">Project</a></li>
								<li><a href="project_details.html">Project Details</a></li>
								<li><a href="pricing.html">Pricing Plan</a></li>
								<li><a href="team.html">Team</a></li>
								<li><a href="faq.html">Faq Page</a></li>			
								<li><a href="404.html">404</a></li>							
							</ul>
						</li>			
						<li><a href="blog.html">Blog</a>
							<ul class="sub-menu">										
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog_details.html">Blog Details</a></li>
							</ul>
						</li>						
						<li><a href="contact.html">Contact</a></li>
					</ul>			 --}}
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div> 	  
		<!-- END NAVBAR -->		
        {{$slot}}
	
        	

		{{-- <!-- START COUNTER -->
		<section class="count_area counter_feature">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
						<div class="single-project">
							<h2 class="counter-num">34</h2>
							<h4>Our Experience</h4>
						</div>							
					</div>
					<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
						<div class="single-project">
							<h2 class="counter-num">99</h2>
							<h4>Customer Satisfaction</h4>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
						<div class="single-project">
							<h2 class="counter-num">184</h2>
							<h4>Our team member</h4>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
						<div class="single-project">
							<h2 class="counter-num">541</h2>
							<h4>Porject Complete</h4>
						</div>
					</div><!-- END COL -->						
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->		
		</section>
		<!-- END  HOME COUNTER -->			

		<!-- START ABOUT US -->
		<section class="ab_one section-padding">
			<div class="container">									
				<div class="row">								
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="ab_img">
							<img src="assets/img/about1.png" class="img-fluid" alt="image">
						</div>
					</div><!--- END COL -->					
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="ab_content">
							<span>About our company</span>
							<h2>This is 24/7 Cyber security operation center for your problem solution.</h2>		
						</div>
						<div class="abmv">
							<h4><img src="assets/img/check.png" alt="" /> Identifiying threats</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
						</div>
						<div class="abmv">
							<h4><img src="assets/img/check.png" alt="" /> Security management</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
						</div>	
					</div><!--- END COL -->								  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ABOUT US  -->	

		<!-- START SERVICE -->
		<section class="service_area section-padding">
			<div class="container">	
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="section-title">
							<span>Our services</span>
							<h2>What we do for your  <br />Cyber security solutions</h2>
						</div>					
					</div>
					<div class="col-lg-6 col-sm-6 col-xs-12">
						<div class="ser_btn">
							<a href="service.html" class="btn_two">View all services <i class="ti-arrow-top-right"></i></a>
						</div>
					</div>
				</div>
				<div class="row">								
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_service">
							<img src="assets/img/service1.png" class="img-fluid" alt="image">
							<h2>Malware Protection</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
							<a href="service.html">Read More <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->						
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_service">
							<img src="assets/img/service2.png" class="img-fluid" alt="image">
							<h2>Server Protection</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
							<a href="service.html">Read More <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->						
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_service">
							<img src="assets/img/service3.png" class="img-fluid" alt="image">
							<h2>Computer Security</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
							<a href="service.html">Read More <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->												  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END SERVICE -->

		  <div class="marq_text">
			<div id="supermarquee1"></div>
		  </div>
		  
		<!-- START ABOUT US -->
		<section class="ab_one section-padding">
			<div class="container">									
				<div class="row">											
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="ab_img">
							<img src="assets/img/about2.png" class="img-fluid" alt="image">
						</div>
					</div><!--- END COL -->						
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="ab_content">
							<span>Trust your cyber company</span>
							<h2>This is 24/7 Cyber security operation center for your problem solution..</h2>		
						</div>
						<div class="abmv">
							<h4><img src="assets/img/check.png" alt="" /> Security Services</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
						</div>
						<div class="abmv">
							<h4><img src="assets/img/check.png" alt="" /> Industry Certified</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor ut labore.</p>
						</div>	
					</div><!--- END COL -->						
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END ABOUT US  -->			  
		
		<!-- START PORTFOLIO -->
		<section class="port_area section-padding">
			<div class="container">													
				<div class="section-title text-center">
					<span>latest Project</span>
					<h2>We made the latest product  <br />for our client</h2>
				</div>				
				<div class="row">								
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_port">
							<img src="assets/img/portfolio/1.jpg" class="img-fluid" alt="image">
							<span>Creative</span>
							<h4>Creative Solution</h4>
							<a href="portfolio.html">View Details <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->					
					<div class="col-lg-6 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_port">
							<img src="assets/img/portfolio/2.jpg" class="img-fluid" alt="image">
							<span>Programming</span>
							<h4>Programming & AI</h4>
							<a href="portfolio.html">View Details <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->					
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_port">
							<img src="assets/img/portfolio/3.jpg" class="img-fluid" alt="image">
							<span>Cyber</span>
							<h4>Computer security</h4>
							<a href="portfolio.html">View Details <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->					
					<div class="col-lg-6 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_port">
							<img src="assets/img/portfolio/4.jpg" class="img-fluid" alt="image">
							<span>Solution</span>
							<h4>On Board project</h4>
							<a href="portfolio.html">View Details <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->					
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_port">
							<img src="assets/img/portfolio/5.jpg" class="img-fluid" alt="image">
							<span>Cyber</span>
							<h4>Computer Secutity</h4>
							<a href="portfolio.html">View Details <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->					
					<div class="col-lg-3 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_port">
							<img src="assets/img/portfolio/6.jpg" class="img-fluid" alt="image">
							<span>Protection</span>
							<h4>Family Secutity</h4>
							<a href="portfolio.html">View Details <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->											  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END PORTFOLIO -->
	
		<!-- START CHOOSE -->
		<section class="why_area section-padding" style="background-image: url(assets/img/bg/section-2.jpg);  background-size:cover; background-position: center center;">
			<div class="container">									
				<div class="row">								
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="ab_content">
							<span>Why choose us</span>
							<h2>Cyber security skills gap widens as demand for experts continues to soar.</h2>	
							<p>Lorem ipsum dolor sit amet consectetuer adipiscing elitenean commo doligula eget dolorenean massa.In enim justo, rhoncus ut, imperdiet avene natis vitae justo nullam dictum felis eu pede mollis pretium Inte ger tincid unt cras dapibus.</p>						
						</div>
						<div class="row">
							<div class="col-lg-4 col-sm-4 col-xs-12 no-padding">
								<div class="single-project2">
									<h2 class="counter-num">94%</h2>
									<h4>Quality services</h4>
								</div>							
							</div>
							<div class="col-lg-4 col-sm-4 col-xs-12 no-padding">
								<div class="single-project2">
									<h2 class="counter-num">69%</h2>
									<h4>Skilled Staff</h4>
								</div>
							</div><!-- END COL -->
							<div class="col-lg-4 col-sm-4 col-xs-12 no-padding">
								<div class="single-project2">
									<h2 class="counter-num">99%</h2>
									<h4>Support team</h4>
								</div>
							</div><!-- END COL -->	
							<div class="skill_btn">
								<a href="service.html" class="btn_one">Get your services <i class="ti-arrow-top-right"></i></a>			
								<a href="#" class="btn_two">Contact with us <i class="ti-arrow-top-right"></i></a>
							</div>	
						</div><!--- END ROW -->
					</div><!--- END COL -->	
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="sk_img">
							<img src="assets/img/computer.png" class="img-fluid" alt="image">
						</div>
					</div><!--- END COL -->							
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END CHOOSE -->	
		
		<!-- START PRICING-->
		<section class="plan_home_area section-padding">
		   <div class="container">	
				<div class="section-title text-center">
					<span>Pricing Plan</span>
					<h2>Our best pricing plan for <br />your solution</h2>
				</div>			
				<div class="row">								
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="pricingTable">
							<div class="pricingTable-header">
								<h3 class="title">Personal</h3>
							</div>
							<div class="pricing-icon">
								<i class="ti-medall"></i>
							</div>
							<ul class="pricing-content">
								<li>5 website</li>
								<li>50GB Disk Space</li>
								<li>50 Email Accounts</li>
								<li>50GB Monthly Bandwidth</li>
								<li>10 Subdomains</li>
							</ul>
							<div class="price-value">
								<span class="amount">$99</span>
								<span class="duration">/mo</span>
							</div>
							<div>
								<a href="#" class="btn_one">Purchase Now</a>
							</div>
						</div>
					</div><!-- END COL-->							
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="pricingTable">
							<div class="pricingTable-header">
								<h3 class="title">Business</h3>
							</div>
							<div class="pricing-icon">
								<i class="ti-server"></i>
							</div>
							<ul class="pricing-content">
								<li>5 website</li>
								<li>50GB Disk Space</li>
								<li>50 Email Accounts</li>
								<li>50GB Monthly Bandwidth</li>
								<li>10 Subdomains</li>
							</ul>
							<div class="price-value">
								<span class="amount">$199</span>
								<span class="duration">/mo</span>
							</div>
							<div>
								<a href="#" class="btn_one">Purchase Now</a>
							</div>
						</div>
					</div><!-- END COL-->							
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="pricingTable">
							<div class="pricingTable-header">
								<h3 class="title">Premium</h3>
							</div>
							<div class="pricing-icon">
								<i class="ti-cup"></i>
							</div>
							<ul class="pricing-content">
								<li>5 website</li>
								<li>50GB Disk Space</li>
								<li>50 Email Accounts</li>
								<li>50GB Monthly Bandwidth</li>
								<li>10 Subdomains</li>
							</ul>
							<div class="price-value">
								<span class="amount">$299</span>
								<span class="duration">/mo</span>
							</div>
							<div>
								<a href="#" class="btn_one">Purchase Now</a>
							</div>
						</div>
					</div><!-- END COL-->																				
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END PRICING -->		
		
		<!-- START TESTIMONIALS-->
		<section class="testi_home_area section-padding">
		   <div class="container">	
				<div class="section-title text-center">
					<span>Top Reviews</span>
					<h2>Take a look our top <br />Customer feedback</h2>
				</div>			
				<div class="row">								
					<div class="col-lg-12">
						<div id="testimonial-slider" class="owl-carousel">
							<div class="testimonial">
								<img src="assets/img/quote.png" alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<h4>James Clayton</h4>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
							<img src="assets/img/quote.png" alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<h4>James Simmons</h4>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
								<img src="assets/img/quote.png" alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<h4>Alex feroundo</h4>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
								<img src="assets/img/quote.png" alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<h4>Kallu Mastan</h4>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
								<img src="assets/img/quote.png" alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<h4>Devid max</h4>
								</div>
							</div><!-- END TESTIMONIAL -->
						</div><!-- END TESTIMONIAL SLIDER -->
					</div><!-- END COL  -->																							
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END TESTIMONIALS -->		

		<!-- START TEAM -->
		<section class="team_area section-padding">
			<div class="container">													
				<div class="row">													
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="section-title">
							<span>Our team member</span>
							<h2>Our Expert's team member for your solution</h2>
							<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error.</p>
							<a href="#" class="btn_one">View all members <i class="ti-arrow-top-right"></i></a>
						</div>					
					</div><!--- END COL -->					
					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">	
						<div class="row">								
							<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<div class="single_team">
									<img src="assets/img/team/team1.jpg" class="img-fluid" alt="image">
									<h4>William Smith</h4>
									<p>Brand designer</p>
								</div>
							</div><!--- END COL -->					
							<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<div class="single_team">
									<img src="assets/img/team/team2.jpg" class="img-fluid" alt="image">
									<h4>Tayer Kader</h4>
									<p>Chiter Gruop</p>
								</div>
							</div><!--- END COL -->					
							<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<div class="single_team">
									<img src="assets/img/team/team3.jpg" class="img-fluid" alt="image">
									<h4>Kuba Samsu</h4>
									<p>Teka dibe bacchu</p>
								</div>
							</div><!--- END COL -->					
							<div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<div class="single_team">
									<img src="assets/img/team/team4.jpg" class="img-fluid" alt="image">
									<h4>Biddut Momtaj</h4>
									<p>Raster meye</p>
								</div>
							</div><!--- END COL -->															  
						</div><!--- END ROW -->
					</div><!--- END COL -->		
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END TEAM -->	
		
		<!-- START NEWSLETTER -->
		<section class="newsletter_area section-padding">
			<div class="container">
				<div class="row text-center">			
					<div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="subs_form">
							<h3>Subscribe to our newsletter, We don't make any spam.</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim</p>
							<form action="#" class="home_subs">
								<input type="text" class="subscribe__input" placeholder="Enter your Email Address">
								<button type="button" class="subscribe__btn"><i class="ti-new-window"></i></button>
							</form>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->	
			</div><!--- END CONTAINER -->	
		</section>
		<!-- END NEWSLETTER -->		

		<!-- START BLOG -->
		<section class="blog_area section-padding">
			<div class="container">													
				<div class="section-title text-center">
					<span>Blog & News</span>
					<h2>See our latest blog and <br />news from us</h2>
				</div>
				<div class="row">								
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_blog">
							<img src="assets/img/blog/1.jpg" class="img-fluid" alt="image">
							<span><a href="single_blog.html">Security</a></span>	
							<span>February 15, 2024</span>	
							<h3><a href="blog.html">How can you improvement to your business policy for the better product.</a></h3>
							<a href="blog.html" class="blog_btn">View Details <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->						
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_blog">
							<img src="assets/img/blog/2.jpg" class="img-fluid" alt="image">
							<span><a href="single_blog.html">Security</a></span>	
							<span>February 15, 2024</span>	
							<h3><a href="blog.html">people poputation change anything what your need for your next generation.</a></h3>
							<a href="blog.html" class="blog_btn">View Details <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->						
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_blog">
							<img src="assets/img/blog/3.jpg" class="img-fluid" alt="image">
							<span><a href="single_blog.html">Security</a></span>	
							<span>February 15, 2024</span>	
							<h3><a href="blog.html">Improve your business so that you can stay in your local business in next month.</a></h3>
							<a href="blog.html" class="blog_btn">View Details <i class="ti-arrow-top-right"></i></a>
						</div>
					</div><!--- END COL -->												  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END BLOG -->	 --}}

	<!-- START FOOTER -->
	{{-- <div class="footer section-padding" style="background-image: url(assets/img/bg/section-2.jpg);  background-size:cover; background-position: center center;">
		<div class="container">				
			<div class="row">						
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_footer">
						<a href="index.html"><img src="assets/img/logo.png" alt=""></a>         
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim.</p>
						<div class="social_profile">
							<ul>
								<li><a href="#" class="f_facebook"><i class="ti-facebook" title="Facebook"></i></a></li>
								<li><a href="#" class="f_twitter"><i class="ti-twitter" title="Twitter"></i></a></li>
								<li><a href="#" class="f_instagram"><i class="ti-instagram" title="Instagram"></i></a></li>
								<li><a href="#" class="f_linkedin"><i class="ti-linkedin" title="LinkedIn"></i></a></li>
							</ul>
						</div>
					</div>			
				</div><!--- END COL -->						
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_footer">
						<h4>About Company</h4>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Blog & news</a></li>
							<li><a href="#">Our Portfolio</a></li>
							<li><a href="#">Pricing plan</a></li>
							<li><a href="#">Asked Question</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div><!--- END COL -->	
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_footer">
						<h4>Our services</h4>
						<ul>
							<li><a href="#">Network protection</a></li>
							<li><a href="#">Computer security</a></li>
							<li><a href="#">Cyber solution</a></li>
							<li><a href="#">Locker security</a></li>
							<li><a href="#">Code Inspection</a></li>						
							<li><a href="#">Folder Duplication</a></li>						
						</ul>
					</div>
				</div><!--- END COL -->	
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_footer">
						<h4>Download App</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
						<a href="index.html"><img src="assets/img/play.png" class="foot_img" alt=""></a>  
						<a href="index.html"><img src="assets/img/app.png" class="foot_img" alt=""></a>  
					</div>
				</div><!--- END COL -->	
			</div><!--- END ROW -->		
			<div class="row fc">
				<div class="col-lg-6 col-sm-6 col-xs-12">
					<div class="footer_copyright">
						<p>&copy; 2024. All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6 col-xs-12">
					<div class="footer_menu">
						<ul>
							<li><a href="#">Terms of use</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Cookie Policy</a></li>
						</ul>
					</div>
				</div><!-- END COL -->
			</div>				
		</div><!--- END CONTAINER -->
	</div> --}}
	<!-- END FOOTER -->			
	
    @livewireScripts
	<!-- Latest jQuery -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
	<!-- Latest compiled and minified Bootstrap -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- modernizer JS -->		
		<script src="assets/js/modernizr-2.8.3.min.js"></script>	
	<!-- jquery-simple-mobilemenu.min -->
		<script src="assets/js/jquery-simple-mobilemenu.js"></script>		
	<!-- owl-carousel min js  -->
		<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>					
	<!-- magnific-popup js -->               
		<script src="assets/js/jquery.magnific-popup.min.js"></script>						
	<!-- countTo js -->
		<script src="assets/js/jquery.inview.min.js"></script>					
	<!-- stellar js -->
		<script src="assets/js/jquery.stellar.min.js"></script>				
	<!-- scrolltopcontrol js -->
		<script src="assets/js/scrolltopcontrol.js"></script>	
	<!-- jquery.bubble js -->	
		<script src="assets/js/superMarquee.min.js"></script>			
	<!-- WOW - Reveal Animations When You Scroll -->
		<script src="assets/js/wow.min.js"></script>				
	<!-- scripts js -->
		<script src="assets/js/scripts.js"></script>
    </body>
</html>