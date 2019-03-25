@extends('frontEnd.master')

@section('title')
    আমার শহর

@endsection


@section('mainContent')


    <div class="banner-silder">
        <div id="JiSlider" class="jislider">
            <ul>
                <li>
                    <div class="w3layouts-banner-top">

                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>পার্কিং</span>
                                <h3>পার্কিং</h3>


                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top1">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>পার্কিং</span>
                                <h3>পার্কিং</h3>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>অপরাধ প্রবন অঞ্চল</span>
                                <h3>অপরাধ প্রবন অঞ্চল</h3>


                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top3">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>অপরাধ প্রবন অঞ্চল</span>
                                <h3>অপরাধ প্রবন অঞ্চল</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top4">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>ঝুঁকিপূর্ণ অবকাঠামো</span>
                                <h3>ঝুঁকিপূর্ণ অবকাঠামো</h3>


                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top5">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <span>ঝুঁকিপূর্ণ অবকাঠামো</span>
                                <h3>ঝুঁকিপূর্ণ অবকাঠামো</h3>

                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>







<!-- //banner -->

<!-- about -->
<div class="about" id="about">
    <div class="container">
        <h2 class="w3_heade_tittle_agile">স্বাগতম আমার শহর এ</h2>
        <p class="sub_t_agileits"></p>

       <!-- <p class="ab">Your health is the one thing you absolutely should care about. I believe that 100% because I have seen the benefits from looking after my health, and I strive to do it every day.</p> -->


        <div class="about-w3lsrow">

            <div class="col-md-6 w3about-img">
                <img src="{{asset('public/frontEnd/images/city.jpg')}}" alt=" " class="img-responsive">
            </div>
            <div class="col-md-6 col-sm-7 w3about-img two">
                <div class="w3about-text">
                    <h5 class="w3l-subtitle">আপনার নিরাপদ জীবন আমাদের কাম্য</h5>
                    <p> আমাদের শহর বিভিন্ন সমস্যায় জর্জরিত। কিছু তথ্য এবং প্রয়োজনীয় প্লাটফর্ম এর মাধ্যমে যদি যথাযথ কতৃপক্ষের কাছে যদি পোঁছানো যায় অপরাধমূলক কর্মকাণ্ড অনেকাংশে কমানো সম্ভব। </p>


                    <div class="read"><a href="{{url('/details')}}" class="hvr-rectangle-in">বিস্তারিত</a></div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- /about-bottom -->
<!-- /girds_agileits -->

<!-- //girds_agileits -->

<div class="agile_menu" id="menu">
    <div class="container">
        <h3 class="w3_heade_tittle_agile">আমাদের সেবাসমুহ</h3>
        <p class="sub_t_agileits"></p>
        <div class="menu_w3ls_agile_top_section">
            <div class="ziehharmonika">
                <h3>পার্কিং নির্বাচন </h3>
                <div>
                    <div class="w3_agile_recipe-grid">

                        <div class="col-md-6 col-sm-6 tab-image">
                            <img src="{{asset('public/frontEnd/images/cctv_camera01.jpg')}}" alt="Medicinal">
                        </div>
                        <div class="col-md-6 col-sm-6 tab-info">
                            <h4>আমাদের কাজসমুহ</h4>
                            <p>এই সেশনে গ্রাহক গাড়ি পারকিং এর জন্য স্পট খুজবে এবং আমাদের সিস্টেম গ্রাহককে খালি স্পট গুলো দেখাবে।ফলে শহরের জ্যাম কমানো সম্ভব হবে। </p>
                            <div class="read"><a href="#" class="hvr-rectangle-in">বিস্তারিত</a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
                <h3>নগর সমস্যা </h3>
                <div>
                    <div class="w3_agile_recipe-grid">


                        <div class="col-md-6 col-sm-6 tab-info two">
                            <h4>আমাদের কাজসমুহ</h4>
                            <p> আমাদের নগরে অপরাধপ্রবন অঞ্চল আছে যা অনেকের অজানা। এই অঞ্চলগুলো নিয়ে কতৃপক্ষকে অবহিত করে অপরাধপ্রবন অঞ্চল এর উপর নজরদারি বাড়ানো সম্ভব।তাছাড়া ঝুঁকিপূর্ণ অবকাঠামো সম্পর্কে অবহিত করে সচেনতা বাড়ানো সম্ভব। </p>
                            <div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div>
                        </div>
                        <div class="col-md-6 col-sm-6 tab-image two">
                            <img src="{{asset('public/frontEnd/images/crime-drug.jpg')}}" alt="Medicinal">
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
                <h3>সাইবার অপরাধ</h3>
                <div>
                    <div class="w3_agile_recipe-grid">

                        <div class="col-md-6 col-sm-6 tab-image">
                            <img src="{{asset('public/frontEnd/images/crime-in-map.jpg')}}" alt="Medicinal">
                        </div>
                        <div class="col-md-6 col-sm-6 tab-info">
                            <h4>আমাদের কাজসমুহ</h4>
                            <p>সোশ্যাল সাইটগুলোতে ব্যাক্তিগত সাইবার অপরাধজনিত কর্মকাণ্ড পর্যবেক্ষণ এর মাধ্যমে অপরাধজনিত সাইবার কর্মকাণ্ডগুলো  যেমন ব্যাক্তিগত হেনস্তা প্রভৃতি কমানো সম্ভব। ... </p>
                            <div class="read"><a href="#" class="hvr-rectangle-in">বিস্তারিত</a></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>


                </div>
                <h3>২৪/৭</h3>
                <div>
                    <div class="w3_agile_recipe-grid">


                        <div class="col-md-6 col-sm-6 tab-info two">
                            <h4>আমাদের সেবাসমূহ</h4>
                            <p> ইমারজেন্সি সেবাসমুহ যেমন কল সিস্টেম, অ্যাম্বুলেন্স,নিকতস্থ থানার সাথে যোগাযোগ,ডাক্তার এর পরামর্শ প্রভৃতি সেবাসমুহ সহজে পোঁছে দেয়া যাবে।  </p>
                            <div class="read"><a href="#" class="hvr-rectangle-in">Read More</a></div>
                        </div>
                        <div class="col-md-6 col-sm-6 tab-image two">
                            <img src="{{asset('public/frontEnd/images/damage_road01.jpg')}}" alt="Medicinal">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services section -->
