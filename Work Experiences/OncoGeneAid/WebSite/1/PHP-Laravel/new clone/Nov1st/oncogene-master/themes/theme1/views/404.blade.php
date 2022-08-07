<?php
$detect = new \App\Lib\Mobile_Detect();
?>

@if($detect->isMobile() || $detect->isTablet())
    <?php $layout = 'mobile-app'; ?>
@else
    <?php $layout = 'app'; ?>
@endif

@extends('front-theme::layouts.'.$layout)

@section('content')
    <div class="error_content">

        @if($layout=='app')
            <h3 style="margin-bottom: 50px">صفحه‌ای که دنبال آن بودید پیدا نشد!</h3>
        @else
            <h4 style="margin-bottom: 10px">صفحه‌ای که دنبال آن بودید پیدا نشد!</h4>
        @endif
        <a href="{{ url('/') }}">
            <img src="{{ asset(config('shop-info.shop_icon')) }}">
        </a>
        <a href="{{ url('/') }}" class="btn btn-success"><i class="mdi mdi-home"></i>صفحه اصلی</a>
    </div>
@endsection
