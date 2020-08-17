@extends('layouts.theme')

@section('title')
    {{ trans('website/about/general.page_title') }}
    @parent
@stop

@push('css') @endpush

@section('content')
   <!--::header part start::-->
   @include('partials.global._header.header')
   <!--::header part end::-->
   
   <!--::nav part start::-->
   @include('partials.global._header.nav')
   <!--::nav part end::-->

   <!--::main part start::-->
   @include('partials.about.main')
   <!--::main part end::-->

   <!--::footer_part start::-->
   @include('partials.global._footer.footer')
   <!--::footer_part end::-->
@endsection

@push('js') @endpush