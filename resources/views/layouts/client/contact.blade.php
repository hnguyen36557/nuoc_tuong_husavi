@extends('layouts.client.master')
@section('content')
<section id="section">
	<div class="page-content">
		<div class="page-content-header">
			<div class="page-content-header-box">
				<h1>Contact</h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4 hidden-xs">
					<div class="left-page">
						<ul class="sidebar-menu">
							<li><a href=""><span>Home</span></a></li>
							<li>
								<a href="#"><span>About Us</span><i class="fa fa-angle-left pull-right"></i></a>
								<ul class="sidebar-submenu">
									<li><a href="">Meet Dr. Jivraj</a></li>
									<li><a href="">Our Staff</a></li>
									<li><a href="">Oxnard/Ventura Office Tour</a></li>
									<li><a href="">Why Choose Us?</a></li>
									<li><a href="">On-Site Dental Lab</a></li>
									<li><a href="">Media</a></li>
								</ul>
							</li>

							<li>
								<a href="#"><span>Cosmetic Dentistry</span><i class="fa fa-angle-left pull-right"></i></a>
								<ul class="sidebar-submenu">
									<li><a href="">What is Cosmetic Dentistry?</a></li>
									<li><a href="">All-on-Four® Dental Implants</a></li>
									<li><a href="">Dental Bonding</a></li>
									<li><a href="">Dental Implants</a></li>
									<li><a href="">Full Mouth Reconstruction</a></li>
									<li><a href="">Invisalign</a></li>
									<li><a href="">New Smile in a Day</a></li>
									<li><a href="">Porcelain Veneers</a></li>
									<li><a href="">Smile Makeover</a></li>
								</ul>
							</li>

							<li>
								<a href="#"><span>General Dentistry</span><i class="fa fa-angle-left pull-right"></i></a>
								<ul class="sidebar-submenu">
									<li><a href="">Biocompatible Fillings</a></li>
									<li><a href="">Bridges</a></li>
									<li><a href="">Teeth Cleaning</a></li>
									<li><a href="">Crowns</a></li>
									<li><a href="">Dentures</a></li>
									<li><a href="">Inlays & Onlays</a></li>
									<li><a href="">Sedation Dentistry</a></li>
									<li><a href="">Snap-On Smile</a></li>
								</ul>
							</li>

							<li>
								<a href="#"><span>Patient Resources</span><i class="fa fa-angle-left pull-right"></i></a>
								<ul class="sidebar-submenu">
									<li><a href="">FAQ</a></li>
									<li><a href="">Financing</a></li>
									<li><a href="">Doctor Testimonials</a></li>
									<li><a href="">Articles</a></li>
									<li><a href="">Newsletters</a></li>
									<li><a href="">Magazines</a></li>
									<li><a href="">Patient Forms</a></li>
									<li><a href="">Patient Testimonials</a></li>
									<li><a href="">Read Reviews</a></li>
									<li><a href="">Rate us!</a></li>
									<li><a href="">Educational Videos</a></li>
								</ul>
							</li>

							<li><a href=""><span>Photo Gallery</span></a></li>
							<li><a href=""><span>Testimonials</span></a></li>
							<li class="active">
								<a href="#"><span>Contact</span><i class="fa fa-angle-left pull-right"></i></a>
								<ul class="sidebar-submenu">
									<li><a href="">For Doctors</a></li>
								</ul>
							</li>
						</ul>
						<div class="schedule-online">
							<a href=""><img src="images/home-woman-smiling.jpg" alt=""></a>
							<a class="btn" href="">Schedule Online</a>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-8">
					<div class="right-page">
						<div class="right-contact">
							<div class="row right-contact-box">
								<div class="col-md-6 col-sm-6">
									<h5>phone</h5>
									<h2>(805) 919-8683</h2>
									<h5>Address</h5>
									<p>2821 North Ventura Road, Bldg H<br>Oxnard, CA 93036</p>
									<h5>Hours</h5>
									<p>Monday - Friday: 8:00 am - 5:00 pm</p>
								</div>
								<div class="col-md-6 col-sm-6 contact-img">
									<img src="images/map-ventura.jpg" alt="" />
									<a class="btn" href="" target="_blank">View Map</a>
								</div>
							</div>
						</div>
						<div class="right-contact">
							<div class="right-contact-box">
								<p>If you’d like to schedule a complimentary consultation or request an appointment, please fill out the contact form below and we’ll get back to you during our normal business hours.</p>
								<form>
									<div class="row form-contact">
										<div class="col-md-3 col-sm-6"><input type="text" name="fname" id="fname" placeholder="First Name"></div>
										<div class="col-md-3 col-sm-6"><input type="text" name="lname" id="lname" placeholder="Last Name"></div>
										<div class="col-md-3 col-sm-6"><input type="text" name="phone" id="phone" placeholder="Phone"></div>
										<div class="col-md-3 col-sm-6"><input type="text" name="email" id="email" placeholder="Email"></div>
										<div class="col-md-12"><input type="text" name="about" id="about" placeholder="How did you hear about us?"></div>
										<div class="col-md-12"><textarea rows="6" cols="36" name="message" id="message" tabindex="6" placeholder="Message"></textarea></div>												
									</div>
									<a class="btn">Submit</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()