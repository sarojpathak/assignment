<?php
include_once('header.php');
?>  
 <!-- Starting Register Form -->           
    <div class="col-md-11 col-sm-12 col-lg-11 col-xl-11 register-form">
        <form method="post" action="">
            <h4>Register Form</h4>
          <div class="form-group">
          	<label for="pname" class="label-control"><h6>Parent Name</h6></label>
            <input type="text" class="form-control" id="pname" placeholder="Enter Parent Name">
          </div>
          <div class="form-group">
            <label for="cname" class="label-control"><h6>Child Name</h6></label>
            <input type="text" class="form-control" id="cname" placeholder="Enter Child Name">
          </div>
          <div class="form-group">
            <label for="date" class="label-control"><h6>Date Of Birth</h6></label>
            <input type="Date" class="form-control" id="date" placeholder="Enter Date Of Birth">
          </div>
          <div class="form-group">
          	<label for="pmail" class="label-control"><h6>Parent Email Address</h6></label>
            <input type="email" class="form-control" id="pmail" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="rpassword" class="label-control"><h6>Password</h6></label>
            <input type="password" class="form-control" id="rpassword" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <label for="address" class="label-control"><h6>Parent Address</h6></label>
            <input type="text" class="form-control" id="address" placeholder="Enter Address">
          </div>
          <div class="form-group">
            <label for="phone" class="label-control"><h6>Phone</h6></label>
            <input type="number" class="form-control" id="phone" placeholder="Enter Child Name">
          </div>
           <div class="form-group">
            <label for="select1" class="label-control"><h6>Select Classes</h6></label>
            <select class="form-control" id="select1">
              <option>Select Classes</option>
              <option>Dance</option>
               <option>Drama</option>
                <option>Singing</option>
            </select>  
          </div>
          <button type="submit" class="btn btn-primary"><h6>Submit</h6></button>
        </form>
    </div>
    <!-- Ending Register Form -->

  <div class="col-md-11 col-sm-12 col-lg-11 col-xl-11 login-form">
        <form method="post" action="">
            <h4>Login Form</h4>
          <div class="form-group">
          	<label for="email" class="label-control"><h6>Email Address</h6></label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email">
          </div>
          <div class="form-group">
          	<label for="password" class="label-control"><h6>Password</h6></label>
            <input type="password" class="form-control" id="password" placeholder="Enter Password">
          </div>
          <div class="form-group">
          	<p><a href="#">Forget Password?</a></p>
          	<p>Dont Have Account?</p>
          	<p><a href="#" class="register">Sign Up</a></p>
          </div>
          <button type="submit" class="btn btn-success"><h6>Login</h6></button>
        </form>
    </div>

  <div class="col-md-5 col-sm-12 col-lg-5 col-xl-5">
    <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
         <div class="search-dropdown"> 
         
          <form>
              <div class="form-group">
                <div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Type & Hit Enter" aria-label="Recipient's username" aria-describedby="button-addon2">
				  <div class="input-group-append">
				    <button class="btn btn-success" type="button" id="button-addon2">Search</button>
				  </div>
				</div>
              </div> 
          </form>
        </div>
        </div>  
</div>


 <section class="site-carousel position-relative container-fluid">
 	  <div class="row">	
 		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="assets/img/mike.jpg" alt="First slide">
		      <div class="overlay"></div>
		      <div class="carousel-caption">
			    <h2>Your Journey Of Discovery Starts Here</h2>
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    consequat.</p>
			    <a href="#" class="register">Register Now</a> 
			    <a href="#" class="login">Login</a> 
		    </div>
		    
		  </div>
		   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		   <span class="lnr lnr-arrow-left-circle"></span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		  <span class="lnr lnr-arrow-right-circle"></span>
		  </a>
		</div>
	  </div>
 </section>

<section class="site-about container-fluid">
      <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col12 nopadding">
       			<div class="col-md-6 col-sm-12 col-lg-6 col-xl-6  video">
	 				<div class="vid embed-responsive embed-responsive-16by9">
	                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f_GCyIUT0ms?rel=0" allowfullscreen=""></iframe>
	              </div>
			 	</div>
			 	<div class="col-md-6 col-sm-12 col-lg-6 col-xl-6 content">
              	<div class="heading">
              		<h2>About the Company</h2>
              	</div>
                <div class="about-text">
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                proident, sunt in culpa qui officia deserunt mollit anim id est.</p>
	                <div class="viewmore">
	                 <a href="#">View More</a>
	                </div>
               </div>
          		</div>
           </div> 
        </div>
      </div>
 </section>

