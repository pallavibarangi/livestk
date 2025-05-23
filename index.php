<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pet Sitting - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html"><span class="flaticon-pawprint-1 mr-2"></span>Livestock</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>

	          <!-- Dynamic Links -->
	          <?php session_start(); ?>
	          <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) { ?>
	            <li class="nav-item dropdown">
	              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                <i class="fa fa-user-circle"></i> <?php echo $_SESSION['user_name']; ?>
	              </a>
	              <div class="dropdown-menu" aria-labelledby="profileDropdown">
	                <a class="dropdown-item" href="profile.php">Profile</a>
	                <a class="dropdown-item" href="logout.php">Logout</a>
	              </div>
	            </li>
	          <?php } else { ?>
	            <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
	            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
	          <?php } ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap js-fullheight" style="background-image: url('images/9.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-11 ftco-animate text-center">
        <h1 class="mb-4">Efficient Live Stock Management Solutions</h1>
            <p><a href="#" class="btn btn-primary mr-md-4 py-3 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light ftco-no-pt ftco-intro">
  <div class="container">
    <div class="row">
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services active text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="flaticon-blind"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Animal Feeding</h3>
            <p>We ensure timely and nutritious feeding plans for all types of livestock, promoting healthy growth and better productivity.</p>
            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="flaticon-dog-eating"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Livestock Housing</h3>
            <p>Proper shelters and barns are managed to keep livestock safe, clean, and comfortable throughout the seasons.</p>
            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
          </div>
        </div>    
      </div>
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="flaticon-grooming"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Health & Vaccination</h3>
            <p>Regular health check-ups, vaccination schedules, and disease prevention measures are undertaken for livestock well-being.</p>
            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
          </div>
        </div>      
      </div>
    </div>
  </div>
</section>


    <section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row d-flex no-gutters">
      <div class="col-md-5 d-flex">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/15.jpg);">
        </div>
      </div>
      <div class="col-md-7 pl-md-5 py-md-5">
        <div class="heading-section pt-md-5">
          <h2 class="mb-4">Why Choose Us?</h2>
        </div>
        <div class="row">
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
            <div class="text pl-3">
              <h4>Expert Livestock Care</h4>
              <p>We provide professional care routines to keep your animals healthy, active, and productive.</p>
            </div>
          </div>
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
            <div class="text pl-3">
              <h4>Farmer Support Services</h4>
              <p>Our team is available to assist farmers with queries, guidance, and timely assistance year-round.</p>
            </div>
          </div>
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
            <div class="text pl-3">
              <h4>24/7 Emergency Assistance</h4>
              <p>Quick response to livestock emergencies to minimize risk and ensure animal safety.</p>
            </div>
          </div>
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
            <div class="text pl-3">
              <h4>On-Call Veterinary Services</h4>
              <p>Access to professional veterinary care for regular checkups, vaccinations, and treatment.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50">0</strong>
              </div>
              <div class="text">
              	<span>Customer</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8500">0</strong>
              </div>
              <div class="text">
              	<span>Professionals</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="20">0</strong>
              </div>
              <div class="text">
              	<span>Products</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50">0</strong>
              </div>
              <div class="text">
              	<span>Pets Hosted</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

   <section class="ftco-section bg-light ftco-faqs">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-md-last">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/liv.jpg);">
          <a href="images/video.mp4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
            <span class="fa fa-play"></span>
          </a>
        </div>
        <div class="d-flex mt-3">
          <div class="img img-2 mr-md-2" style="background-image:url(images/10.jpg);"></div>
          <div class="img img-2 ml-md-2" style="background-image:url(images/11.jpg);"></div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="heading-section mb-5 mt-5 mt-lg-0">
          <h2 class="mb-3">Frequently Asked Questions</h2>
          <p>Find answers to common questions related to effective livestock management and animal care practices.</p>
        </div>
        <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
          <div class="card">
            <div class="card-header p-0" id="headingOne">
              <h2 class="mb-0">
                <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                  <p class="mb-0">How to keep livestock healthy?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-body py-3 px-0">
                <ol>
                  <li>Provide balanced and nutritious feed</li>
                  <li>Ensure clean water supply at all times</li>
                  <li>Maintain proper shelter and hygiene</li>
                  <li>Schedule regular veterinary checkups</li>
                  <li>Vaccinate against common diseases</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header p-0" id="headingTwo" role="tab">
              <h2 class="mb-0">
                <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                  <p class="mb-0">What are good practices for managing a livestock farm?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-body py-3 px-0">
                <ol>
                  <li>Keep detailed health and feeding records</li>
                  <li>Separate sick animals from the herd</li>
                  <li>Train staff in animal handling</li>
                  <li>Rotate grazing areas to avoid overuse</li>
                  <li>Regularly clean and maintain facilities</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header p-0" id="headingThree" role="tab">
              <h2 class="mb-0">
                <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                  <p class="mb-0">How to ensure proper breeding of livestock?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree">
              <div class="card-body py-3 px-0">
                <ol>
                  <li>Use genetically healthy breeding stock</li>
                  <li>Monitor heat cycles and breeding times</li>
                  <li>Maintain a calm and clean breeding environment</li>
                  <li>Consult veterinarians for artificial insemination</li>
                  <li>Keep birth and health records for all animals</li>
                </ol>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header p-0" id="headingFour" role="tab">
              <h2 class="mb-0">
                <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
                  <p class="mb-0">What equipment is essential for livestock management?</p>
                  <i class="fa" aria-hidden="true"></i>
                </button>
              </h2>
            </div>
            <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingFour">
              <div class="card-body py-3 px-0">
                <p>Basic tools include waterers, feeders, grooming kits, vaccination equipment, weighing scales, fencing supplies, and shelter infrastructure. Additional tech like RFID tags and farm management software can improve efficiency.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  

		
		<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Livestock Gallery</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/16.jpg);">
          <a href="images/16.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="fa fa-expand"></span>
          </a>
          <div class="desc w-100 px-4">
            <div class="text w-100 mb-3">
              <span>Cattle</span>
              <h2><a href="work-single.html">Holstein Friesian</a></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 ftco-animate">
        <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/17.jpg);">
          <a href="images/17.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="fa fa-expand"></span>
          </a>
          <div class="desc w-100 px-4">
            <div class="text w-100 mb-3">
              <span>Goat</span>
              <h2><a href="work-single.html">Boer Goat</a></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 ftco-animate">
        <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/18.jpg);">
          <a href="images/18.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="fa fa-expand"></span>
          </a>
          <div class="desc w-100 px-4">
            <div class="text w-100 mb-3">
              <span>Poultry</span>
              <h2><a href="work-single.html">Broiler Chicken</a></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 ftco-animate">
        <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/19.jpg);">
          <a href="images/19.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="fa fa-expand"></span>
          </a>
          <div class="desc w-100 px-4">
            <div class="text w-100 mb-3">
              <span>Cattle</span>
              <h2><a href="work-single.html">Gir Cow</a></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 ftco-animate">
        <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/20.jpg);">
          <a href="images/20.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="fa fa-expand"></span>
          </a>
          <div class="desc w-100 px-4">
            <div class="text w-100 mb-3">
              <span>Sheep</span>
              <h2><a href="work-single.html">Merino Sheep</a></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 ftco-animate">
        <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/9.jpg);">
          <a href="images/9.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="fa fa-expand"></span>
          </a>
          <div class="desc w-100 px-4">
            <div class="text w-100 mb-3">
              <span>Poultry</span>
              <h2><a href="work-single.html">Desi Hen</a></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Latest News in Livestock Management</h2>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/9.jpg');"></a>
          <div class="text p-4">
            <div class="meta mb-2">
              <div><a href="#">May 01, 2025</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 5</a></div>
            </div>
            <h3 class="heading"><a href="#">5 Tips to Boost Milk Production in Dairy Cows</a></h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/11.jpg');"></a>
          <div class="text p-4">
            <div class="meta mb-2">
              <div><a href="#">May 05, 2025</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 8</a></div>
            </div>
            <h3 class="heading"><a href="#">Effective Disease Management for Goats</a></h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/13.jpg');"></a>
          <div class="text p-4">
            <div class="meta mb-2">
              <div><a href="#">May 10, 2025</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 4</a></div>
            </div>
            <h3 class="heading"><a href="#">Modern Poultry Housing Techniques You Should Know</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
    				<h2 class="mb-4">Free Consultation</h2>
    				<form action="#" class="appointment">
    					<div class="row">
    						<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Select services</option>
	                        <option value="">Cat Sitting</option>
	                        <option value="">Dog Walk</option>
	                        <option value="">Pet Spa</option>
	                        <option value="">Pet Grooming</option>
	                        <option value="">Pet Daycare</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Your Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Vehicle number">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date" placeholder="Date">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-clock-o"></span></div>
			            		<input type="text" class="form-control appointment_time" placeholder="Time">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section> -->

   <footer class="footer">
  <div class="container">
    <div class="row">
      <!-- About Section -->
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">LivestockCare</h2>
        <p>Empowering farmers with modern solutions to manage and monitor livestock health, nutrition, and productivity efficiently.</p>
        <ul class="ftco-footer-social p-0">
          <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
        </ul>
      </div>

      <!-- Latest News -->
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Latest Updates</h2>
        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url(images/livestock-news1.jpg);"></a>
          <div class="text">
            <h3 class="heading"><a href="#">5 Tips for Maintaining Cattle Health in Summer</a></h3>
            <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span> May 10, 2025</a></div>
              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
              <div><a href="#"><span class="icon-chat"></span> 12</a></div>
            </div>
          </div>
        </div>
        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url(images/livestock-news2.jpg);"></a>
          <div class="text">
            <h3 class="heading"><a href="#">Benefits of Digital Livestock Record Keeping</a></h3>
            <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span> May 8, 2025</a></div>
              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
              <div><a href="#"><span class="icon-chat"></span> 8</a></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
        <h2 class="footer-heading">Quick Links</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Home</a></li>
          <li><a href="#" class="py-2 d-block">About Us</a></li>
          <li><a href="#" class="py-2 d-block">Livestock Services</a></li>
          <li><a href="#" class="py-2 d-block">Health & Feed</a></li>
          <li><a href="#" class="py-2 d-block">Farm Management</a></li>
          <li><a href="#" class="py-2 d-block">Contact</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Have Questions?</h2>
        <div class="block-23 mb-3">
          <ul>
            <li><span class="icon fa fa-map"></span><span class="text">45 Agro Lane, Farmville, Karnataka, India</span></li>
            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91 98765 43210</span></a></li>
            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">support@livestockcare.in</span></a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="row mt-5">
      <div class="col-md-12 text-center">
        <p class="copyright">
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
          Designed by <a href="#" target="_blank">YourCompany</a>
        </p>
      </div>
    </div>
  </div>
</footer>


    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


    
  </body>
</html>