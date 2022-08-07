@extends('front-theme::layouts.mobile-app')

@section('content')

    @includeIf('themes::widgets.view',['location'=>'mobile_home_content'])
    @includeIf('front-theme::include.home_page')
@endsection
