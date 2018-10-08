@extends('frontend.master')
@section('title')
ACADEMIC - ATHLETICS
@endsection

@section('knowMore')
@include('frontend.sections.knowMore')
@endsection

@section('mainBody')
<!-- Page Title Section -->
<div class="row page-title page-title-events">
	<div class="container">
		<h2><i class="fa fa-trophy"></i>ACADEMIC - ATHLETICS</h2>
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
				<h3>WELCOME TO ATHLETICS PAGE</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<img class="curriculum-img" src="assets/img/curriculum/athletics.jpg" alt="preschool" />
				<div class="section-divider"></div>
				<div id="pathshalaAccordion" class="pathshala-accordion">
					<h4 class="accordion-header"><i class="fa fa-futbol-o"></i>FOOTBALL</h4>
					<div class="accordion-inner">
						<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
							ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
							amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
							odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</p>
						<img src="assets/img/curriculum/football.jpg" alt="fine-arts" />
						<h5>FOOTBALL COACH AT PATHSHALA</h5>
						<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "assets/img/parent/parent1.jpg" alt="teacher"/>
							</div>
							<div class="col-sm-8 teacher-info">
								<h5><i class="fa fa-user"></i>LENORE DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>Head Coach</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "assets/img/parent/parent2.jpg" alt="teacher"/>
							</div>
							<div class="col-sm-8 teacher-info">
								<h5><i class="fa fa-user"></i>JOHN DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>Assistant Coach</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<h5>PATHSHALA FOOTBALL SCHEDULE</h5>
						<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<table class="academic-calendar">
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Sep 29, 2017
								</td>
							</tr>
							<tr>
								<td>
									Inter School Football Match
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Apr 21, 2017 - Sat, Apr 22, 2017
								</td>
							</tr>
							<tr>
								<td>
									Football Match Preperation Camp
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Apr 23, 2017
								</td>
							</tr>
							<tr>
								<td>
									School Football Teacm Selection
								</td>
							</tr>
							
						</table>
					</div>
					<h4><i class="fa fa-grav"></i>BASEBALL</h4>
					<div class="accordion-inner">
						<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
							ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
							amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
							odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</p>
						<img src="assets/img/curriculum/baseball.jpg" alt="fine-arts" />
						<h5>BASEBALL COACH AT PATHSHALA</h5>
						<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "assets/img/parent/parent1.jpg" alt="teacher"/>
							</div>
							<div class="col-sm-8 teacher-info">
								<h5><i class="fa fa-user"></i>LENORE DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>Head Coach</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "assets/img/parent/parent2.jpg" alt="teacher"/>
							</div>
							<div class="col-sm-8 teacher-info">
								<h5><i class="fa fa-user"></i>JOHN DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>Assistant Coach</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<h5>PATHSHALA FOOTBALL SCHEDULE</h5>
						<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<table class="academic-calendar">
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Sep 29, 2017
								</td>
							</tr>
							<tr>
								<td>
									Inter School Football Match
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Apr 21, 2017 - Sat, Apr 22, 2017
								</td>
							</tr>
							<tr>
								<td>
									Football Match Preperation Camp
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Apr 23, 2017
								</td>
							</tr>
							<tr>
								<td>
									School Football Teacm Selection
								</td>
							</tr>
							
						</table>
					</div>
					<h4><i class="fa fa-trophy"></i>TENNIS</h4>
					<div class="accordion-inner">
						<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
							ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
							amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
							odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</p>
						<img src="assets/img/curriculum/football.jpg" alt="fine-arts" />
						<h5>FOOTBALL COACH AT PATHSHALA</h5>
						<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "assets/img/parent/parent1.jpg" alt="teacher"/>
							</div>
							<div class="col-sm-8 teacher-info">
								<h5><i class="fa fa-user"></i>LENORE DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>Head Coach</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "assets/img/parent/parent2.jpg" alt="teacher"/>
							</div>
							<div class="col-sm-8 teacher-info">
								<h5><i class="fa fa-user"></i>JOHN DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>Assistant Coach</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<h5>PATHSHALA FOOTBALL SCHEDULE</h5>
						<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<table class="academic-calendar">
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Sep 29, 2017
								</td>
							</tr>
							<tr>
								<td>
									Inter School Football Match
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Apr 21, 2017 - Sat, Apr 22, 2017
								</td>
							</tr>
							<tr>
								<td>
									Football Match Preperation Camp
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-calendar"></i>Mon, Apr 23, 2017
								</td>
							</tr>
							<tr>
								<td>
									School Football Teacm Selection
								</td>
							</tr>
							
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection