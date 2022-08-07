<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app_url" content="{{ url(('/')) }}">
    @yield('seo')
    <title>{{ defined('page_title') ? page_title : config('shop-info.shop_name') }}</title>
    {{ add_css_file('desktop') }}
    @yield('head')
    <style>

        .left_50 {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            /*margin-top: 10%*/
        }
        .owl-stage{
            display: flex;
        }

        /*#owl-example {*/
        /*    border: 1px solid #512da8*/
        /*}*/

        .owl-nav {
            position: absolute;
            top: calc(50% - 21px);
            width: 107%;
            left: -21px
        }

        .owl-nav div {
            position: absolute;
            top: 50%;
            border: 1px solid #512da8;
            width: 40px;
            height: 40px;
            border-radius: 50%
        }

        .owl-prev {
            left: 0;
            display: flex;
            background: #fff
        }

        .owl-next {
            right: 0;
            display: flex;
            background: #fff
        }

        .owl-prev i,
        .owl-next i {
            margin: auto
        }

        #owl-example .owl-item {
            box-sizing: border-box;
            padding: 30px;
            text-align: justify;
            direction: rtl;
            border-radius: 30px;
            border: 1px solid #e3e3e3;
            filter: blur(1px);
            -webkit-filter: blur(1px);
            -moz-filter: blur(1px);
            -o-filter: blur(1px);
            -ms-filter: blur(1px);
        }

        #owl-example .owl-item p {
            font-size: 16px
        }

        .mt-10 {
            margin-top: 10px
        }

        .name {
            font-size: 16px;
            color: #5130a8
        }

        .active.center{
            border: 3px solid #e3e3e3 !important;
            box-shadow: 0px 0px 9px 0px #dbdbdb;

            filter: blur(0px) !important;
            -webkit-filter: blur(0px) !important;
            -moz-filter: blur(0px) !important;
            -o-filter: blur(0px) !important;
            -ms-filter: blur(0px) !important;
        }
        .sectionRow{
            margin-bottom: 80px !important;
        }
        .div-sectionRow-1{
            position: relative;justify-content: center;align-items: center;
        }
        .div-sectionRow-1 img{
            width: 100%;
        }
        .div-sectionRow-1-divBox{
            padding: 40px;
            width: 40%;
            border-radius: 14px;
            height: auto ;
            background: #0fabc657;
            text-align: center;
            position: absolute
        }

        .div-sectionRow-1-divBox-1{
            font-size: 24px;
        }
        .div-sectionRow-1-divBox-2{
            font-size: 18px;
            color: #363636;
        }
        .div-sectionRow-1-divBox-3{
            font-size: 14px;
            color: #363636;
        }
        .div-sectionRow-1-divBox-4{
            width: 100%;position: absolute;bottom: -16px;left: 0;
        }
        .div-sectionRow-1-divBox-4 button{
            width: 140px;background: #63d563;border-radius: 50px;border: 2px white dashed;padding: 3px 10px
        }

        .imageOption{
            width: 150px;height: 150px
        }
        .div-sectionRow-2-left{
            height: 550px;position: relative;background-image: url('../../../../files/images/banner-1.png');background-repeat:no-repeat
        }
        .div-sectionRow-2-left-image{
            position: absolute;left: 30px;top: 10px;
        }
        .div-sectionRow-2-left-image-divText{
            border-radius: 30px;height: auto;position: absolute;color: white;right: 60px;top: 150px;font-size: 22px;direction: rtl;text-align: justify;padding: 0 0 0 40px;
        }
        .div-sectionRow-2-left-image-divText-text1{
            font-size: 30px;
        }
        .div-sectionRow-2-left-image-divText-text2{
            font-size: 20px;
        }
        .div-sectionRow-3{
            position: relative;justify-content: center;align-items: center;
        }
        .div-sectionRow-3-div-text-box{
            left: 100px;padding: 40px;width: 50%; border-radius: 30px;height: auto;background: #0a0a0a57;text-align: center;position: absolute;color: white
        }
        .div-sectionRow-3-div-text-box-text1{
            font-size: 30px;float: right;
        }
        .div-sectionRow-3-div-text-box-text2{
            float: right;text-align: justify;direction: rtl;font-size: 20px;
        }
        .div-sectionRow-3-div-text-box-div-button{
            width: 100%;bottom: -16px;left: 0;
        }
        .div-sectionRow-3-div-text-box-div-button button{
            float: left;width: 140px;background: #63d563;border-radius: 50px;border: 2px white dashed;padding: 3px 10px
        }

        .div-sectionRow-2-right{
            height: 550px;
        }
        .div-sectionRow-4-div-left{
            height: 292px;position: relative;background-image: url('../../../../files/images/ax.jpg');background-repeat:no-repeat
        }
        .div-sectionRow-4-div-right-text-box{
            padding: 40px; border-radius: 30px ;text-align: center;position: absolute;color: black
        }
        .div-sectionRow-4-div-right-text-box-text1{
            text-align: end;font-size: 30px;float: right;
        }
        .div-sectionRow-4-div-right-text-box-text2{
            float: right;text-align: justify;direction: rtl;font-size: 20px;
        }
        .div-sectionRow-4-div-right-text-box-div-button{
            width: 100%;bottom: -16px;left: 0;
        }
        .div-sectionRow-4-div-right-text-box-div-button button{
            float: left;width: 140px;background: #0b40d5;border-radius: 50px;padding: 3px 10px
        }

        .div-sectionRow-5 div{
            width: 100% ;  background-color: #0d47a1;text-align: center;color: white;padding: 80px;font-size: 50px
        }

        .div-sectionRow-4-div-left{
            height: 292px
        }
        .div-sectionRow-6-div-left-text-box{
            padding: 40px; border-radius: 30px ;text-align: center;position: absolute;color: black
        }
        .div-sectionRow-6-div-left-text-box-text1{
            text-align: end;font-size: 30px;float: right;
        }
        .div-sectionRow-6-div-left-text-box-text2{
            float: right;text-align: justify;direction: rtl;font-size: 20px;
        }
        .div-sectionRow-6-div-right-text-box-div-button{
            width: 100%;bottom: -16px;left: 0;
        }
        .div-sectionRow-6-div-right-text-box-div-button button{
            float: left;width: 140px;background: #0b40d5;border-radius: 50px;padding: 3px 10px
        }

        .TextUser{
            color:#291ba1;font-size: 16px
        }
        .div-sectionRow-7{
            position: relative;justify-content: center;align-items: center;
        }
        .div-sectionRow-7-image-background{
            width: 100%;height: 800px
        }
        .div-sectionRow-7-image-left{
            position: absolute;top: 140px;left: 60px;width: 30%;
        }
        .div-sectionRow-7-text{
            width: 64%;padding: 40px;color: black;direction: rtl;text-align: justify;position: absolute;top: 80px;right: 0;
        }
        @media screen and (max-width: 1200px) {
            .div-sectionRow-1-divBox{
                padding: 25px;
            }
            .div-sectionRow-1-divBox-1{
                font-size: 24px;
            }
            .div-sectionRow-1-divBox-2{
                font-size: 16px;
            }
            .div-sectionRow-1-divBox-3{
                font-size: 14px;
            }
        }
        @media screen and (max-width: 992px) {
            .div-sectionRow-1-divBox {
                width: 44%;
            }
            .div-sectionRow-1-divBox{
                padding: 20px;
            }
            .div-sectionRow-1-divBox-1{
                font-size: 22px;
            }
            .div-sectionRow-1-divBox-2{
                font-size: 12px;
            }
            .div-sectionRow-1-divBox-3{
                font-size: 12px;
            }
            .div-sectionRow-2-left{
                margin-bottom: 20px;
                background-position: center;
                background-size: cover;
            }

            .div-sectionRow-3-div-text-box{
                padding: 20px;
            }
            .div-sectionRow-3-div-text-box-text1{
                font-size: 20px
            }
            .div-sectionRow-3-div-text-box-text2{
                font-size: 16px
            }
            .div-sectionRow-4-div-right-text-box{
                padding: 20px;
            }
            .div-sectionRow-5 div{
                padding: 50px;
                font-size: 40px;
            }
            .div-sectionRow-6-div-left-text-box{
                padding: 20px;
            }
        }
        @media screen and (max-width: 768px) {
            .div-sectionRow-1-divBox {
                width: 48%;
            }
            .div-sectionRow-1-divBox{
                padding: 18px;
            }
            .div-sectionRow-1-divBox-1{
                font-size: 16px;
            }
            .div-sectionRow-1-divBox-2{
                font-size: 10px;
            }
            .div-sectionRow-1-divBox-3{
                font-size: 10px;
            }

            .div-sectionRow-3-div-text-box{
                padding: 12px;
                left: 50px;
            }
            .div-sectionRow-3-div-text-box-text1{
                font-size: 16px
            }
            .div-sectionRow-3-div-text-box-text2{
                font-size: 12px
            }

            .div-sectionRow-5 div{
                font-size: 28px;
            }

            .div-sectionRow-7-text{
                width: 100%;padding: 30px;top: 180px;right: 0;
            }
        }
        @media screen and (max-width: 576px) {
            .div-sectionRow-2-left{
                margin: 20px;
            }
            .div-option-element{
                margin: 10px;
            }
            .div-sectionRow-2-right{
                height: auto;
            }
            .div-sectionRow-4-div-left{
                margin: 20px 20px 0 20px;
            }
        }
        @media screen and (max-width: 500px) {
            .div-sectionRow-1-divBox {
                width: 52%;
            }
            .div-sectionRow-1-divBox{
                padding: 14px;
            }
            .div-sectionRow-4-div-right-text-box-text1{
                font-size: 20px;
            }
            .div-sectionRow-4-div-right-text-box-text2{
                font-size: 20px;
            }
            .div-sectionRow-6-div-left-text-box-text1{
                font-size: 20px;
            }
            .div-sectionRow-6-div-left-text-box-text2{
                font-size: 20px;
            }
        }
        @media screen and (max-width: 483px) {
            .div-sectionRow-5 div{
                font-size: 24px;
            }
        }
        @media screen and (max-width: 462px) {
            .div-sectionRow-1-divBox {
                width: 56%;
            }
            .div-sectionRow-1-divBox-4 button{
                width: 130px;
                font-size: 14px;
            }
            .div-sectionRow-1-divBox{
                padding: 16px;
            }
            .div-sectionRow-2-left-image-divText-text2{
                font-size: 18px;
            }
            .div-sectionRow-2-left-image-divText-text3{
                font-size: 18px;
            }

            .div-sectionRow-3-div-text-box{
                padding: 8px;
                width: 54%;
                left: 24px;
            }
            .div-sectionRow-3-div-text-box-text1{
                font-size: 14px;
                margin-bottom: 4px;
            }
            .div-sectionRow-3-div-text-box-div-button button{
                width: 100px;
                font-size: 12px;
            }
            .div-sectionRow-4-div-right-text-box-text1{
                font-size: 18px;
            }
            .div-sectionRow-4-div-right-text-box-text2{
                font-size: 18px;
            }
            .div-sectionRow-6-div-left-text-box-text1{
                font-size: 18px;
            }
            .div-sectionRow-6-div-left-text-box-text2{
                font-size: 18px;
            }
            .div-sectionRow-5 div{
                font-size: 20px;
            }

            .div-sectionRow-7-image-left{
                width: 40%;
            }
            .div-sectionRow-7-text{
                width: 100%;padding: 20px 30px;top: 190px;right: 0;
                font-size:14px;
            }
        }
        @media screen and (max-width: 422px) {
            .div-sectionRow-1-divBox {
                width: 70%;
                top: 20px;
            }
            .div-sectionRow-1-divBox{
                padding: 8px;
            }
            .div-sectionRow-2-left-image-divText-text2{
                font-size: 12px;
            }
            .div-sectionRow-2-left-image-divText-text3{
                font-size: 14px;
            }
            .div-sectionRow-4-div-right-text-box-text1{
                font-size: 16px;
            }
            .div-sectionRow-4-div-right-text-box-text2{
                font-size: 16px;
            }
            .div-sectionRow-6-div-left-text-box-text1{
                font-size: 16px;
            }
            .div-sectionRow-6-div-left-text-box-text2{
                font-size: 16px;
            }
        }
        @media screen and (max-width: 408px){
            .div-sectionRow-3-div-text-box-text2 {
                margin-bottom: 0px;
            }
            .TextUser{
                color:#291ba1;font-size: 14px
            }
        }

    </style>
    <link href="{{ asset('css/shop.css?id=v2') }}" rel="stylesheet">
    <link href="{{ asset('css/widgets.css?id='.config('cms.widgetId')) }}" rel="stylesheet">
    <link href="{{ asset('themes/theme1/style.css?id=v6') }}" rel="stylesheet"/>
    <link href="{{ asset('themes/theme1/main.css?id=jasddk') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" rel="stylesheet" />
