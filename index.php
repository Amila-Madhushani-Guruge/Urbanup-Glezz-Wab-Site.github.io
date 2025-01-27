<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Urbanup Glezz</title>
    <link rel="stylesheet" type="text/css" href="css/indexx.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  </head>
  <body>
  	<!---------NAVBAR---------->
   <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="#"><img src='Images/new logo_00001.svg' height="70px" width="240px"></a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarNav">
      		<ul class="navbar-nav ms-auto" >
        		<li class="nav-item">
          			<a class="nav-link active" aria-current="page" href="#">HOME</a>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link" href="#sectionAboutUs">ABOUT US</a>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link" href="#SectionWork">WORK</a>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link" href="#sectionLeadership">LEADERSHIP</a>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link" href="Fellowship.php" target="_blank">FELLOWSHIP</a>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link"  href="#exampleModal" data-toggle="modal" data-target="#exampleModal" data-whatever="">CONTACT US</a>
        		</li>
        		<li class="nav-item mt-auto">
        		<a class="nav-link"  href="#exampleModal" data-toggle="modal" data-target="#exampleModal" data-whatever=""><img src="Images/vertical line 1_Artboard 4 copy.png" width="30px" height="30px"><img src="Images/messageicon_Artboard 4 copy.png" width="30px" height="30px"></a>
        		</li>
      		</ul>
    		</div>
  		</div>
</nav> <!---------//NAVBAR---------->

<!---------HERO---------->
<div class="hero d-flex align-items-center">
	<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="Images/headerimg 1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption bottom-0 mb-5 d-none d-md-block">
       <img src="Images/white logo text_Artboard 4 copy 2.png" width="320px" height="100px" >
        <h1 class="mb-5">We are a team of planners, architects, landscape architects and interior designers</h1>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="Images/headerimg 5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption bottom-0 mb-5 d-none d-md-block">
        <h1>WE'VE BEEN THINKING</h1>
        <p class="mb-5">The world is changing fast, and we’re working hard to be drivers of it. Check out our latest projects, ideas, and insights to see how.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="Images/headerimg 2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption bottom-0 mb-5 d-none d-md-block">
        <h1>WORLD-CLASS IN WORK (AND PLAY)</h1>
        <p class="mb-5">We’re led by experience, driven by curiosity, and passionately committed to the notion that good ideas can come from anywhere. We’re also very serious about having fun.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="Images/headerimg 6.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption bottom-0 mb-5 d-none d-md-block">
        <h1>WE PROVIDE IDEAS</h1>
        <p class="mb-5">That will change the world.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="Images/headerimg 3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption bottom-0 mb-5 d-none d-md-block">
        <h1>LOOKING FOR</h1>
        <p>A quality and affordable architecture for your next project ? </p>
        <p class="mb-5">Request a quote </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div> 
<!---------//HERO---------->

<!-- ABOUT US -->
<section id="sectionAboutUs">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto text-center">
			<h6 class="text-primary">ABOUT US</h6>
			<h1>Our Services</h1>
			<p class="text-center mb-5">We are a team of planners, architects, landscape architects and interior designers headquartered in New York and San Francisco with a network of domestic and international offices.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6 mt-2" >
				<div class="Services card-effect">
					<div class="iconbox">
						<i class='bx bxs-building-house'></i>
					</div>
					<h5 class="mt-4 mb-2">Expertise Curiosity</h5>
					<p>With deep experience in design and architecture, we understand the realities of creating implementable strategies for each project. </p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-2" >
				<div class="Services card-effect">
					<div class="iconbox">
						<i class='bx bxs-message-rounded-dots'></i>
					</div>
					<h5 class="mt-4 mb-2">Better Relationship</h5>
					<p>We emphasize collaborative, open, trusting relationships in order to deliver better value to our clients. We work hard to be an extension of their taems.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6  mt-2" >
				<div class="Services card-effect">
					<div class="iconbox">
						<i class='bx bx-hive'></i>
					</div>
					<h5 class="mt-4 mb-2">Experience Collaboration</h5>
					<p>Colloboraion is a cornerstone of  our process. We have world-class talent in civil engineering, landscape architexture, planning and interior design.</p>
				</div>
			</div>

				
			</div>
		</div>
	</div>
