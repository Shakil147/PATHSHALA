@extends('frontend.master')
@section('title')

@endsection

@section('knowMore')
@include('frontend.sections.knowMore')
@endsection

@section('mainBody')
<!-- Page Title Section -->
<div class="row page-title page-title-preschool">
	<div class="container">
		<h2><i class="fa fa-graduation-cap"></i>ACADEMIC</h2>
	</div>
</div>

<!-- Academics Section -->
<div class="row section-row">
	<div class="container">
		<div class="col-sm-4 col-md-3">
			<div class="academic-nav-box">
				<h5><i class="fa fa-code"></i>QUICK LINKS</h5>
				<div class="academic-nav-inner-box">
					<a href="academic-arts.html"><i class="fa fa-paint-brush"></i>Arts</a>
					<a href="academic-athletics.html"><i class="fa fa-trophy"></i>Athletics</a>
					<a href="academic-curriculum.html"><i class="fa fa-book"></i>Curriculum</a>
					<a href="academic-calendar.html"><i class="fa fa-calendar"></i>Calendar</a>
				</div>
			</div>
		</div>
		<div class="col-sm-8 col-md-9">
			<div class="academic-content-box">
				<h3>WELCOME TO ACADEMIC PAGE</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				<p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<img class="curriculum-img" src="{{ asset('scource')}}/frontend/assets/img/curriculum/preschool.jpg" alt="preschool" />
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
				<div class="section-divider"></div>
				<h3>PATHSHALA TIMINGS</h3>
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
				<h3>PATHSHALA TEACHERS</h3>
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
				<div class="clearfix visible-sm"></div>
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
			</div>
		</div>
	</div>
</div>
@endsection