</head>
<body>

<div id="app">

    <div id="app-body">
        <v-app class="app-style">

            {{--@includeIf('themes::widgets.view',['location'=>'desktop_every_page'])--}}

            <progress-box ref="progress_box"></progress-box>

            <div class="header">

                <div class="header_row">
                    <a href="{{ url('') }}" class="router-link">
                        <img src="{{ asset(config('shop-info.shop_icon')) }}" class="shop_logo">
                    </a>

<!--                    <header-search></header-search>-->
                </div>

                <div class="header_action">

                    <div style="margin-top:3px;height:39px">

                        <auth-menu login="{{ Auth::check() ? 'yes' : 'no' }}"
                                   role_id="{{ Auth::check() ? Auth::user()->role_id : 0 }}"
                                   role="{{ Auth::check() ? Auth::user()->role : '' }}"
                                   shop_name="{{ config('shop-info.shop_name') }}"
                                   mobile="off"
                        >
                            <v-list-item>
                                <v-list-item-icon @click="$root.$emit('send_get_request','{{ url('user/profile/orders') }}')"><v-icon>mdi-basket</v-icon></v-list-item-icon>
                                <v-list-item-title @click="$root.$emit('send_get_request','{{ url('user/profile/orders') }}')"> پیگیری سفارش</v-list-item-title>
                            </v-list-item>

                        </auth-menu>

                    </div>

                    <header-cart cart_type="1"></header-cart>
                </div>

            </div>

{{--            @include('front-theme::views.categoryList',['catList'=>$catList])--}}

            <app-content>
                @yield('content')
            </app-content>

            @include('position_view',['name'=>'desktop_layout','type'=>'content'])

            <footer>
                @includeIf('themes::widgets.view',['location'=>'desktop_layout_footer'])
            </footer>

        </v-app>
    </div>

    <div class="category_cover"></div>

</div>

<div id="default-loading">
    <div class="loading_div">
        <img src="{{ asset(config('shop-info.shop_icon')) }}">
        <div class="spinner">
            <div class="b1"></div>
            <div class="b2"></div>
            <div class="b3"></div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<?php registerVueFile('','ssr',config('cms.develop')) ?>
<script>
    $(document).ready(function() {
        $("#owl-example").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            margin: 10,
            paginationSpeed: 400,
            autoplay: false,
            items: 2,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            loop: true,
            nav: true,
            center: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                768:{
                    items:1
                },
                992:{
                    items:2
                },
                1000:{
                    items:3
                }
            },
            navText: ["<i class='fa fa-angle-left' aria-hidden='true'><</i>", "<i class='fa fa-angle-right' aria-hidden='true'>></i>"]
        });
    });
</script>
</body>
</html>
