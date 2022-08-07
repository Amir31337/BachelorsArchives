@extends('front-theme::layouts.app')
@section('content')
    <style>
        .divOurStory{
            display: flex !important;
            align-items: center !important;
            text-align: center !important;
            justify-content: center !important;
            margin-top: 60px !important;
        }
        .divTeam{
            display: flex !important;
            align-items: center !important;
            text-align: center !important;
            justify-content: center !important;
        }
        .divWhoWeAre{
            display: flex !important;
            align-items: center !important;
            text-align: center !important;
            justify-content: center !important;
        }
        .DivAbsolutePosition{
            position: absolute !important;
            bottom: -100px !important;background: white !important;width: 50% !important;padding: 40px !important;font-size: 46px !important;box-shadow: 0px 0px 4px !important;
        }
        .card {
            float: left !important;
            width: 20% !important;
            padding: 0 10px !important;

            background: #e3e3e3 !important;
            margin: 5px
        }
        @media screen and (max-width: 1180px) {
            .DivAbsolutePosition{
                font-size: 30px !important;
            }
        }
        @media screen and (max-width: 718px) {
            .card {
                width: 100% !important;
                display: block !important;
            }
            .rowCard{
                display: contents !important;
            }

            .DivAbsolutePosition{
                font-size: 16px !important;
                padding: 26px !important;
            }
        }

        .image {
            /*width: 40% !important;*/
            padding: 0 10px !important;}
        @media screen and (max-width: 1016px) {
            .imageRow{
                display: contents !important;
            }
            .image {
                /*width: 100% !important !important;*/
                display: block !important;
            }
        }

        .container{
            position: relative !important;display: flex !important;align-items: center !important;text-align: center !important;justify-content: center !important;
        }
        .containerChild{
            max-width: 1140px !important;
        }

    </style>
    <div class="container">
        <div class="containerChild">
            <div class="row" style="position: relative;display: flex;align-items: center;text-align: center;justify-content: center;">
                <img style="width: 35%;  margin: 3px" src="{{url('files\images\1000005397.jpg')}}">
                <img style="width: 60% ; margin: 3px" src="{{url('files\images\0c99fa717c04310ca07b6db54a52d0ffac8fdce3_1598113005.jpg')}}">
                <p class="DivAbsolutePosition">محیطی برای درمان پیشرفته سرطان</p>
            </div>
            <div class="row divOurStory">
                <div style="width: 60%">
                    <h1 style="color: #CC3366">داستان ما</h1>
                    <p style="text-align: justify;direction: rtl;font-size: 24px;">
                        هر انسان ویژگی‌های خاص ژنتیکی خود را از والدین و قومیت خود می‌گیرد، از این رو یک فرد ایرانی ویژگی‌های ژنتیکی
                        خاص ایران را دارد و زمانی که درگیر سرطان می­‌شود باید مسیر درمانی خاص خودش برایش طراحی شود.
                        هومن کنسر به کمک به روزترین متدها و با دانش امروزی، بهترین مسیر درمان را برای بیماران ایرانی درگیر سرطان
                        پیشنهاد می‌دهد.
                    </p>
                </div>
            </div>
            <div class="row divWhoWeAre">
                <div style="width: 60%">
                    <h1 style="color: #CC3366">ما چه کسی هستیم؟</h1>
                    <p style="text-align: justify;direction: rtl;font-size: 24px;">
                        ما تیمی از متخصصین حوزه­‌ی سرطان هستیم که با تحلیل ویژگی­‌های ژنتیکی افراد، مسیر درمانی خاص فرد ایرانی را به
                        پزشکان پیشنهاد می­‌دهیم. ویژگی‌های ژنتیکی افراد به کمک دستگاه­‌های توالی‌یابی پیشرفته استخراج شده و اطلاعات
                        حاصل به کمک تیم متخصص هومن کنسر تحلیل می‌شود و متخصصین حوزه ژنتیک ایران با کمک این اطلاعات، مسیر درمان و
                        مراقبت این افراد در زمینه سرطان را به بهترین شکل طراحی می‌کنند.
                    </p>
                </div>
            </div>
            <div class="row divTeam">
                <div style="width: 60%">
                    <h1 style="color: #CC3366">اعضای تیم</h1>
                </div>
            </div>
            <div class="row rowCard" style="display: flex;align-items: center;text-align: center;justify-content: center;">
                <div class="card">
                    <h4><b>مدیر تیم فنی (ژنتیک)</b></h4>
                    <p>مادح قادری</p>
                </div>
                <div class="card">
                    <h4><b>مدیر عامل</b></h4>
                    <p>مجتبی نیک‌عهد</p>
                </div>
                <div class="card">
                    <h4><b>مدیر فنی تحلیل داده</b></h4>
                    <p>دامون نشتاعلی</p>
                </div>
                <div class="card">
                    <h4><b>مشاوره تحلیل داده</b></h4>
                    <p>سید ابوالفضل مطهری</p>
                </div>
            </div>
            <div class="row rowCard" style="display: flex;align-items: center;text-align: center;justify-content: center;">
                <div class="card">
                    <h4><b>متخصص ژنتیک</b></h4>
                    <p>طیب علی سلمانی </p>
                </div>
                <div class="card">
                    <h4><b>متخصص داروسازی بالینی</b></h4>
                    <p>الهه لآلی</p>
                </div>
                <div class="card">
                    <h4><b>متخصص ژنتیک پزشکی</b></h4>
                    <p>گلناز خاکپور</p>
                </div>
                <div class="card">
                    <h4><b>متخصص ژنتیک پزشکی</b></h4>
                    <p>پگاه لرکی</p>
                </div>
            </div>
            <div class="row">
                <div class="row" style="align-items: center;text-align: center;justify-content: center;">
                    <h1 style="color: #CC3366">سرگذشت ما</h1>
                </div>
                <div class="row imageRow" style="display: flex;align-items: center;text-align: center;justify-content: center;">
                    <div  class="image"><img src="{{url('files\images\1000005397.jpg')}}"></div>
                    <div  class="image"><img src="{{url('files\images\1000005397.jpg')}}"></div>
                </div>
                <div class="row" style="display: flex;align-items: center;text-align: center;justify-content: center;">
                    <p style="text-align: justify;direction: rtl;font-size: 24px;width: 60%" >
                        ما در ابتدا یک گروه کوچک تحصیل کرده‌ی دانشگاه شریف ولی عاشق میهن بودیم که پس از بازگشت دکتر ابوالفضل مطهری
                        از آمریکا در آزمایشگاه دانشکده کامپیوتر در سال ۹۲ با هدف یافتن راهی برای تحلیل اطلاعات ژنتیکی ایرانیان شروع
                        به فعالیت کردیم. مسیر پر از چالش و پرتگاه ولی تیم ما جسور و پرتلاش بود. اعضای تیم کم و زیاد می‌­شدند، و شکست
                        خوردن و به بن‌بست رسیدن را بارها تجربه کردیم. ولی هیچ‌گاه هدف پیدا کردن مسیر درمانی که مختص ایرانی‌ها باشد
                        از ذهنمان دور نشد. تا سرانجام آرزوی دیرینه ما پس از ۵ سال، محقق شد و در سال ۱۳۹۷ شرکت هومن کنسر برای یافتن
                        مسیری مختص بیماران ایرانی، در جهت درمان هر چه بهتر سرطان، پا به عرصه ظهور گذاشت، تا همراه روز‌های سخت
                        بیماران عزیز باشد.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
