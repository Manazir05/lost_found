<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nsu Lost and Found</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.0.js"></script> 
    <script type="text/javascript">
    	 $(document).ready(function()
    	 {
      		$(window).scroll(function() 
      		{ 
        		if($(document).scrollTop() > 50)
        		{ 
          			$(".navbar-fixed-top").css("background-color", "rgba(0,0,0,1)");
          			$(".navbar-brand").css("color", "#fed136");
        		} 
        		else 
        		{
          			$(".navbar-fixed-top").css("background-color", "transparent");
          			$(".navbar-brand").css("color", "white");
        		}
      		});
    	});
    </script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="navbar navbar-inverse navbar-fixed-top homenav">
		<div class="container">
			<a href="#" class="navbar-brand">Lost and Found</a>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#about">About</a></li>
					<li><a href="#links">Links</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#contact">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row" id="intro">
			<div class="col-md-12 jumbotron bghome">
				<div class="text-center col-md-8 col-md-offset-2">
					<h1>Welcome to Lost and Found Site</h1>
					<p>Here you can find your lost items and help others to find their belongings.</p>
					<a href="login.php" class="btn btn-lg btn-warning home-btn">Login</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="about">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<h2>We've got what you need..!</h2>
				<hr class="light">
				<p class="text-faded">
					Lost and Found might have the thing you need to find. 
					Start your free account running in no time to find your belogings and to help others!
					It is very helpful site and easy to use. We are ready to help you.!
				</p>
				<a href="register.php" class="btn btn-lg btn-warning home-btn">Register</a>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="links">
		<div class="row">
			<div class="col-md-6 text-center lost">
				<h2>I have</h2>
				<h1>LOST</h1>
				<p class="col-md-9 col-md-offset-2">Have you lost a beloved personal possession? You can reach out to thousands of people to help find 
					what you are looking for.</p>
				<a href="lost_item.php" class="btn btn-lg btn-warning home-btn">Lost Items</a>
			</div>
			<div class="col-md-6 text-center found">
				<h2>I have</h2>
				<h1>FOUND</h1>
				<p class="col-md-9 col-md-offset-2">Have you found an item belonging to someone else? You can reach out to thousands of people to help 
					reunite the item with their owner.</p>
				<a href="found_item.php" class="btn btn-lg btn-warning home-btn">Found Items</a>
			</div>
		</div>
	</div>
	<div class="container" id="services">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center col-md-6 col-md-offset-3">
					<h1>Services</h1>
					<p class="text-faded">
						We Offer different services to help our user.!
					</p>
					<hr class="light">
				</div>
				<div class="col-md-4">
					<a href="#services" class="thumbnail">
						<img src="images/search2.png" alt="lost image" class="img-rounded home_img">
					</a>	
						<h3 class="text-center">Search Property</h3>
						<p>Here you user submit few lost items so that you can look for ypur personal lost belongings. See the list of the lost items and find yours also help others to find their itmes.</p>
				</div>
				<div class="col-md-4">
					<a href="#services" class="thumbnail">
						<img src="images/th.jpg" alt="lost image" class="img-rounded home_img">
					</a>
					<h3 class="text-center">Found Property</h3>
					<p>Here you user submit few lost items so that you can look for ypur personal lost belongings. See the list of the lost items and find yours also help others to find their itmes.</p>
				</div>
				<div class="col-md-4">
					<a href="#" class="thumbnail">
						<img src="images/fo.png" alt="lost image" class="img-rounded home_img">
					</a>
					<h3 class="text-center">Lost Property</h3>
					<p>Here you user submit few lost items so that you can look for ypur personal lost belongings. See the list of the lost items and find yours also help others to find their itmes.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="contact">
		<div class="row">
			<div class="col-md-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">Contact us for and quary</h3>
            </div>
		</div>
		<div class="container">
			<div class="row">
	            <div class="col-md-12">
	                <form name="sentMessage" id="contactForm" method="Post" action="contact_process.php">
	                    <div class="row">
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <input type="text" class="form-control" placeholder="Your Name *" name="name">
	                                <p class="help-block text-danger"></p>
	                            </div>
	                            <div class="form-group">
	                                <input type="email" class="form-control" placeholder="Your Email *" name="email">
	                                <p class="help-block text-danger"></p>
	                            </div>
	                            <div class="form-group">
	                                <input type="tel" class="form-control" placeholder="Your Phone *" name="phone">
	                                <p class="help-block text-danger"></p>
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <textarea class="form-control" placeholder="Your Message *" name="message"></textarea>
	                                <p class="help-block text-danger"></p>
	                            </div>
	                        </div>
	                        <div class="clearfix"></div>
	                        <div class="col-lg-12 text-center">
	                            <div id="success"></div>
	                            <button type="submit" class="btn btn-lg btn-warning home-btn">Send Message</button>
	                        </div>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="container-fluid">
		<div class="row" id="location">
		</div>
	</div>
	<div class="container-fluid homefooter">
		<div class="container">
			<div class="row">
				<div class="navbar-text pull-left">
					<p>Copyright Lost and found</p>
				</div>
				<div class="navbar-text pull-right">
					<div class="col-md-5">
						<h3>Address</h3>
						<p>15 NSU Main Campus Rd, Dhaka 1229, Bangladesh</p>
					</div>
					<div class="col-md-5">
						<h3>Contacts</h3>
						<p>15 NSU Main Campus Rd, Dhaka 1229, Bangladesh</p>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>