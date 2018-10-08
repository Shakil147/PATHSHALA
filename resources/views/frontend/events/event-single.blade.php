@extends('frontend.master')
@section('title')

@endsection

@section('knowMore')
@endsection

@section('mainBody')
<!-- Page Title Section -->
		<div class="row page-title page-title-about">
			<div class="container">
				<h2><i class="fa fa-calendar"></i>EVENT - SINGLE</h2>
			</div>
		</div>
		
		<!-- Events Section -->
		<div class="row section-row evets-row">
			<div class="container">
				<div class="col-md-8 left-event-items">
					<div class="col-xs-12 event-single-wrapper">
						<h3>ANNUAL FINE ARTS WORKSHOP</h3>
						<h5>
							<span><i class="fa fa-calendar"></i>21 JUN, 2017</span>
							<span><i class="fa fa-clock-o"></i>11:00 - 14:00</span>
							<span><i class="fa fa-map-marker"></i>Main Auditorium</span>
						</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
						<img class="featured-img" src="{{ asset('scource')}}/frontend/{{ asset('scource')}}/frontend/assets/img/curriculum/fine-arts.jpg" alt="event-single">
						<div class="section-divider"></div>
						<h3>MAIN ARTISTS IN EVENT</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "{{ asset('scource')}}/frontend/{{ asset('scource')}}/frontend/assets/img/parent/parent1.jpg" alt="teacher"/>
							</div>
							<div class="col-sm-8 teacher-info">
								<h5><i class="fa fa-user"></i>LENORE DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>BSc. Science</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div>
						<div class="clearfix visible-sm"></div>
						<div class="col-md-6 clear-padding academic-teachers">
							<div class="col-sm-4 teacher-img">
								<img src= "{{ asset('scource')}}/frontend/{{ asset('scource')}}/frontend/assets/img/parent/parent2.jpg" alt="teacher"/>
							</div>
							<div class="col-sm-8 teacher-info">
								<h5><i class="fa fa-user"></i>JOHN DOE</h5>
								<p><i class="fa fa-graduation-cap"></i>BSc. Science</p>
								<p><i class="fa fa-phone"></i>+1 9876543210</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="section-divider"></div>
						<h3>EVENT SCHEDULE</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
						<div id="pathshalaAccordion" class="pathshala-accordion">
							<h4 class="accordion-header"><i class="fa fa-clock-o"></i>DAY 1</h4>
							<div class="accordion-inner">
								<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
									ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
									amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
									odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
								</p>
							</div>
							<h4 class="accordion-header"><i class="fa fa-clock-o"></i>DAY 2</h4>
							<div class="accordion-inner">
								<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
									ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
									amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
									odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
								</p>
							</div>
							<h4 class="accordion-header"><i class="fa fa-clock-o"></i>DAY 3</h4>
							<div class="accordion-inner">
								<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
									ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
									amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
									odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
								</p>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
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