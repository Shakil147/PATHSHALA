@extends('frontend.master')
@section('title')

@endsection

@section('knowMore')
@include('frontend.sections.knowMore')
@endsection

@section('mainBody')
<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-graduation-cap"></i>ADMISSIONS</h2>
			</div>
		</div>
		
		<!-- Facts section -->
        <div class="row section-row">
            <div class="container">
				<div class="fact-wrapper">
					<div class="col-md-5 fact-item">
						<p class="lg-icon"><i class="fa fa-trophy"></i></p>
						<p>PATHSHALA won best School award in 2016</p>
						<h1>WINNER BEST SCHOOL AWARD</h1>
						<p>It is a long established fact that a reader will be distracted by the content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the content.</p>
					</div>
					<div class="col-md-7 fact-item">
						<div class="fact-item-list">
							<div class="col-xs-3">
								<i class="fa fa-star"></i>
							</div>
							<div class="col-xs-9">
								<h2>14+ <br />COMPETITION WON</h2>
								<p>It is a long established fact that a reader will be distracted.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="fact-item-list">
							<div class="col-xs-3">
								<i class="fa fa-clock-o"></i>
							</div>
							<div class="col-xs-9">
								<h2>1000+ <br />VOLUNTEER HOURS</h2>
								<p>It is a long established fact that a reader will be distracted.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="fact-item-list">
							<div class="col-xs-3">
								<i class="fa fa-graduation-cap"></i>
							</div>
							<div class="col-xs-9">
								<h2>100% <br />SUCCESS RATE</h2>
								<p>It is a long established fact that a reader will be distracted.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
        </div>
		
		<!-- Numbers section -->
		<div class="row number-row">
			<div class="container">
				<div class="col-sm-6 col-md-3 number-item">
					<i class="fa fa-book"></i>
					<span>30+</span>
					<p>COURSES OFFERED</p>
				</div>
				<div class="col-sm-6 col-md-3 number-item">
					<i class="fa fa-graduation-cap"></i>
					<span>20</span>
					<p>QUALIFIED TEACHERS</p>
				</div>
				<div class="col-sm-6 col-md-3 number-item">
					<i class="fa fa-child"></i>
					<span>300</span>
					<p>ENERGETIC STUDENTS</p>
				</div>
				<div class="col-sm-6 col-md-3 number-item">
					<i class="fa fa-clock-o"></i>
					<span>100+</span>
					<p>AWESOME EVENTS</p>
				</div>
			</div>
		</div>
		
		<!-- Teachers row -->
		<div class="row section-row">
			<div class="container">
				<div class="section-row-header-center">
					<h6><i class="fa fa-star-o"></i>WE ARE BEST<i class="fa fa-star-o"></i></h6>
					<h1>WHY PATHSHALA?</h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
				</div>
				<div class="col-md-6">
					<div id="pathshalaAccordion" class="pathshala-accordion faq-accordion">
						<h4 class="accordion-header">Why you should choose Pathshala?</h4>
						<div class="accordion-inner">
							<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
									ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
									amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi.
							</p>
						</div>
						<h4 class="accordion-header">What Pathshala Offers?</h4>
						<div class="accordion-inner">
							<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
									ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
									amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi.
							</p>
						</div>
						<h4 class="accordion-header">How Pathshala is different?</h4>
						<div class="accordion-inner">
							<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
									ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
									amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="admissioon-youtube-video">
						<iframe src="https://www.youtube.com/embed/054bszkOk_Y" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
@endsection