<section class="site-parallax container-fluid">
    	<div class="row">
     <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 nopadding">
      <div class="parallax-window" data-parallax="scroll" data-image-src="assets/img/parallex.jpg">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 title-section">
          <h6>STUDENTS TESTIMONIALS</h6>
          <p>Student's perception is our reality</p>
      </div>

        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 nopadding content">
        <div class="owl-carousel owl-theme" id="owl-carousel1">

          <div class="col-md-8 col-sm-12 col-lg-8 col-xl-8 col8">
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col4">
               <figure><img src="assets/img/client.png"></figure>
            </div>
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
          </div>
          <div class="col-md-8 col-sm-12 col-lg-8 col-xl-8 col8">
             <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col4">
               <figure><img src="assets/img/client.png"></figure>
            </div>
            <P><span>"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
          </div>
        </div>
      </div>
      </div>
     </div>
      </div>
</section>

<section class="site-classes container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
				<h4>Lorem ipsum dolor</h4>
			<div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col4">
				<div class="card">
				  <div class="vid embed-responsive embed-responsive-16by9">
	                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f_GCyIUT0ms?rel=0" allowfullscreen=""></iframe>
	              </div>
				  <div class="card-body">
				    <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
				    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col4">
				<div class="card">
				  <div class="vid embed-responsive embed-responsive-16by9">
	                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f_GCyIUT0ms?rel=0" allowfullscreen=""></iframe>
	              </div>
				  <div class="card-body">
				    <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
				    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col4">
				<div class="card">
				  <div class="vid embed-responsive embed-responsive-16by9">
	                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f_GCyIUT0ms?rel=0" allowfullscreen=""></iframe>
	              </div>
				  <div class="card-body">
				    <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
				    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<section class="site-news">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 nopadding col12">
          <p>Latest Blogs</p>
          <h3>Upcomming News and Events</h3>
        </div>

      <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 nopadding content">
        <div class="owl-carousel owl-theme" id="owl-carousel2">
        
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col4">
              <figure><img src="assets/img/rally2.jpg"></figure>

              <div class="shadow col10 nopadding">
                <section>November 05 2018</section>
                <div class="header"><a href="#"><p>Lorem epsum doler sit amet quantwor</p></a></div>
                <p>Lorem ipsum dol grae pulant. Quas sale peret maiestatis ne mea, nec clita Inani nullam eos in qstala.</p>
                <a href="#" class="readmore">Read More</a>
              </div>
            </div>

            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col4">
              <figure><img src="assets/img/rally2.jpg"></figure>
              <div class="shadow col10 nopadding">
                <section>November 05 2018</section>
                <div class="header"><a href="#"><p>Lorem epsum doler sit amet quantwor</p></a></div>
                <p>Lorem ipsum dol grae pulant. Quas sale peret maiestatis ne mea, nec clita Inani nullam eos in qstala.</p>
                 <a href="#" class="readmore">Read More</a>
              </div>
            </div>
  
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col4">
              <figure><img src="assets/img/rally2.jpg"></figure>
              <div class="shadow col10 nopadding">
                <section>November 05 2018</section>
                <div class="header"><a href="#"><p>Lorem epsum doler sit amet quantwor</p></a></div>
                <p>Lorem ipsum dol grae pulant. Quas sale peret maiestatis ne mea, nec clita Inani nullam eos in qstala.</p>
                 <a href="#" class="readmore">Read More</a>
              </div>
            </div>

        </div>
      </div>
  </div>
</section>

<section class="site-bottom">
  <div class="container-fluid">	
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 heading">				
				<h3>Our Classes</h3>
			</div>
			<div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col4">
			<figure><img src="assets/img/yammtibet.jpg"></figure>
				<h5>Dance</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor.</p>
			</div>
			<div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col4">
			<figure><img src="assets/img/yammtibet.jpg"></figure>
				<h5>Drama</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor.</p>
			</div>
			<div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 col4">
			<figure><img src="assets/img/yammtibet.jpg"></figure>
				<h5>Singing</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor.</p>
			</div>
		</div>
	</div>
   </div>
</section>

<?php
include_once('footer.php');
?>