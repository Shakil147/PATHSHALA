@extends('frontend.master')
@section('title')
ACADEMIC - Calender
@endsection

@section('knowMore')
@include('frontend.sections.knowMore')
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
				<h3>PRESCHOOL ACADEMIC CALENDAR</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				<img class="curriculum-img" src="{{ asset('scource')}}/frontend/assets/img/curriculum/preschool.jpg" alt="preschool" />
				<div class="section-divider"></div>
				<h3>ACADEMIC CALENDAR</h3>
				<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<table class="academic-calendar">
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Mar 31, 2017 - Sat, Apr 20, 2017
						</td>
					</tr>
					<tr>
						<td>
							Admission for the Session 2017 - 2018.
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Apr 21, 2017 - Sat, Apr 22, 2017
						</td>
					</tr>
					<tr>
						<td>
							Freshman Induction Program for newly joined student.
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Apr 23, 2017
						</td>
					</tr>
					<tr>
						<td>
							Commencement of the classes for 2017 - 2018 session
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, May 20, 2017 - Sat, May 25, 2017
						</td>
					</tr>
					<tr>
						<td>
							Summer camp for all the students.
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, May 26, 2017 - Sat, Jul 25, 2017
						</td>
					</tr>
					<tr>
						<td>
							Summer break (School will remain closed)
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Jul 26, 2017
						</td>
					</tr>
					<tr>
						<td>
							Resume school after summer break
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Aug 20, 2017 - Sat, Sep 01, 2017
						</td>
					</tr>
					<tr>
						<td>
							Mid Term Examination.
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Sep 02, 2017 - Sat, Sep 05, 2017
						</td>
					</tr>
					<tr>
						<td>
							Holidays (School will remain closed)
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Mar 31, 2017 - Sat, Apr 20, 2017
						</td>
					</tr>
					<tr>
						<td>
							Admission for the Session 2017 - 2018.
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Apr 21, 2017 - Sat, Apr 22, 2017
						</td>
					</tr>
					<tr>
						<td>
							Freshman Induction Program for newly joined student.
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Apr 23, 2017
						</td>
					</tr>
					<tr>
						<td>
							Commencement of the classes for 2017 - 2018 session
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, May 20, 2017 - Sat, May 25, 2017
						</td>
					</tr>
					<tr>
						<td>
							Summer camp for all the students.
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, May 26, 2017 - Sat, Jul 25, 2017
						</td>
					</tr>
					<tr>
						<td>
							Summer break (School will remain closed)
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Jul 26, 2017
						</td>
					</tr>
					<tr>
						<td>
							Resume school after summer break
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Aug 20, 2017 - Sat, Sep 01, 2017
						</td>
					</tr>
					<tr>
						<td>
							Mid Term Examination.
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-calendar"></i>Mon, Sep 02, 2017 - Sat, Sep 05, 2017
						</td>
					</tr>
					<tr>
						<td>
							Holidays (School will remain closed)
						</td>
					</tr>
				</table>
				<a href="#" class="download-calendar"><i class="fa fa-download"></i>DOWNLOAD CALENDAR</a>
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