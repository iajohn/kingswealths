@extends('layouts.theme')

{{--@section('meta')
   @foreach($about as $a)
       @include('meta::manager', [
           'robots'        => 'all',
           'author'        => 'incattech.com',
           'site_name'     => config('app.name', 'Laravel'),
           'title'         => $title,
           'type'          => 'website',
           'url'           => route('about'),
           'image'         => asset('assets/uploads/website/about/logo/logo.jpg'),
           'description'   => $a->seo_desc,
           'keywords'      => $a->seo_keyword,
       ])
    @endforeach
@stop--}}

@section('title')
    {{ trans('website/home/general.page_title') }}
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
   @include('partials.home.main')
   <!--::main part end::-->
@endsection

@push('js') @endpush