@extends('frontend.master')
@section('title')
Events
@endsection

@section('knowMore')
@endsection

@section('mainBody')
<!-- Page Title Section -->
		<div class="row page-title page-title-events">
			<div class="container">
				<h2><i class="fa fa-calendar"></i>EVENTS</h2>
			</div>
		</div>
		
		<!-- Events Section -->
		<div class="row section-row evets-row">
			<div class="container">
				<div class="col-md-8 left-event-items">
					<div class="event-item">
						<div class="col-sm-7">
							<div class="event-date">
								<p><span>10</span> SEP</p>
							</div>
							<h3>Annual Science Fest</h3>
							<h6><i class="fa fa-map-marker"></i>Sciene Building</h6>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						</div>
						<div class="col-sm-5 event-item-img">
							<div class="event-img">
								<img src="{{ asset('scource')}}/frontend/assets/img/news/news-sm1.jpg" alt="event" />
								<div class="event-detail-link">
									<a href="#">VIEW DETAILS</a>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="event-item">
						<div class="col-sm-7">
							<div class="event-date">
								<p><span>21</span> AUG</p>
							</div>
							<h3>Inter School Sports Meet</h3>
							<h6><i class="fa fa-map-marker"></i>Playground</h6>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						</div>
						<div class="col-sm-5 event-item-img">
							<div class="event-img">
								<img src="{{ asset('scource')}}/frontend/assets/img/news/news-sm2.jpg" alt="event" />
								<div class="event-detail-link">
									<a href="#">VIEW DETAILS</a>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="event-item">
						<div class="col-sm-7">
							<div class="event-date">
								<p><span>01</span> AUG</p>
							</div>
							<h3>Rugby Match</h3>
							<h6><i class="fa fa-map-marker"></i>Rugby</h6>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						</div>
						<div class="col-sm-5 event-item-img">
							<div class="event-img">
								<img src="{{ asset('scource')}}/frontend/assets/img/news/news-sm3.jpg" alt="event" />
								<div class="event-detail-link">
									<a href="#">VIEW DETAILS</a>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="event-item">
						<div class="col-sm-7">
							<div class="event-date">
								<p><span>29</span> JUL</p>
							</div>
							<h3>Inter School Sports Meet</h3>
							<h6><i class="fa fa-map-marker"></i>Playground</h6>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						</div>
						<div class="col-sm-5 event-item-img">
							<div class="event-img">
								<img src="{{ asset('scource')}}/frontend/assets/img/news/news-sm1.jpg" alt="event" />
								<div class="event-detail-link">
									<a href="#">VIEW DETAILS</a>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="event-item">
						<div class="col-sm-7">
							<div class="event-date">
								<p><span>20</span> JUL</p>
							</div>
							<h3>Annual Science Fest</h3>
							<h6><i class="fa fa-map-marker"></i>Sciene Building</h6>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						</div>
						<div class="col-sm-5 event-item-img">
							<div class="event-img">
								<img src="{{ asset('scource')}}/frontend/assets/img/news/news-sm2.jpg" alt="event" />
								<div class="event-detail-link">
									<a href="#">VIEW DETAILS</a>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="event-control-box">
						<div class="pull-left">
							<a href="#">
								<i class="fa fa-arrow-left"></i>
								PREVIOUS
							</a>
						</div>
						<div class="pull-right">
							<a href="#">
								NEXT
								<i class="fa fa-arrow-right"></i>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 right-event-items">
					<div class="event-item">
						<img src="{{ asset('scource')}}/frontend/assets/img/news/news-lg3.jpg" alt="event" />
					</div>
					<div class="featured-event">
						<div class="event-date">
							<p><span>10</span> SEP</p>
						</div>
						<h3>Inter School Sports Meet</h3>
						<h6><i class="fa fa-map-marker"></i>Playground</h6>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<a href="#"><i class="fa fa-paper-plane"></i> KNOW MORE</a>
					</div>
					<div class="event-item categories-list">
						<div class="sidebar-box">
							<h5><i class="fa fa-list"></i>CATEGORIES</h5>
							<div class="inner-content-box">
								<ul class="list-group">
									<li class="list-group-item"><a href="#"><i class="fa fa-graduation-cap"></i>ACADEMICS</a><span class="badge">12</span></li>
									<li class="list-group-item"><a href="#"><i class="fa fa-users"></i>ADMISSION</a><span class="badge">20</span></li>
									<li class="list-group-item"><a href="#"><i class="fa fa-trophy"></i>SPORTS</a><span class="badge">12</span></li>
									<li class="list-group-item"><a href="#"><i class="fa fa-code"></i>MISCELLANEOUS</a><span class="badge">12</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
@endsection