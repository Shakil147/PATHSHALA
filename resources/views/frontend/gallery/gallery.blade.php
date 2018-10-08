@extends('frontend.master')
@section('title')
CAMPUS GALLERY
@endsection

@section('knowMore')
@include('frontend.sections.knowMore')
@endsection

@section('mainBody')
<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-picture-o"></i>CAMPUS GALLERY</h2>
			</div>
		</div>
		
		<!-- START: GALLERY -->
		<div class="row gallery-row">
			<div class="container clear-padding">
				<div class="image-set">
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="{{ asset('scource')}}/frontend/assets/img/news/news-sm1.jpg" alt="Cruise">
							<div class="img-caption">
								<div class="link">
									<a title="Fine Arts" href="assets/img/news/news-sm1.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="{{ asset('scource')}}/frontend/assets/img/news/news-sm2.jpg" alt="Cruise">
							<div class="img-caption">
								<div class="link">
									<a title="Arts" href="assets/img/news/news-sm2.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="{{ asset('scource')}}/frontend/assets/img/news/news-sm3.jpg" alt="Cruise">
							<div class="img-caption">
								<div class="link">
									<a title="Arts" href="assets/img/news/news-sm3.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="{{ asset('scource')}}/frontend/assets/img/news/news-sm1.jpg" alt="Cruise">
							<div class="img-caption">
								<div class="link">
									<a title="Fine Arts" href="assets/img/news/news-sm3.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="{{ asset('scource')}}/frontend/assets/img/news/news-sm1.jpg" alt="Cruise">
							<div class="img-caption">
								<div class="link">
									<a title="Arts" href="assets/img/news/news-sm1.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-wrapper">
							<img src="{{ asset('scource')}}/frontend/assets/img/news/news-sm2.jpg" alt="Cruise">
							<div class="img-caption">
								<div class="link">
									<a title="Arts" href="assets/img/news/news-sm2.jpg">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END: GALLERY -->
@endsection