<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- meta character set -->
        
        
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bing Verify -->
        <!-- <meta name="msvalidate.01" content="7CF45520D2EC0902867F4A849C3902A6" /> -->
       
        <!-- Google Verify -->
        <!-- <meta name="google-site-verification" content="HDq1GM91rbXeNGednnEbA8c1Go5lMvRKk0kv99sojvI" /> -->
        
        <!-- SEO OPTIMIZATION -->
        {{--@yield('meta')--}}

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Site Title -->
        <title>
            @section('title') @show || {{ config('app.name', 'Laravel') }} - {{ __('Entertainment') }}
        </title>

        <link rel="icon" href="{{ asset('assets/images/logo/icon.png') }}" type="image/x-icon" >

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet" type="text/css">
		
		<!-- style CSS -->
        <link href="" rel="stylesheet" />
        <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css">
        <!--=============================================
            CSS
        ============================================= -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        @stack('css')

        <!-- GOOGLE recaptcha -->
        <!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
        <!--<script>-->
        <!--    function onSubmit(token) {-->
        <!--        document.getElementById("contact-form").submit();-->
        <!--    }-->
        <!--</script>-->
        
        {!! NoCaptcha::renderJs() !!}
	</head>

	<body class="loader">
		<!-- loading start -->
		<div class="loading">
		    <img class="logo-loading" src="assets/images/logo/logo-loader.png" alt="logo">
	    </div><!-- loading end -->
	    
		<!-- pointer start -->
		<div class="pointer" id="pointer">
			<i class="fas fa-long-arrow-alt-right"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-link"></i>
		</div><!-- pointer end -->
		
		<!-- to-top-btn start -->
		<a class="to-top-btn pointer-small" href="#up">
			  <span class="to-top-arrow"></span>		    
        </a><!-- to-top-btn end -->

        @yield('content')   
        
        <!-- scripts --> 
        <script src="{{ asset('assets/js/plugins.js') }}"></script> 
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <script>
            @if($errors->any())
            @foreach($errors->all() as $error)
            toastr.error('{{ $error }}','Error',{
                closeButton:true,
                progressBar:true,
            });
            @endforeach
            @endif
        </script>

        @stack('js')
        <!-- SCIPTS ENDS -->

        <!--Newsletter Modal-->
        {{--@include('pages.includes.modal')--}}

        <!-- Cookie Consent -->
        {{--@include('cookieConsent::index')--}}
    </body>
</html>