</section> 
<!-- //ABOUT US -->

<!-- WORK -->
<section class="row w-100" id="SectionWork">
	<div class="row">
			<div class="col-md-8 mx-auto text-center">
			<h1>Our Work</h1>
			<p class="text-center mb-5">We are a team of planners, architects, landscape architects and interior designers headquartered in New York and San Francisco with a network of domestic and international offices.</p>
			</div>
		</div>
	<!-- Santa Lucia Preserve -->
	<div class="col-lg-6 col-img1"></div>
	<div class="col-lg-6">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 mt-5">
					<h6 class="text-primary workhead" >FEATURED:</h6>
					<h1 class="workmid">Santa Lucia Preserve</h1>
					<p class="workhead">The design of this 20,000 acre community preserve reflects the belief that the property’s intrinsic value lies in the site’s natural beauty, vastness and richness of its landscape.

					</p>
					<a  href="https://www.santaluciapreserve.com/" target="_blank"> <button class="button1">SEE THE WORK</button> </a>
				</div>
			</div>
		</div>
	</div>
	<!-- //Santa Lucia Preserve -->
	<!-- The Island House -->
	<div class="col-lg-6">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 mt-5">
					<h6 class="text-primary workhead" >FEATURED:</h6>
					<h1 class="workmid">The Island House</h1>
					<p class="workhead">Designed to be a gathering place for both hotel guests and the local community, The Island House is a unique center of life atop a hill at the gate of Lyford Cay.

					</p>
					<a href="https://www.the-island-house.com/" target="_blank"> <button class="button1">SEE THE WORK</button> </a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-img-2"></div>
	<!-- //The Island House -->
	<!-- Palmetto Bluff -->
	<div class="col-lg-6 col-img-3"></div>
	<div class="col-lg-6">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 mt-5">
					<h6 class="text-primary workhead" >FEATURED:</h6>
					<h1 class="workmid">Palmetto Bluff</h1>
					<p class="workhead">A resort village set on an 18,000-acre barrier island bounded by rivers and wildlife preserves within South Carolina’s coastal, low country.

					</p>
					<a href="https://www.palmettobluff.com/" target="_blank"><button class="button1">SEE THE WORK</button></a>
				</div>
			</div>
		</div>
	</div>
	<!-- //Palmetto Bluff -->
</section>
<!-- //WORK -->

<!-- Leadership -->
<section id="sectionLeadership">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 mx-auto text-center">
			<h1>Our Leadership</h1>
			<p class="text-center mb-5">“Our approach aligns with our clients’ objectives, shaping places that drive successful real estate results.” <br>
			A. James Tinson, AIA, CEO</p>

			</div>
		</div>
		<div class="row g-3">
			<div class="col-lg-4 col-sm-6">
				<div class="leader">
					<img src="Images/HethKendrick.jpg" alt="Heth Kendrick" class="leaderimage">
					<div class="overlay">
						<div class="lead">
							<h4 class="LeaderTitle">Heth Kendrick</h4>
							<h5 class="LeaderPosition">Master of Landscape Architecture</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="leader">
					<img src="Images/LynHalabi.jpg" alt="Lyn Halabi" class="leaderimage">
					<div class="overlay">
						<div class="lead">
							<h4 class="LeaderTitle">Lyn Halabi</h4>
							<h5 class="LeaderPosition">Associate Designer</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="leader">
					<img src="Images/EricPohlmann.jpg" alt="Eric Pohlmann" class="leaderimage">
					<div class="overlay">
						<div class="lead">
							<h4 class="LeaderTitle">Eric Pohlmann</h4>
							<h5 class="LeaderPosition">Principal</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="leader">
					<img src="Images/BrookeMozey.jpg" alt="Brooke Mozey" class="leaderimage">
					<div class="overlay">
						<div class="lead">
							<h4 class="LeaderTitle">Brooke Mozey</h4>
							<h5 class="LeaderPosition">Project Accountant</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="leader">
					<img src="Images/ChrisCook.jpg" alt="Chris Cook" class="leaderimage">
					<div class="overlay">
						<div class="lead">
							<h4 class="LeaderTitle">Chris Cook</h4>
							<h5 class="LeaderPosition">Associate, Senior Designer</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="leader">
					<img src="Images/YashDasarapalli.jpg" alt="Yash Dasarapalli" class="leaderimage">
					<div class="overlay">
						<div class="lead">
							<h4 class="LeaderTitle">Yash Dasarapalli</h4>
							<h5 class="LeaderPosition">Master of Landscape Architecture</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 mx-auto text-center">
			<h1 class="Leaderbottom">We’ve worked in iconic natural settings, historic towns, and growing cities, across 6 continents and 51 countries.</h1>
		</div>



	</div>
	</div>
