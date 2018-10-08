@extends('frontend.master')

@section('title')
PRESCHOOL
@endsection

@section('knowMore')
@endsection

@section('mainBody')
<!-- Page Title Section -->
		<div class="row page-title page-title-preschool">
			<div class="container">
				<h2><i class="fa fa-child"></i>PRESCHOOL</h2>
			</div>
		</div>
		
		<!-- Academics Section -->
		<div class="row section-row">
			<div class="container">
				<div class="col-sm-4 col-md-3">
					<div class="academic-nav-box">
						<h5><i class="fa fa-child"></i>PRESCHOOL</h5>
						<div class="academic-nav-inner-box">
							<a href="curriculum.html"><i class="fa fa-book"></i>Curriculum</a>
							<a href="preschool-summer-camp.html"><i class="fa fa-trophy"></i>Summer Camps</a>
							<a href="academic-calendar.html"><i class="fa fa-calendar"></i>Calendar</a>
						</div>
					</div>
				</div>
				<div class="col-sm-8 col-md-9">
					<div class="academic-content-box">
						<h3>WELCOME TO OUR PRESCHOOL</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<img class="curriculum-img" src="{{ asset('scource')}}/frontend/assets/img/curriculum/preschool.jpg" alt="preschool" />
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
						<div class="section-divider"></div>
						<h3>PRESHOOL TIMINGS</h3>
						<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<div class="timings-table">
							<p class="header">
								<span>MON - THU</span>
								<span>FRI - SAT</span>
							</p>
							<p>
								<span>11:00 TO 15:00</span>
								<span>11:00 TO 13:00</span>
							</p>
						</div>
						<div class="section-divider"></div>
						<h3>PRESCHOOL TEACHERS</h3>
						<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "assets/img/parent/parent1.jpg" alt="teacher"/>
							</div>
							<div class="col-sm-8">
								<h5><i class="fa fa-user"></i>LENORE DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>BSc. Science</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "assets/img/parent/parent2.jpg" alt="teacher"/>
							</div>
							<div class="col-sm-8">
								<h5><i class="fa fa-user"></i>JOHN DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>BSc. Science</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer Section -->
		<div class="row footer-row">
			<div class="container">
				<div class="school-logo">
					<i class="fa fa-graduation-cap"></i>
					<h3>PATHSHALA</h3>
					<h6>BETTER WAY TO LEARN & GROW</h6>
				</div>
				<div class="col-md-4 col-sm-6 footer-item">
					<h5>CONTACT US</h5>
					<p><i class="fa fa-map-marker"></i>3768 Seabury Ct, Burlington, NC, 27215</p>
					<p><i class="fa fa-mobile"></i> +1 8910000891</p>
					<p><i class="fa fa-envelope"></i>email@pathshala.com</p>
				</div>
				<div class="col-md-2 col-sm-6 footer-item">
					<h5>QUICK LINKS</h5>
					<div class="quick-link-box">
						<a href="#"><i class="fa fa-graduation-cap"></i>ACADEMICS</a>
						<a href="#"><i class="fa fa-users"></i>ADMISSION</a>
						<a href="#"><i class="fa fa-calendar"></i>EVENTS</a>
						<a href="#"><i class="fa fa-thumbs-up"></i>CAMPUS LIFE</a>
					</div>
				</div>
				<div class="clearfix visible-sm"></div>
				<div class="col-md-3 col-sm-6 footer-item">
					<h5>SCHOOL TIMINGS</h5>
					<p><i class="fa fa-clock-o"></i> MON - FRI 9:00 AM - 3:00 PM</p>
					<p><i class="fa fa-clock-o"></i> SAT 9:00 AM - 1:00 PM</p>
				</div>
				<div class="col-md-3 col-sm-6 footer-item">
					<h5>SUBSCRIBE</h5>
					<div class="footer-subscribe">
						<i class="fa fa-envelope"></i></a><input type="text" placeholder="example@pathshala.com" />
					</div>
					<a href="#" class="subscribe-link"><i class="fa fa-paper-plane"></i>SUBMIT</a>
				</div>
			</div>
			<div class="footer-social-row">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>
@endsection