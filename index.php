<?php
include_once('functions.php');
?>
<!DOCTYPE html>
<html lang="de">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="OIMS - Online Inventar Management System">
      <!-- SITE TITLE -->
      <title>OIMS - Online Inventar Management System</title>
      <!-- STYLESHEETS -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <!-- FAVICON  -->
      <link rel="icon" href="img/favicon.ico">
   </head>
   <body>
      <!-- PRELOADER -->
      <div id="preloader">
         <div class="spinner"></div>
      </div>
      <!-- MAIN NAV -->
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container">
            <div class="navbar-header page-scroll">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
               <!-- MAIN NAV LOGO -->
               <a class="logo page-scroll" href="#header"> <img src="img/logo.png" class="img-responsive" alt=""> </a>
            </div>
            <div class="collapse navbar-collapse" id="main-menu">

               <!-- MAIN NAV LINKS -->
               <ul class="nav navbar-nav navbar-right">
                  <li> <a class="page-scroll" href="#services">Über</a> </li>
                  <li> <a class="page-scroll" href="#features">Features</a> </li>
                  <li> <a class="page-scroll" href="#pricing">Preise</a> </li>
                  <li> <a class="page-scroll" href="#team">Team</a> </li>
                  <li> <a class="page-scroll" href="#clients">Kunden</a> </li>
                  <li> <a class="page-scroll" href="#contact">Kontakt</a> </li>
                  <li> <a href="#MeinInventarDialog" data-toggle="modal" style="background-color: #00786c">Mein Inventar</a> </li>
               </ul>
               <!-- END MAIN NAV LINKS -->
            </div>
         </div>
      </nav>
      <!-- END MAIN NAV -->

      <!-- Modal HTML -->
      <div id="MeinInventarDialog" class="modal fade">
         <div class="modal-dialog modal-login">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title">Firmen-ID eingeben</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body">
			   <div class="alert alert-danger" role="alert" id="IdNotFound" style="display: none;"></div>
				 <div class="form-group">
					<input type="text" class="form-control" id="IdToCheck" name="id" placeholder="Firmen-ID">
				 </div>
				 <div class="form-group">
					<button id="btnCheckID" type="submit" class="btn btn-primary btn-lg btn-block login-btn">zum Inventar</button>
				 </div>
               </div>
               <div class="modal-footer">
                  <a data-toggle="collapse" href="#IDVergessen" role="button" aria-expanded="false" aria-controls="IDVergessen">ID vergessen?</a>
                  <div class="collapse" id="IDVergessen">Die Firmen-ID erhalten Sie von Ihrem IT-Administrator.</div>
               </div>
            </div>
         </div>
		 <!-- Redirect to Dashboard -->
		 <form id="toDashboard" action="/dashboard/" method="post">
		 <input type="hidden" id="RedirectToId" name="id" value="">
		 </form>
      </div>
      <!-- Modal HTML -->

      <!-- HEADER -->
      <header id="header">
         <div class="container">
            <div class="intro-text">
               <h1 class="intro-lead-in">OIMS, glückselige Innovation</h1>
               <span class="intro-heading">Ohne Sorgen — unter völliger Kontrolle.</span>
               <div class="header-buttons"> <a href="#pricing" class="primary-button page-scroll">Unsere Preise</a></div>
               <div class="header-dashboard"> <img src="img/header.png" class="dashboard" alt=""> </div>
            </div>
         </div>
         <div id="particles-js"></div>
      </header>
      <!-- END HEADER -->
      <!-- SERVICES -->
      <section id="services">
         <div class="container">
            <div class="row">
               <!-- SERVICES HEADING -->
               <div class="col-lg-12 text-center">
                  <h2 class="section-heading">Moderne Werkzeuge</h2>
                  <span class="separator"></span>
                  <p class="section-subheading ">Partnerschaft oder temporäre Organisation perfekt gestaltet.</p>
               </div>
               <!-- END SERVICES HEADING -->
            </div>
            <div class="row">
               <div class="col-md-3">
                  <i class="nc-icon-outline diamond"></i>
                  <h4 class="service-heading">TEXT HERE! #1</h4>
                  <p class="">JUST BUY IT #1</p>
               </div>
               <div class="col-md-3">
                  <i class="nc-icon-outline evil"></i>
                  <h4 class="service-heading">TEXT HERE! #2</h4>
                  <p class="">JUST BUY IT #2</p>
               </div>
               <div class="col-md-3">
                  <i class="nc-icon-outline chat"></i>
                  <h4 class="service-heading">TEXT HERE! #3</h4>
                  <p class="">JUST BUY IT #3</p>
               </div>
               <div class="col-md-3 last">
                  <i class="nc-icon-outline banana"></i>
                  <h4 class="service-heading">TEXT HERE! #4</h4>
                  <p class="">JUST BUY IT #4</p>
               </div>
            </div>
         </div>
      </section>
      <!-- END SERVICES -->
      <!-- FEATURES -->
      <section id="features" class="gray-bg">
         <div class="container">
            <div class="row">
               <div id="features-tabs" class="features-tabs">
                  <!-- TAB 1 -->
                  <div id="features-tab1">
                     <div class="row">
                        <h2 class="section-heading">Title #1</h2>
                        <p class="section-subheading ">Subheading #1</p>
                     </div>
                     <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                     </ul>
                     <a href="#" class="primary-button button-inverse">Online Version</a> <img src="img/mockups/tab1.png" class="fadeRight animated" alt=""> 
                  </div>
                  <!-- END TAB 1 -->
                  <!-- TAB 2 -->
                  <div id="features-tab2">
                     <div class="row">
                        <h2 class="section-heading">Title #2</h2>
                        <p class="section-subheading ">Subheading #2</p>
                     </div>
                     <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                     </ul>
                     <a href="#" class="primary-button button-inverse">Desktop Version herunterladen</a> <img src="img/mockups/tab1.png" class="fadeRight animated" alt=""> 
                  </div>
                  <!-- END TAB 2 -->
                  <!-- TAB 3 -->
                  <div id="features-tab3">
                     <div class="row">
                        <h2 class="section-heading">Title #3</h2>
                        <p class="section-subheading ">Subheading #3</p>
                     </div>
                     <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                     </ul>
                     <a href="#" class="primary-button button-inverse">Android Version herunterladen</a> <img src="img/mockups/tab2.png" class="fadeRight animated" alt=""> 
                  </div>
                  <!-- END TAB 3 -->
                  <!-- FEATURES TABS -->
                  <ul class='tabs'>
                     <li class='tab col-md-4'>
                        <a href="#features-tab1"> <span class="triangle">
                        <span class="inner-triangle"></span> </span>Online Version </a>
                     </li>
                     <li class='tab col-md-4'>
                        <a href="#features-tab2"> <span class="triangle">
                        <span class="inner-triangle"></span> </span>Desktop Version </a>
                     </li>
                     <li class='tab col-md-4'>
                        <a href="#features-tab3"> <span class="triangle">
                        <span class="inner-triangle"></span> </span>Android Version </a>
                     </li>
                  </ul>
                  <!-- END FEATURES TABS -->
               </div>
            </div>
         </div>
      </section>
      <!-- END FEATURES -->
      <!-- SOLUTIONS -->
      <section id="solutions" class="gray-bg">
         <div class="container">
            <div class="row">
               <!-- SOLUTIONS HEADING -->
               <div class="col-lg-12 text-center">
                  <h2 class="section-heading">Unsere Lösungen</h2>
                  <span class="separator"></span>
                  <p class="section-subheading ">Lorem ipsum dolor sit amet</p>
               </div>
               <!-- END SOLUTIONS HEADING -->
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="chart" data-percent="99">99 <span class="percent">%</span> </div>
                  <div class="chart-content">
                     <i class="nc-icon-outline sign"></i>
                     <h4 class="service-heading">Lorem ipsum</h4>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="chart" data-percent="89">89 <span class="percent">%</span> </div>
                  <div class="chart-content">
                     <i class="nc-icon-outline sun-cloud"></i>
                     <h4 class="service-heading">Lorem ipsum</h4>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="chart" data-percent="79">79 <span class="percent">%</span> </div>
                  <div class="chart-content">
                     <i class="nc-icon-outline vespa"></i>
                     <h4 class="service-heading">Lorem ipsum</h4>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- END SOLUTIONS -->
      <!-- PRICING TABLES -->
      <section id="pricing">
         <div class="container">
            <div class="row">
               <!-- PRICING TABLES HEADING -->
               <div class="col-lg-12 text-center">
                  <h2 class="section-heading">Simple Preisgestaltung. Keine Überraschungen.</h2>
                  <span class="separator"></span>
                  <p class="section-subheading ">Lorem ipsum dolor sit amet</p>
               </div>
               <!-- END PRICING TABLES HEADING -->
            </div>
            <div class="row outer-margin">
               <!-- PRICING TABLE 1 -->
               <div class="col-md-4">
                  <div class="row pricing-title">STANDARD</div>
                  <div class="row pricing">
                     <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="row">
                           <span class="pricing-price">
                           <span class="currency">€</span>999 </span> <span class="pricing-time">/Mo</span>
                           <div class="billing-time">für einen Benutzer</div>
                        </div>
                     </div>
                     <div class="pricing-row selected"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-plus"></i>Lorem ipsum dolor sit amet:
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row button-container"><a href="/dashboard/signup.php?plan=1" class="secondary-button secondary-button-inverse">JETZT LOSLEGEN</a></div>
                  </div>
               </div>
               <!-- PRICING TABLE 2 -->
			   <div class="col-md-4">
                  <div class="row pricing-title">Trial</div>
                  <div class="row pricing active">
                     <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="row">
                           <span class="pricing-price">Kostenlos</span>
                           <div class="billing-time">30 Tage testen</div>
                        </div>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row button-container">
						<a href="/dashboard/signup.php?plan=2" class="secondary-button secondary-button">JETZT LOSLEGEN</a>
					</div>
                  </div>
               </div>
               <!-- PRICING TABLE 3 -->
               <div class="col-md-4">
                  <div class="row pricing-title">PREMIUM</div>
                  <div class="row pricing">
                     <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="row">
                           <span class="pricing-price">
                           <span class="currency">€</span>999 </span> <span class="pricing-time">/Mo</span>
                           <div class="billing-time">für einen Benutzer</div>
                        </div>
                     </div>
                     <div class="pricing-row selected"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-plus"></i>Lorem ipsum dolor sit amet:
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">  
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row"> <span class="pricing-value">
                        <span class="pricing-option">
                        <i class="fa fa-check"></i>Lorem ipsum dolor sit amet
                        </span> </span>
                     </div>
                     <div class="pricing-row button-container"><a href="/dashboard/signup.php?plan=0" class="secondary-button secondary-button-inverse">JETZT LOSLEGEN</a></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- PRICING TABLES -->
      <!-- TESTIMONIALS -->
      <section id="testimonials" class="gray-bg">
         <div class="container">
            <div class="row">
               <div class="slider">
                  <!-- TESTIMONIALS 1 -->
                  <div class="tt-content">
                     <h3>
                        <span class="tt-quote">“</span>
                        <span class="tt-quote tt-quote-right">”</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     </h3>
                     <div class="tt-container">
                        <h4>Name #1</h4>
                        <span class="content">President</span> 
                     </div>
                  </div>
                  <!-- TESTIMONIALS 2 -->
                  <div class="tt-content">
                     <h3>
                        <span class="tt-quote">“</span>
                        <span class="tt-quote tt-quote-right">”</span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                     </h3>
                     <div class="tt-container">
                        <h4>Name #2</h4>
                        <span class="content">Vice president</span> 
                     </div>
                  </div>
                  <!-- TESTIMONIALS 3 -->
                  <div class="tt-content">
                     <h3>
                        <span class="tt-quote">“</span>
                        <span class="tt-quote tt-quote-right">”</span>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                     </h3>
                     <div class="tt-container">
                        <h4>Name #3</h4>
                        <span class="content">President</span> 
                     </div>
                  </div>
               </div>
               <!-- TESTIMONIALS IMAGE CAPTIONS -->
               <div class="tt-images">
                  <div class="tt-image"> <img width="80" height="80" src="img/testimonials/testimonial1.png" alt="team"> </div>
                  <div class="tt-image"> <img width="80" height="80" src="img/testimonials/testimonial2.png" alt="team"> </div>
                  <div class="tt-image"> <img width="80" height="80" src="img/testimonials/testimonial3.png" alt="team"> </div>
               </div>
               <!-- END TESTIMONIALS IMAGE CAPTIONS -->
            </div>
         </div>
      </section>
      <!-- END TESTIMONIALS -->
      <!-- TEAM -->
      <section id="team">
         <div class="container">
            <div class="row">
               <!-- TEAM HEADING -->
               <div class="col-lg-12 text-center">
                  <h2 class="section-heading">Unser Team</h2>
                  <span class="separator"></span>
                  <p class="section-subheading ">Text here!</p>
               </div>
               <!-- END TEAM HEADING -->
            </div>
            <div class="row outer-margin">
               <!-- TEAM 1 -->
               <div class="col-xs-6 team-wrapper">
                  <div class="row team-member">
                     <img src="img/team/team1.jpg">
                     <div class="team-content">
                        <h5>E. A.</h5>
                        <span class="team-subtitle">Web Developer</span>
                        <p>Lorem ipsum dolor sit amet</p>
                     </div>
                  </div>
               </div>
               <!-- TEAM 2 -->
               <div class="col-xs-6 team-wrapper">
                  <div class="row team-member">
                     <img src="img/team/team1.jpg">
                     <div class="team-content">
                        <h5>J. K.</h5>
                        <span class="team-subtitle">Web Developer</span>
                        <p>Lorem ipsum dolor sit amet</p>
                     </div>
                  </div>
               </div>
               <!-- TEAM 3 -->
               <div class="col-xs-6 team-wrapper">
                  <div class="row team-member">
                     <img src="img/team/team1.jpg">
                     <div class="team-content">
                        <h5>A. L.</h5>
                        <span class="team-subtitle">Web Developer</span>
                        <p>Lorem ipsum dolor sit amet</p>
                     </div>
                  </div>
               </div>
               <!-- TEAM 4 -->
               <div class="col-xs-6 team-wrapper">
                  <div class="row team-member">
                     <img src="img/team/team1.jpg">
                     <div class="team-content">
                        <h5>T. W.</h5>
                        <span class="team-subtitle">Web Developer</span>
                        <p>Lorem ipsum dolor sit amet</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- END TEAM -->
      <!-- CLIENTS -->
      <section id="clients" class="gray-bg">
         <div class="container">
            <div class="slider">
               <div class="clients-content">
                <img src="img/logos/logo1.png">
               </div>
               <div class="clients-content">
                <img src="img/logos/logo2.png">
               </div>
               <div class="clients-content">
                  <img src="img/logos/logo3.png">
               </div>
               <div class="clients-content">
                  <img src="img/logos/logo4.png"> 
               </div>
               <div class="clients-content">
                  <img src="img/logos/logo5.png">
               </div>
               <div class="clients-content">
                  <img src="img/logos/logo1.png"> 
               </div>
               <div class="clients-content">
                  <img src="img/logos/logo2.png"> 
               </div>
               <div class="clients-content">
                 <img src="img/logos/logo3.png"> 
               </div>
               <div class="clients-content">
                  <img src="img/logos/logo4.png">
               </div>
               <div class="clients-content">
                  <img src="img/logos/logo5.png">
               </div>
               <div class="clients-content">
                  <img src="img/logos/logo1.png">
               </div>
            </div>
         </div>
      </section>
      <!-- END CLIENTS -->
      <!-- CONTACT -->
      <section id="contact">
         <div class="contact-map-container">
            <!-- GOOGLE MAP-->
            <div id="map"></div>
         </div>
         <div class="container">
            <div class="contact-form-container">
               <!-- CONTACT HEADING -->
               <div class="row">
                  <h2 class="section-heading">Kontaktieren Sie uns</h2>
				  <div class="alert alert-warning section-subheading" role="alert">Bitte beachten Sie, dass die Bearbeitung von Anfragen aufgrund der Ausbreitung des Coronavirus (COVID-19) in Europa derzeit deutlich mehr Zeit in Anspruch nimmt als gewöhnlich.</div>
               </div>
               <!-- END CONTACT HEADING -->
               <div class="row">
                  <!-- CONTACT FORM -->
                  <form name="sentMessage" id="contactForm" novalidate>
                     <div class="row">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Pflichtfeld">
                           <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group pull-right">
                           <input type="text" class="form-control" placeholder="Firma" id="company" required data-validation-required-message="Pflichtfeld">
                           <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control" placeholder="E-Mail" id="email" required data-validation-required-message="Pflichtfeld">
                           <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group pull-right">
                           <input type="tel" class="form-control" placeholder="Telefonnummer" id="tel" required data-validation-required-message="Pflichtfeld">
                           <p class="help-block text-danger"></p>
                        </div>
						
                        <div class="form-group form-textarea">
                           <textarea class="form-control" placeholder="Bitte beschreiben Sie Ihre Anfrage." id="message" required data-validation-required-message="Pflichtfeld"></textarea>
                           <p class="help-block text-danger"></p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="text-center">
                           <div id="success"></div>
                           <button type="submit" class="btn btn-xl">ABSCHICKEN</button>
                        </div>
                     </div>
                  </form>
                  <!-- END CONTACT FORM -->
               </div>
            </div>
         </div>
      </section>
      <!-- END CONTACT -->
      <!-- FOOTER -->
      <footer>
         <div class="container">
            <div class="row">
               <!-- UPPER FOOTER -->
               <div class="upper-footer">
                  <div class="pull-left">
                     <img src="img/logo.png" class="img-responsive">
                     <p>Ohne Sorgen —
                        <br>unter völliger Kontrolle. 
                     </p>
                  </div>
                  <div class="pull-right">
                     <ul class="footer-nav">
                        <li class=""> <a class="page-scroll" href="#services">Über</a> </li>
                        <li class=""> <a class="page-scroll" href="#features">Features</a> </li>
                        <li class=""> <a class="page-scroll" href="#pricing">Preise</a> </li>
                        <li class="active"> <a class="page-scroll" href="#team">Team</a> </li>
                        <li class=""> <a class="page-scroll" href="#clients">Kunden</a> </li>
                     </ul>
                     <ul class="footer-secondary-nav">
                        <li class="">
                           <a class="page-scroll" href="#"> <span class="fa fa-phone"></span>Number HERE! </a>
                        </li>
                        <li class="">
                           <a class="page-scroll" href="#"> <span class="fa fa-envelope"></span>E-Mail HERE! </a>
                        </li>
                        <li class="">
                           <a class="page-scroll" href="#"> <span class="fa fa-map-marker"></span>Address HERE! </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- END UPPER FOOTER -->
               <!-- LOWER FOOTER -->
               <div class="lower-footer">
                  <div class="pull-left"> <span>© 2020 WHAT HERE!?</span> <a href="#">Impressum</a> <a href="#">OIMS-AGB</a> <a href="#">Datenschutzerklärung</a> </div>
               </div>
               <!-- END LOWER FOOTER -->
            </div>
         </div>
      </footer>
      <!-- END FOOTER -->
      <!-- SCRIPTS -->
      <!-- jQuery & Bootstrap -->
      <script src="js/jquery.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- smoothscroll  -->
      <script src="js/smoothscroll.js"></script>
      <!-- classie  -->
      <script src="js/classie.js"></script>
      <!-- piechart  -->
      <script src="js/jquery.easytabs.min.js"></script>
      <!-- tabs  -->
      <script src="js/piechart.js"></script>
      <!-- animated header -->
      <script src="js/particles.js" type="text/javascript"></script>
      <!-- sliders -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- contact form -->
      <script src="js/jqBootstrapValidation.js"></script>
      <!-- google map -->
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
      <!-- custom script -->
      <script src="js/scripts.js"></script>
	<script>
		$(document).ready(function () {
			$("#btnCheckID").click(function () {
			
			var ID = document.getElementById("IdToCheck").value;
			var displayDiv = document.getElementById('IdNotFound');
			
			if (ID == "")
			{
				// show error
				displayDiv.style.display = 'block';
				displayDiv.innerHTML = "Bitte geben Sie die Firmen-ID ein.";
			}
			else
			{
				// OK, make POST req.
				var xhttp = new XMLHttpRequest();
				xhttp.open("POST", "functions.php", false);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send("a=check_id&id=" + ID);

				if (xhttp.responseText == "OK") {
					displayDiv.style.display = "none";
					// post to dashboard
					document.getElementById("RedirectToId").value = ID;
					document.getElementById('toDashboard').submit();
				} else if (xhttp.responseText == "StatusInactive")
				{
					displayDiv.style.display = 'block';
					displayDiv.innerHTML = "Diese Firma ist derzeit deaktiviert.";
				}
				else {
					// id not found
					displayDiv.style.display = 'block';
					displayDiv.innerHTML = "Diese Firmen-ID wurde nicht gefunden.";
				}
			}
			});
		});
	</script>
 <?php if (isset($_GET['anmelden'])) { echo "<script>$('#MeinInventarDialog').modal('show');</script>"; }?>
   </body>
</html>