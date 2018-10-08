@extends('frontend.master')
@section('title')
Contact
@endsection

@section('knowMore')
@include('frontend.sections.knowMore')
@endsection

@section('mainBody')
<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-phone"></i>GET IN TOUCH</h2>
			</div>
		</div>
		
		<!-- contact row -->
		<div class="row contact-row">
			<div class="container">
				<div class="contact-form col-sm-6">
					<div class="col-xs-12">
						<h3><i class="fa fa-edit"></i>WRITE TO US.</h3>
					</div>
					<div class="col-xs-6">
						<label>FIRST NAME</label>
						<input type="text" placeholder="First Name" class="form-control">
					</div>
					<div class="col-xs-6">
						<label>FIRST NAME</label>
						<input type="text" placeholder="First Name" class="form-control">
					</div>
					<div class="clearfix"></div>
					<div class="col-xs-12">
						<label>EMAIL</label>
						<input type="text" placeholder="Email" class="form-control">
					</div>
					<div class="col-xs-12">
						<label>EMAIL</label>
						<input type="text" placeholder="Email" class="form-control">
					</div>
					<div class="col-xs-12">
						<label>CONTACT REGARDING</label>
						<select class="form-control">
							<option>- Select -</option>
							<option>Admission regarding query</option>
							<option>Partnership regarding query</option>
						</select>
					</div>
					<div class="col-xs-12">
						<label>YOUR MESSAGE</label>
						<textarea rows="3" placeholder="Write here" class="form-control"></textarea>
					</div>
					<div class="col-xs-12">
						<a href="#" class="submit-contact-form"><i class="fa fa-paper-plane"></i> SEND</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-sm-6 address-box">
					<h3><i class="fa fa-phone"></i>CONTACT US.</h3>
					<div class="address-body">
						<div class="address-item">
							<div class="col-xs-1">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="col-xs-11">
								<p>PATHSHALA Education Limited. 9280 Sunny Treasure Canyon, Eagle River, Prince Edward Island, C9K-2M1</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="address-item">
							<div class="col-xs-1">
								<i class="fa fa-envelope-o"></i>
							</div>
							<div class="col-xs-11">
								<p>example@pathshala.com</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="address-item">
							<div class="col-sm-1">
								<i class="fa fa-phone"></i>
							</div>
							<div class="col-xs-11">
								<p>+91 1234567890</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="address-item no-border">
							<div class="col-xs-1">
								<i class="fa fa-clock-o"></i>
							</div>
							<div class="col-xs-11">
								<p>MON to FRI: 09:00 AM - 03:00 PM </p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
@endsection