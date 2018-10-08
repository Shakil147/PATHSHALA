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
						<h5><i class="fa fa-child"></i>PRESCHOOL LINKS</h5>
						<div class="academic-nav-inner-box">
							<a href="curriculum.html"><i class="fa fa-book"></i>Curriculum</a>
							<a href="preschool-summer-camp.html"><i class="fa fa-trophy"></i>Summer Camps</a>
							<a href="academic-calendar.html"><i class="fa fa-calendar"></i>Calendar</a>
						</div>
					</div>
				</div>
				<div class="col-sm-8 col-md-9">
					<div class="academic-content-box">
						<h3>SUMMER CAMP REGISTRATION</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<img class="curriculum-img" src="{{ asset('scource')}}/frontend/assets/img/curriculum/summer-camp.jpg" alt="preschool" />
						<div class="section-divider"></div>
						<h3>CHILD PERSONAL INFO</h3>
						<div class="summer-camp-form">
							<div class="form-row">
								<div class="col-md-4">
									<label>FIRST NAME</label>
									<input type="text" placeholder="John">
								</div>
								<div class="col-md-4">
									<label>MIDDLE NAME</label>
									<input type="text" placeholder="Mark">
								</div>
								<div class="col-md-4">
									<label>LAST NAME</label>
									<input type="text" placeholder="Doe">
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<label>DATE OF BIRTH</label>
									<input type="text" placeholder="03/07/2015" id="studentDOB">
								</div>
								<div class="col-md-4">
									<label>GENDER</label>
									<input type="radio" name="gender" checked> Male <br>
									<input type="radio" name="gender"> Female
								</div>
								<div class="col-md-4">
									<label>GRADE</label>
									<input type="radio" name="grade" checked> Toddler <br>
									<input type="radio" name="grade"> 2 Year <br>
									<input type="radio" name="grade"> 3 Year
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="section-divider"></div>
						<h3>CHILD MEDICAL INFO</h3>
						<div class="summer-camp-form">
							<div class="form-row">
								<div class="col-md-4">
									<label>DOCTOR NAME</label>
									<input type="text" placeholder="John Doe">
								</div>
								<div class="col-md-4">
									<label>DOCTOR CONTACT</label>
									<input type="text" placeholder="+1 1234554321">
								</div>
								<div class="col-md-4">
									<label>LAST DPT DATE</label>
									<input type="text" placeholder="03/07/2017" id="dptDate">
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<label>CHILD TAKE MEDICATION?</label>
									<input type="radio" name="medic" checked> YES<br>
									<input type="radio" name="medic"> NO
								</div>
								<div class="col-md-4">
									<label>ADMINISTER MEDICATION DURING CAMP?</label>
									<input type="radio" name="admin" checked> YES<br>
									<input type="radio" name="admin"> NO
								</div>
								<div class="col-md-4">
									<label>SPECIAL MEDICAL CONDITION?</label>
									<input type="radio" name="condition" checked> YES<br>
									<input type="radio" name="condition"> NO
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="form-row">
								<div class="col-md-12">
									<label>HEALTH CONCERNS OR ACTIVITY RESTRICTIONS?</label>
									<textarea rows="3" placeholder="Write here"></textarea>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="section-divider"></div>
						<h3>EMERGENCY CONTACT</h3>
						<div class="summer-camp-form">
							<div class="form-row">
								<div class="col-md-4">
									<label>FIRST NAME</label>
									<input type="text" placeholder="John">
								</div>
								<div class="col-md-4">
									<label>LAST NAME</label>
									<input type="text" placeholder="Doe">
								</div>
								<div class="col-md-4">
									<label>RELATIONSHIP TO STUDENT</label>
									<input type="text" placeholder="Father">
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<label>CONTACT NUMBER</label>
									<input type="text" placeholder="+1 9876543210">
								</div>
								<div class="col-md-4">
									<label>ALTERNATIVE NUMBER</label>
									<input type="text" placeholder="+1 1234567890">
								</div>
								<div class="col-md-4">
									<label>EMAIL</label>
									<input type="text" placeholder="example@pathshala.com">
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="section-divider"></div>
						<h3>CONFIRM INFO</h3>
						<div class="col-md-12">
							<input type="checkbox"> I hereby certify that the student info provided above are correct as per my best knowledge.
							<a href="#" class="know-more-btn camp-submit-btn"><i class="fa fa-paper-plane"></i>SUBMIT</a>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection