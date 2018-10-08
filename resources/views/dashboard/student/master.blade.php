<!DOCTYPE html>
<html>

<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Pathshala - @yield('title') </title>

        <!-- Styles -->
        <link href="{{ asset('scource')}}/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		 <link href="{{ asset('scource')}}/dashboard/assets/css/chartist.min.css" rel="stylesheet" media="screen">
		<link href="{{ asset('scource')}}/dashboard/assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="{{ asset('scource')}}/dashboard/assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="{{ asset('scource')}}/dashboard/assets/css/style.css" rel="stylesheet" media="screen">

		<link href="{{ asset('scource')}}/dashboard/assets/css/jquery.dataTables.min.css" rel="stylesheet" media="screen">
		<link href="{{ asset('scource')}}/dashboard/assets/css/responsive.dataTables.min.css" rel="stylesheet" media="screen">

        @yield('cssPlgin')

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="{{ asset('scource')}}/dashboard/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
        	@include('dashboard.student.include.hader')
		<div class="parent-wrapper" id="outer-wrapper">
			<!-- SIDE MENU -->
			@include('dashboard.student.include.side-menu')
			
			<!-- MAIN CONTENT -->
			<div class="main-content" id="content-wrapper">
				@yield('mainBody')
				<div class="menu-togggle-btn">
					<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
				</div>
				<div class="dash-footer col-lg-12">
					<p>Copyright SHAKIL</p>
				</div>
			</div>
		</div>
	
		<!-- Scripts -->
        <script src="{{ asset('scource')}}/dashboard/assets/js/jQuery_v3_2_0.min.js"></script>
		<script src="{{ asset('scource')}}/dashboard/assets/js/jquery-ui.min.js"></script>
        <script src="{{ asset('scource')}}/dashboard/assets/js/bootstrap.min.js"></script>
		<script src="{{ asset('scource')}}/dashboard/assets/plugins/owl.carousel.min.js"></script>
		<script src="{{ asset('scource')}}/dashboard/assets/plugins/Chart.min.js"></script>
		<script src="{{ asset('scource')}}/dashboard/assets/plugins/jquery.dataTables.min.js"></script>
		<script src="{{ asset('scource')}}/dashboard/assets/plugins/dataTables.responsive.min.js"></script>
        <script src="{{ asset('scource')}}/dashboard/assets/js/js.js"></script>
        @yield('jsPlgin')
		
    </body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0381'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><!-- <script src='../../../../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script> -->
</html>