</section> 
<!-- //Leadership-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CONNECT WITH US</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
		<div class="">
            <label for="client-name" class="col-form-label"> Name:</label>
            <input type="text" class="form-control" name="CName" placeholder="your_name" required>
          </div>
          <div class="form-group">
            <label  class="col-form-label">Your Email:</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="youremail@gamil.com" required>
          </div>
          <div class="form-group">
            <label for="message-text"class="col-form-label">Message:</label>
            <textarea class="form-control"  name="newmessage" placeholder="your_message"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button1" class="btn btn-primary" formaction="config/Contact.php">Send message</button>
      </div>
	  </form>
    </div>
  </div>
</div>
<!--// Modal -->
<!-- Footer -->
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="Images/new logo_00001.svg" height="70px" width="240px" class="mt-4">
				</div>
				<div class="col-md-2">
					<h5 class="footerhead1">Brand</h5>
					<ul class="list-unstyled">
						<li><a href="#">Home</a></li>
						<li><a href="#sectionAboutUs">About Us</a></li>
						<li><a href="#SectionWork">Work</a></li>
						<li><a href="#sectionLeadership">Leadership</a></li>
						<li><a href="Fellowship.php" target="_blank">Fellowship</a></li>
						<li><a href="#exampleModal" data-toggle="modal" data-target="#exampleModal" data-whatever="">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h5 class="footerhead1">More</h5>
					<ul class="list-unstyled">
						<!-- <li><a href="#">FAQ</a></li>
						<li><a href="#">Privacy & Policy</a></li>
						<li><a href="#" >Customer Support</a></li> -->
						<li><a href="Career.php" target="_blank">Career</a></li>
						<!-- <li><a href="#">Terms & Conditions</a></li> -->
						<li><a href="#exampleModal" data-toggle="modal" data-target="#exampleModal" data-whatever="">Connect with us</a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h5 class="footerhead1">Contact</h5>
					<ul class="list-unstyled">
						<li>Address: New York, NY 10 East 40th Street New York, NY 10016 212.683.5631</li>
						<li>Email: newyork@urbanupglezz.com</li>
						<li>Phone: (603) 555-0123</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p style="font-size:12px;"> @ 2022 NDIT copyright all right reserved | Amilaa Madhushani </p>
				</div>
				<div class="col-md-6">
					<div class="social-icons">
						<a href="https://www.facebook.com/login/" target="_blank"><i class='bx bxl-facebook ifooter'></i></a>
						<a href="https://twitter.com/" target="_blank"><i class='bx bxl-twitter ifooter'></i></a>
						<a href="https://www.instagram.com/"  target="_blank"><i class='bx bxl-instagram-alt ifooter'></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- //Footer -->



<!--Option 1: Boostrap Bundle with Proper-->
  <script>
	$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('CONNECT WITH US ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
  </script>

<script>
    function validateForm() {
        var emailInput = document.getElementById('email');
        var email = emailInput.value;

        // Regular expression for basic email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address');
            emailInput.focus();
            return false;
        }

        return true;
    }
</script>
</body>
</html>