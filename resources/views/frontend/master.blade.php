<!DOCTYPE html>
<html>

<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Pathshala - @yield('title')</title>
         <link rel="shortcut icon" type="image/png" href="{{ asset('scource')}}/frontend/assets/img/logo3.PNG"/>

        <!-- Styles -->
        <link href="{{ asset('scource')}}/frontend/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="{{ asset('scource')}}/frontend/assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
		<link href="{{ asset('scource')}}/frontend/assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="{{ asset('scource')}}/frontend/assets/css/style.css" rel="stylesheet" media="screen">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="{{ asset('scource')}}/frontend/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
        @include('frontend.navbar.navbar')
		
        @yield('mainBody')
	
		<!-- Know More Info & Admission apply row -->
		@yield('knowMore')
		
		<!-- Footer Section -->		
		@include('frontend.footer.footerSection')
		
		<!-- Login Modal -->
		<!-- Modal -->
		@include('frontend.sections.loginModel')
		
        <!-- Scripts -->
        <script src="{{ asset('scource')}}/frontend/assets/js/jQuery_v3_2_0.min.js"></script>
        <script src="{{ asset('scource')}}/frontend/assets/js/bootstrap.min.js"></script>
		<script src="{{ asset('scource')}}/frontend/assets/plugins/owl.carousel.min.js"></script>
        <script src="{{ asset('scource')}}/frontend/assets/js/js.js"></script>
        <script src="{{ asset('js')}}/sweetalert.min.js"></script>
		@if (notify()->ready())
            <script>
                swal({
                    title: "{!! notify()->message() !!}",
                    text: "{!! notify()->option('text') !!}",
                    type: "{{ notify()->type() }}",
                    @if (notify()->option('timer'))
                        timer: {{ notify()->option('timer') }},
                        showConfirmButton: false
                    @endif
                });
            </script>
        @endif
    </body>
</html>