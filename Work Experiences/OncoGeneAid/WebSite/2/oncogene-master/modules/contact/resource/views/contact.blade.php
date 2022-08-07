@extends('front-theme::layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row" style="align-items: center;text-align: center;justify-content: center;margin: 40px 0 80px 0">
            <h1 style="color: black">تماس با ما</h1>
        </div>
        <div>
            @if(Session::has('add-message'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{Session::get('add-message')}}</li>
                    </ul>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <form method="post" action="{{route('send.create')}}">
                    @csrf
                    <div class="form-group">
                        <label for="nameAndFamily">نام و نام خانوادگی (الزامی)</label>
                        <input type="text" class="form-control nameAndFamily" name="nameAndFamily" id="nameAndFamily">
                    </div>
                    <div class="form-group">
                        <label for="numberPhone">شماره تماس (الزامی)</label>
                        <input type="number" class="form-control" name="numberPhone" id="numberPhone">
                    </div>
                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="subject">موضوع</label>
                        <input type="text" class="form-control subject" name="subject" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="messageText">متن پیام</label>
                        <textarea class="form-control messageText" name="messageText" id="messageText" rows="3"></textarea>
                    </div>
                    <div class="form-group" style="float: left;">
                        <button  type="submit" id="contactBtn" class="btn btn-outline-success">ارسال</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="elementor-column-wrap">
                    <div class="elementor-element">
                        <p class="elementor-heading-title">ما را پیدا کنید</p>
                    </div>
                    <div class="elementor-widget">
                        <p><strong>آدرس</strong>: تهران، خیابان آزادی، خیابان حبیب الهی جنوبی، ایستگاه نوآوری شریف، سالن بنیاد ملی نخبگان، هومن کنسر<i>،</i> پلاک ۵۶<br/>

                            <strong>تلفن:</strong>
                            <span style="text-decoration: underline;">
                                    <span style="color: #ffffff;">
                                        <a style="color: #ffffff; text-decoration: underline;" href="tel:02166095308" target="_blank" rel="noopener nofollow" data-wpel-link="internal">
                                            ۶۶۰۹۵۳۰۸-۰۲۱
                                        </a>
                                    </span>
                                </span>
                            <br/>

                            <strong>ایمیل:</strong>
                            <span style="text-decoration: underline; color: #ffffff;">
                                    <a style="color: #ffffff; text-decoration: underline;" href="mailto:info@oncogeneaid.ir" target="_blank" rel="noopener nofollow">
                                        info@oncogeneaid.ir
                                    </a>
                                </span>
                            <br/>
                            <strong>صفحه اینستاگرام:</strong> <span style="text-decoration: underline;"><span style="color: #ffffff;"><a style="color: #ffffff; text-decoration: underline;" href="https://www.instagram.com/humancancer_org/" target="_blank" rel="nofollow external noopener noreferrer" data-wpel-link="external">humancancer_org@</a></span></span><br/>
                            <strong>ارتباط از طریق واتساپ:</strong><span style="text-decoration: underline;"><span style="color: #ffffff;"><a style="color: #ffffff; text-decoration: underline;" href="https://api.whatsapp.com/send?phone=989033097843" target="_blank" rel="noopener nofollow external noreferrer" data-wpel-link="external">۰۹۰۳۳۰۹۷۸۴۳</a></span></span><br/>
                            <strong>کارشناس ارتباط یا مشتریان:</strong>
                            <span><span style="text-decoration: underline;">۰۹۰۲۷۸۴۳۲۲۲</span>&nbsp; –&nbsp; </span><span style="text-decoration: underline;">۰۹۰۲۷۸۴۳۲۲۲</span></p>
                    </div>
                    <div class="elementor-element elementor-element-73f71ec3 elementor-widget elementor-widget-google_maps" data-id="73f71ec3" data-element_type="widget" data-widget_type="google_maps.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-custom-embed"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=35.7064312379362%2C%2051.356199655478505&amp;t=m&amp;z=16&amp;output=embed&amp;iwloc=near" aria-label="35.7064312379362, 51.356199655478505"></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
