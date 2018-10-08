@extends('frontend.master')
@section('title')
ACADEMIC - ARTS
@endsection

@section('knowMore')
@include('frontend.sections.knowMore')
@endsection

@section('mainBody')
<!-- Page Title Section -->
<div class="row page-title page-title-preschool">
	<div class="container">
		<h2><i class="fa fa-paint-brush"></i>ACADEMIC - ARTS</h2>
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
				<h3>WELCOME TO ARTS PAGE</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				<p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<img class="curriculum-img" src="{{ asset('scource')}}/frontend/assets/img/curriculum/preschool.jpg" alt="preschool" />
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
				<div class="section-divider"></div>
				<div id="pathshalaAccordion" class="pathshala-accordion">
					<h4 class="accordion-header"><i class="fa fa-paint-brush"></i>FINE ARTS</h4>
					<div class="accordion-inner">
						<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
							ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
							amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
							odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</p>
						<img src="{{ asset('scource')}}/frontend/assets/img/curriculum/fine-arts.jpg" alt="fine-arts" />
						<h5>PAINTING</h5>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
						<h5>CLAY MODELLING</h5>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
					</div>
					<h4><i class="fa fa-picture-o"></i>VISUAL ARTS</h4>
					<div class="accordion-inner">
						<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
							ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
							amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
							odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</p>
						<img src="{{ asset('scource')}}/frontend/assets/img/curriculum/visual-arts.jpg" alt="fine-arts" />
						<h5>PHOTOGRAPHY</h5>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
						<h5>VIDEO RECORDING</h5>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>							
					</div>
					<h4><i class="fa fa-music"></i>MUSIC</h4>
					<div class="accordion-inner">
						<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
							ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
							amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
							odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</p>
						<img src="{{ asset('scource')}}/frontend/assets/img/curriculum/fine-arts.jpg" alt="fine-arts" />
						<h5>CLASSICAL</h5>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
						<h5>ROCK</h5>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>							
					</div>
					<h4><i class="fa fa-universal-access"></i>THEATER</h4>
					<div class="accordion-inner">
						<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
							ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
							amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
							odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</p>
						<img src="{{ asset('scource')}}/frontend/assets/img/curriculum/visual-arts.jpg" alt="fine-arts" />
						<h5>ACTING</h5>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
						<h5>DANCING</h5>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		@endsection