<template>
<!--    <div class="container">-->
<!--        <div class="containerChild">-->
<!--            <div class="row" style="position: relative;display: flex;align-items: center;text-align: center;justify-content: center;">-->
<!--                <img style="width: 35%;  margin: 3px" src="./assets/images/1000005397.jpg">-->
<!--                <img style="width: 60% ; margin: 3px" src="./assets/images/1000005397.jpg">-->
<!--                <p class="DivAbsolutePosition">محیطی برای درمان پیشرفته سرطان</p>-->
<!--            </div>-->
<!--            <div class="row divOurStory">-->
<!--                <div style="width: 60%">-->
<!--                    <h1 style="color: #CC3366">داستان ما</h1>-->
<!--                    <p style="text-align: justify;direction: rtl;font-size: 24px;">-->
<!--                        هر انسان ویژگی‌های خاص ژنتیکی خود را از والدین و قومیت خود می‌گیرد، از این رو یک فرد ایرانی ویژگی‌های ژنتیکی-->
<!--                        خاص ایران را دارد و زمانی که درگیر سرطان می­‌شود باید مسیر درمانی خاص خودش برایش طراحی شود.-->
<!--                        هومن کنسر به کمک به روزترین متدها و با دانش امروزی، بهترین مسیر درمان را برای بیماران ایرانی درگیر سرطان-->
<!--                        پیشنهاد می‌دهد.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row divWhoWeAre">-->
<!--                <div style="width: 60%">-->
<!--                    <h1 style="color: #CC3366">ما چه کسی هستیم؟</h1>-->
<!--                    <p style="text-align: justify;direction: rtl;font-size: 24px;">-->
<!--                        ما تیمی از متخصصین حوزه­‌ی سرطان هستیم که با تحلیل ویژگی­‌های ژنتیکی افراد، مسیر درمانی خاص فرد ایرانی را به-->
<!--                        پزشکان پیشنهاد می­‌دهیم. ویژگی‌های ژنتیکی افراد به کمک دستگاه­‌های توالی‌یابی پیشرفته استخراج شده و اطلاعات-->
<!--                        حاصل به کمک تیم متخصص هومن کنسر تحلیل می‌شود و متخصصین حوزه ژنتیک ایران با کمک این اطلاعات، مسیر درمان و-->
<!--                        مراقبت این افراد در زمینه سرطان را به بهترین شکل طراحی می‌کنند.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row divTeam">-->
<!--                <div style="width: 60%">-->
<!--                    <h1 style="color: #CC3366">اعضای تیم</h1>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row rowCard" style="display: flex;align-items: center;text-align: center;justify-content: center;">-->
<!--                <div class="cardCustom">-->
<!--                    <h4><b>مدیر تیم فنی (ژنتیک)</b></h4>-->
<!--                    <p>مادح قادری</p>-->
<!--                </div>-->
<!--                <div class="cardCustom">-->
<!--                    <h4><b>مدیر عامل</b></h4>-->
<!--                    <p>مجتبی نیک‌عهد</p>-->
<!--                </div>-->
<!--                <div class="cardCustom">-->
<!--                    <h4><b>مدیر فنی تحلیل داده</b></h4>-->
<!--                    <p>دامون نشتاعلی</p>-->
<!--                </div>-->
<!--                <div class="cardCustom">-->
<!--                    <h4><b>مشاوره تحلیل داده</b></h4>-->
<!--                    <p>سید ابوالفضل مطهری</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row rowCard" style="display: flex;align-items: center;text-align: center;justify-content: center;">-->
<!--                <div class="cardCustom">-->
<!--                    <h4><b>متخصص ژنتیک</b></h4>-->
<!--                    <p>طیب علی سلمانی </p>-->
<!--                </div>-->
<!--                <div class="cardCustom">-->
<!--                    <h4><b>متخصص داروسازی بالینی</b></h4>-->
<!--                    <p>الهه لآلی</p>-->
<!--                </div>-->
<!--                <div class="cardCustom">-->
<!--                    <h4><b>متخصص ژنتیک پزشکی</b></h4>-->
<!--                    <p>گلناز خاکپور</p>-->
<!--                </div>-->
<!--                <div class="cardCustom">-->
<!--                    <h4><b>متخصص ژنتیک پزشکی</b></h4>-->
<!--                    <p>پگاه لرکی</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="row" style="align-items: center;text-align: center;justify-content: center;">-->
<!--                    <h1 style="color: #CC3366">سرگذشت ما</h1>-->
<!--                </div>-->
<!--                <div class="row imageRow" style="display: flex;align-items: center;text-align: center;justify-content: center;">-->
<!--                    <div  class="image"><img src="./assets/images/1000005397.jpg"></div>-->
<!--                    <div  class="image"><img src="./assets/images/1000005397.jpg"></div>-->
<!--                </div>-->
<!--                <div class="row" style="display: flex;align-items: center;text-align: center;justify-content: center;">-->
<!--                    <p style="text-align: justify;direction: rtl;font-size: 24px;width: 60%" >-->
<!--                        ما در ابتدا یک گروه کوچک تحصیل کرده‌ی دانشگاه شریف ولی عاشق میهن بودیم که پس از بازگشت دکتر ابوالفضل مطهری-->
<!--                        از آمریکا در آزمایشگاه دانشکده کامپیوتر در سال ۹۲ با هدف یافتن راهی برای تحلیل اطلاعات ژنتیکی ایرانیان شروع-->
<!--                        به فعالیت کردیم. مسیر پر از چالش و پرتگاه ولی تیم ما جسور و پرتلاش بود. اعضای تیم کم و زیاد می‌­شدند، و شکست-->
<!--                        خوردن و به بن‌بست رسیدن را بارها تجربه کردیم. ولی هیچ‌گاه هدف پیدا کردن مسیر درمانی که مختص ایرانی‌ها باشد-->
<!--                        از ذهنمان دور نشد. تا سرانجام آرزوی دیرینه ما پس از ۵ سال، محقق شد و در سال ۱۳۹۷ شرکت هومن کنسر برای یافتن-->
<!--                        مسیری مختص بیماران ایرانی، در جهت درمان هر چه بهتر سرطان، پا به عرصه ظهور گذاشت، تا همراه روز‌های سخت-->
<!--                        بیماران عزیز باشد.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <div class="container container-fluid">
        <div class="about-container">
            <div class="section-one">
                <div class="section-one-detile" >
                    <img src="@/assets/files/images/1000005397.jpg">
                    <img src="@/assets/files/images/1000005397.jpg">
                    <p style="font-size: 24px;background: white ;padding: 20px;box-shadow: 0px 0px 5px rgba(26,26,26,0.46);position: absolute;bottom: -30px">
                        <b>محیطی برای درمان پیشرفته سرطان</b>
                    </p>
                </div>
            </div>
            <div class="section-tow">
                <div class="section-tow-title">
                    داستان ما
                </div>
                <div class="section-tow-detile">
                    <p>
                        هر انسان ویژگی‌های خاص ژنتیکی خود را از والدین و قومیت خود می‌گیرد، از این رو یک فرد ایرانی ویژگی‌های ژنتیکی خاص ایران را دارد و زمانی که درگیر سرطان می­‌شود باید مسیر درمانی خاص خودش برایش طراحی شود.
                    </p>
                </div>
            </div>
            <div class="section-three">
                <div class="section-three-title">
                    ما چه کسی هستیم؟
                </div>
                <div class="section-three-detile">
                    <p>
                        ما تیمی از متخصصین حوزه­‌ی سرطان هستیم که با تحلیل ویژگی­‌های ژنتیکی افراد، مسیر درمانی خاص فرد ایرانی را به پزشکان پیشنهاد می­‌دهیم. ویژگی‌های ژنتیکی افراد به کمک دستگاه­‌های توالی‌یابی پیشرفته استخراج شده و اطلاعات حاصل به کمک تیم متخصص هومن کنسر تحلیل می‌شود و متخصصین حوزه ژنتیک ایران با کمک این اطلاعات، مسیر درمان و مراقبت این افراد در زمینه سرطان را به بهترین شکل طراحی می‌کنند.
                    </p>
                </div>
            </div>
            <div class="section-four">
                <div class="section-four-title">
                    اعضای تیم
                </div>
                <div class="section-four-detile">
                    <div class="team-one">
                        <div class="team-item">
                            <div class="user-icon">
                                <i class="fa fa-2x fa-2x fa-user-circle "></i>
                            </div>
                            <div class="user-name">
                                <div class="role">
                                    مشاوره تحلیل داده
                                </div>
                                <div class="role-name">
                                    سید ابوالفضل مطهری
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="user-icon">
                                <i class="fa fa-2x fa-user-circle "></i>
                            </div>
                            <div class="user-name">
                                <div class="role">
                                    مدیر فنی تحلیل داده
                                </div>
                                <div class="role-name">
                                    دامون نشتاعلی
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="user-icon">
                                <i class="fa fa-2x fa-user-circle "></i>
                            </div>
                            <div class="user-name">
                                <div class="role">
                                    مدیر عامل
                                </div>
                                <div class="role-name">
                                    مجتبی نیک‌عهد
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="user-icon">
                                <i class="fa fa-2x fa-user-circle "></i>
                            </div>
                            <div class="user-name">
                                <div class="role">
                                    مدیر تیم فنی (ژنتیک)
                                </div>
                                <div class="role-name">
                                    مادح قادری
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-two">
                        <div class="team-item">
                            <div class="user-icon">
                                <i class="fa fa-2x fa-user-circle "></i>
                            </div>
                            <div class="user-name">
                                <div class="role">
                                    متخصص ژنتیک پزشکی
                                </div>
                                <div class="role-name">
                                    پگاه لرکی
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="user-icon">
                                <i class="fa fa-2x fa-user-circle "></i>
                            </div>
                            <div class="user-name">
                                <div class="role">
                                    متخصص ژنتیک پزشکی
                                </div>
                                <div class="role-name">
                                    گلناز خاکپور
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="user-icon">
                                <i class="fa fa-2x fa-user-circle "></i>
                            </div>
                            <div class="user-name">
                                <div class="role">
                                    متخصص داروسازی بالینی
                                </div>
                                <div class="role-name">
                                    الهه لآلی
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="user-icon">
                                <i class="fa fa-2x fa-user-circle "></i>
                            </div>
                            <div class="user-name">
                                <div class="role">
                                    متخصص ژنتیک
                                </div>
                                <div class="role-name">
                                    طیب علی سلمانی
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-five">
                <div class="section-five-title">
                    سرگذشت ما
                </div>
                <div class="section-five-detile">
                    <div class="section-five-detile-image">
                        <img src="@/assets/files/images/1000005397.jpg">
                        <img src="@/assets/files/images/1000005397.jpg">
                    </div>
                    <div class="section-five-detile-text">
                        <p>
                            ما در ابتدا یک گروه کوچک تحصیل کرده‌ی دانشگاه شریف ولی عاشق میهن بودیم که پس از بازگشت دکتر ابوالفضل مطهری از آمریکا در آزمایشگاه دانشکده کامپیوتر در سال ۹۲ با هدف یافتن راهی برای تحلیل اطلاعات ژنتیکی ایرانیان شروع به فعالیت کردیم. مسیر پر از چالش و پرتگاه ولی تیم ما جسور و پرتلاش بود. اعضای تیم کم و زیاد می‌­شدند، و شکست خوردن و به بن‌بست رسیدن را بارها تجربه کردیم. ولی هیچ‌گاه هدف پیدا کردن مسیر درمانی که مختص ایرانی‌ها باشد از ذهنمان دور نشد. تا سرانجام آرزوی دیرینه ما پس از ۵ سال، محقق شد و در سال ۱۳۹۷ شرکت هومن کنسر برای یافتن مسیری مختص بیماران ایرانی، در جهت درمان هر چه بهتر سرطان، پا به عرصه ظهور گذاشت، تا همراه روز‌های سخت بیماران عزیز باشد.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"About"
}
</script>
<style scoped src="../../assets/components/about/all.css">
    /*@import "../../assets/components/about/all.css";*/
</style>