@extends('layouts.frontend.blog.app')

@section('meta')
    
   @include('meta::manager', [
       'robots'        => 'all',
       'author'        => config('app.name', 'Laravel') .'.com',
       'site_name'     => config('app.name', 'Laravel'),
       'title'         => '404 Page',
       'type'          => 'blog',
       'url'           => route('about'),
       'image'         => asset('assets/uploads/global/about/logo/logo.jpg'),
   ])
        
@stop

@section('title','419 Page')


@push('css')
    <style type="text/css">
        @media only screen and (max-width: 1023px){
            .main-header .header-upper .logo-outer {
                width:100%;
                text-align:center;
                display:none;
            }

            .main-header .header-lower .visible-ipad {
                width:auto;
                display:block;
            }
        }

        @media only screen and (min-width: 1023px){
            .main-header .header-lower .visible-ipad {
                width:auto;
                display:none;
            }
        }

        @media only screen and (max-width: 767px){
            .main-header .header-upper .logo-outer {
                width:auto;
                display:block;
            }
        }
    </style>
    <link href="{{ asset('assets/frontend/blog/css/topics/topics.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/blog/css/home/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/blog/css/home/recent.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/blog/css/home/trending.css') }}" rel="stylesheet">
@endpush

@section('content')
    <!-- Start Header Area -->
    @include('partial.frontend.blog.global.head.header')
    <!-- End Header Area -->

    <!-- Hidden Navigation Bar -->
    @include('partial.frontend.blog.global.head.hidden-nav')
    <!-- End / Hidden Bar -->
    
    <!--Error Section-->
     <section class="error-section">
       <div class="auto-container">
             <div class="error-big-text"> 419 </div>
             <h2>Opps!! Looks like somthing went wrong </h2>
             <div class="text">The page you are looking for has expired. </div>
             <div class="error-options">
               <a href="{{ route('home') }}" class="theme-btn btn-style-four">Go Back Home </a>
                 {{--<span class="or"> Or </span>
                 <!-- Error Search Form -->
                 <div class="error-search-box">
                     <form method="post" action="contact.html">
                         <div class="form-group">
                             <input type="search" name="search-field" value="" placeholder="Search" required="" />
                             <button type="submit"><span class="icon fa fa-search"></span></button>
                         </div>
                     </form>
                 </div>--}}
             </div>
         </div>
     </section>
    <!--Error Section-->

    <!-- Start Instagram Gallery Area -->
    {{--@include('partial.frontend.blog.home.instagram')--}}
    <!-- End Instagram Area -->

    <!-- start footer Area -->
    @include('partial.frontend.blog.global.foot.footer')
    <!-- End footer Area -->
@endsection

@push('js')

@endpush