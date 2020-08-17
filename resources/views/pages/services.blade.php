@extends('layouts.theme')

@section('title')
    {{ trans('website/services/general.page_title') }}
    @parent
@stop

@push('css') 
   <style>
      .services-bg {
         position: relative; 
         z-index: 1;
         background: url(assets/images/services/achievement-brainstorming-branding-1162968.jpg) center top no-repeat; 
         background-size: cover; 
         background-attachment: fixed !important;
      }

      .dark-mask {
         background: rgba(0, 0, 0, 0.63);;
         width: 100%;
         height: 100%;
         position: absolute;
         top: 0;
         left: 0;
         z-index: -1;
      }

      .services-bg .service-title {
         text-align: center;
         padding-top: 135px;
      }

      .services-bg .service-title .title-content .medium-title {
         text-transform: uppercase;
         color: #fff;
         line-height: 1.13;
         font-weight: bold;
         letter-spacing: 3px;
         font-family: 'Oswald', sans-serif;
         padding: 15px;
         border: 4px solid;
      }
   </style>
@endpush

@section('content')
   <!--::header part start::-->
   @include('partials.global._header.header')
   <!--::header part end::-->
   
   <!--::nav part start::-->
   @include('partials.global._header.nav')
   <!--::nav part end::-->

   <!--::main part start::-->
   @include('partials.service.main')
   <!--::main part end::-->

   <!--::footer_part start::-->
   @include('partials.global._footer.footer')
   <!--::footer_part end::-->
@endsection

@push('js') @endpush