<div class="service-w3l jarallax" id="service">
    <div class="container">
        <h3 class="w3_heade_tittle_agile two"></h3>
        <p class="sub_t_agileits"></p>
        <div class="col-lg-4 col-md-4 col-sm-12 serv-agileinfo1">
            <div class="col-lg-12 col-md-12 col-sm-6 serv-wthree1" data-aos="zoom-in">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                                <div class="ch-info-back">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <h4 class="text-center">কাউন্সেলিং</h4>
                <p class="text-center">মানসিক বিকারগ্রস্ত বা মানসিকভাবে হতাশাগ্রস্থ বাসিন্দারা হতাশা থেকে বাচার জন্য প্রয়োজনীয় নির্দেশনামূলক ব্যাবস্থা থাকবে। বিভিন্ন কাউন্সেলিং প্রতিস্ঠানের তথ্য থাকবে।    </p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-6 serv-wthree2" data-aos="zoom-in">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-2"><i class="fa fa-user-md" aria-hidden="true"></i></div>
                                <div class="ch-info-back">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <h4 class="text-center">কমিউনিটি</h4>
                <p class="text-center">ব্যবহারকারিদের জন্য একটা প্লাটফর্ম যেটা ব্যবহারকারিদের নিজেদের মতামত প্রকাশের সুযোগ থাকবে। </p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 serv-agileinfo2">
            <div class="col-lg-12 col-md-12 col-sm-6 serv-wthree4" data-aos="zoom-in">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-3"><i class="fa fa-ambulance" aria-hidden="true"></i></div>
                                <div class="ch-info-back">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <h4 class="text-center">সাইবার অপরাধ প্রতিরোধ</h4>
                <p class="text-center">সাইবার অপরাধ প্রতিরোধের জন্য অভিযোগ বাক্স যেটা সাইবার অপরাধ গুলো পর্যবেক্ষণ করে প্রয়োজনীয় ব্যবস্থা নেয়া যাবে।</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 serv-agileinfo3">
            <div class="col-lg-12 col-md-12 col-sm-6 serv-wthree6" data-aos="zoom-in">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-4"><i class="fa fa-tint" aria-hidden="true"></i></div>
                                <div class="ch-info-back">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <h4 class="text-center">পারকিং </h4>
                <p class="text-center">পারকিং এর জন্য প্রয়োজনীয় এলাকাগুলোতে পারকিং স্পট খালি আছে বা নেই এমন তথ্য দিবে। যদি না থাকে তাহলে নিকটবর্তী কোথাও থাকলে তার তথ্য পাওওা যাবে।</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-6 serv-wthree5" data-aos="zoom-in">
                <ul class="ch-grid">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-5"><i class="fa fa-wheelchair" aria-hidden="true"></i></div>
                                <div class="ch-info-back">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <h4 class="text-center">ঝুঁকিপূর্ণ অবকাঠামো</h4>
                <p class="text-center">পারকিং এর জন্য প্রয়োজনীয় এলাকাগুলোতে পারকিং স্পট খালি আছে বা নেই এমন তথ্য দিবে। যদি না থাকে তাহলে নিকটবর্তী কোথাও থাকলে তার তথ্য পাওওা যাবে।</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- /services section -->

<!-- stats -->


@endsection