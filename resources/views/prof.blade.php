@extends('layout.master')

@section('content')
    <main>
        <!-- Start pg-header  -->
        <section class="pg-header section">
            <div class="container">
                <div class="bread wow fadeInDown">
                    <a href="#" class="link">
                        <img src="{{ asset('images/icons/pg-header-1.svg') }}" alt="" class="icon-18" />
                    </a>
                    <span class="this_pg text-white"> الملف الشخصي </span>
                </div>
                <h1 class="title text-center text-white wow fadeInUp"><b> الملف الشخصي </b></h1>
            </div>
            <img src="{{ asset('images/pg-header-2.png') }}" alt="" class="bg" />
        </section>
        <!-- Start profile-pg -->
        <section class="profile-pg  section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="profile_side mb-4">
                            <div class="prof_data mb-4">
                                <img src="{{ asset('images/avatar-2.png') }}" alt="" class="avatar" />
                                <h5 class="name"><b>عادل رامز</b></h5>
                                <p class="prof_rate fs-5 text-center mb-4">
                                    <img src="{{ asset('images/icons/star.svg') }}" alt="" class="icon me-2" />
                                    <b>4.5</b> <small>( 250 تقييم)</small>
                                </p>
                                <a href="#" class="butn dark_butn w-100 mt-4"><i
                                        class="fa-brands fa-rocketchat me-2 ms-0"></i> الشات </a>
                            </div>
                            <!-- <div class="statics_box ">
                                    <div class="statics d-flex mb-3">
                                        <img src="{{ asset('images/icons/profile-side-1.svg') }}" alt="" class="icon me-3 filterPrimary"/>
                                        <div class="content">
                                            <h6 class="label"><small>عدد الاعلانات</small></h6>
                                            <h5 class="num"><b>40</b></h5>
                                        </div>
                                    </div>
                                    <div class="statics d-flex">
                                        <img src="{{ asset('images/icons/profile-side-2.svg') }}" alt="" class="icon me-3 filterPrimary"/>
                                        <div class="content">
                                            <h6 class="label"><small> عدد مشاهدات الإعلانات </small></h6>
                                            <h5 class="num"><b>21,756</b></h5>
                                        </div>
                                    </div>
                                </div> -->

                        </div>
                        <div class="profile_side mb-5">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-tab1-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-tab1" type="button" role="tab"
                                    aria-controls="v-pills-tab1" aria-selected="true">
                                    <img src="{{ asset('images/icons/profile_tab_1.svg') }}" alt="" class="icon-18 me-2" /> الملف
                                    الشخصي
                                </button>
                                <button class="nav-link" id="v-pills-tab2-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-tab2" type="button" role="tab"
                                    aria-controls="v-pills-tab2" aria-selected="false">
                                    <img src="{{ asset('images/icons/profile_tab_2.svg') }}" alt="" class="icon-18 me-2" />
                                    الاعلانات
                                </button>
                                <button class="nav-link" id="v-pills-tab8-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-tab8" type="button" role="tab"
                                    aria-controls="v-pills-tab8" aria-selected="false">
                                    <img src="{{ asset('images/icons/profile_tab_8.png') }}" alt="" class="icon-18 me-2" />
                                    التقييمات
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content h-100" id="v-pills-tabContent">
                            <div class="tab-pane h-100 fade show active" id="v-pills-tab1" role="tabpanel"
                                aria-labelledby="v-pills-tab1-tab">
                                <div class="tab_wrapper info_tab">
                                    <h2 class="tab_title mb-5"><b>الملف الشخصي</b></h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="data-group">
                                                <span class="label"><small> البريد الإلكتروني</small></span>
                                                <p class="data fs-6 mt-2 mb-0"><b> Adel.Ramz@gmail.com </b></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="data-group">
                                                <span class="label"><small> رقم الجــوال </small></span>
                                                <p class="data fs-6 mt-2 mb-0"><b> +966-456623231 </b></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="data-group">
                                                <span class="label"><small> عدد الاعلانات</small></span>
                                                <p class="data fs-6 mt-2 mb-0"><b> 32541 </b></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="data-group">
                                                <span class="label"><small>عدد مشاهدات الإعلانات </small></span>
                                                <p class="data fs-6 mt-2 mb-0"><b> 456623231 </b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane h-100 fade" id="v-pills-tab2" role="tabpanel"
                                aria-labelledby="v-pills-tab2-tab">
                                <div class="tab_wrapper ad_tab">
                                    <h2 class="tab_title mb-5"><b> الاعلانات </b></h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="tour_card">
                                                <div class="img-box">
                                                    <a href="#">
                                                        <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                                    </a>
                                                    <button class="fav_butn"><i class="fa-solid fa-heart"></i></button>
                                                </div>
                                                <div class="card-body">
                                                    <div class="in-flex mb-3">
                                                        <h5 class="title mb-0"><b>جبل العلا</b></h5>
                                                        <span class="badge secondary_badge">بـــــري</span>
                                                    </div>
                                                    <div class="in-flex mb-3">
                                                        <p class="data mb-0"><i
                                                                class="fa-solid fa-location-arrow color-third me-1"></i>
                                                            الــرياض</p>
                                                        <p class="data mb-0"><i
                                                                class="fa-regular fa-clock color-secondary me-1"></i> منذ 5
                                                            دقائق</p>
                                                    </div>
                                                    <div class="foot">
                                                        <div class="in-flex">

                                                            <h3 class="price mb-0 d-flex align-items-center"><b
                                                                    class="color-primary">250</b> <small>SR</small></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tour_card featured_ad_card ">
                                                <div class="img-box">
                                                    <a href="#">
                                                        <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                                    </a>
                                                    <button class="fav_butn"><i class="fa-solid fa-heart"></i></button>
                                                </div>
                                                <div class="card-body">
                                                    <div class="in-flex mb-3">
                                                        <h5 class="title mb-0"><b>جبل العلا</b></h5>
                                                        <span class="badge secondary_badge">بـــــري</span>
                                                    </div>
                                                    <div class="in-flex mb-3">
                                                        <p class="data mb-0"><i
                                                                class="fa-solid fa-location-arrow color-third me-1"></i>
                                                            الــرياض</p>
                                                        <p class="data mb-0"><i
                                                                class="fa-regular fa-clock color-secondary me-1"></i> منذ 5
                                                            دقائق</p>
                                                    </div>
                                                    <div class="foot">
                                                        <div class="in-flex">

                                                            <h3 class="price mb-0 d-flex align-items-center"><b
                                                                    class="color-primary">250</b> <small>SR</small></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tour_card  ">
                                                <div class="img-box">
                                                    <a href="#">
                                                        <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                                    </a>
                                                    <button class="fav_butn"><i class="fa-solid fa-heart"></i></button>
                                                </div>
                                                <div class="card-body">
                                                    <div class="in-flex mb-3">
                                                        <h5 class="title mb-0"><b>جبل العلا</b></h5>
                                                        <span class="badge secondary_badge">بـــــري</span>
                                                    </div>
                                                    <div class="in-flex mb-3">
                                                        <p class="data mb-0"><i
                                                                class="fa-solid fa-location-arrow color-third me-1"></i>
                                                            الــرياض</p>
                                                        <p class="data mb-0"><i
                                                                class="fa-regular fa-clock color-secondary me-1"></i> منذ 5
                                                            دقائق</p>
                                                    </div>
                                                    <div class="foot">
                                                        <div class="in-flex">

                                                            <h3 class="price mb-0 d-flex align-items-center"><b
                                                                    class="color-primary">250</b> <small>SR</small></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tour_card">
                                                <div class="img-box">
                                                    <a href="#">
                                                        <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                                    </a>
                                                    <button class="fav_butn"><i class="fa-solid fa-heart"></i></button>
                                                </div>
                                                <div class="card-body">
                                                    <div class="in-flex mb-3">
                                                        <h5 class="title mb-0"><b>جبل العلا</b></h5>
                                                        <span class="badge secondary_badge">بـــــري</span>
                                                    </div>
                                                    <div class="in-flex mb-3">
                                                        <p class="data mb-0"><i
                                                                class="fa-solid fa-location-arrow color-third me-1"></i>
                                                            الــرياض</p>
                                                        <p class="data mb-0"><i
                                                                class="fa-regular fa-clock color-secondary me-1"></i> منذ 5
                                                            دقائق</p>
                                                    </div>
                                                    <div class="foot">
                                                        <div class="in-flex">

                                                            <h3 class="price mb-0 d-flex align-items-center"><b
                                                                    class="color-primary">250</b> <small>SR</small></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane h-100 fade" id="v-pills-tab8" role="tabpanel"
                                aria-labelledby="v-pills-tab8-tab">
                                <div class="tab_wrapper rate_tab">
                                    <h2 class="tab_title mb-5"><b> التقييمات </b></h2>
                                    <div class="ad_rate_box">
                                        <div class="ad-det-pg bg-white">
                                            <div class="inner row ">
                                                <h6 class="rate_title">
                                                    <img src="{{ asset('images/categ-1.png') }}" alt="" class="sm_img" />
                                                    اسم الاعلان
                                                </h6>
                                                <div class="col-lg-6">
                                                    <div class="feedback_card d-flex">
                                                        <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatar" />
                                                        <div class="content ">
                                                            <div class="in-flex">
                                                                <div class="stars">
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <span class="date"><small>15 jan 2022</small></span>
                                                            </div>
                                                            <h5 class="name mt-3"><b>Adel saif</b></h5>
                                                            <p class="det">
                                                                <small>هناك حقيقة مثبتة منذ زمن طويل على الشكل الخارجي
                                                                    للنص</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="feedback_card d-flex">
                                                        <img src="{{ asset('images/avatar-2.png') }}" alt="" class="avatar" />
                                                        <div class="content ">
                                                            <div class="in-flex">
                                                                <div class="stars">
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <span class="date"><small>15 jan 2022</small></span>
                                                            </div>
                                                            <h5 class="name mt-3"><b>Adel saif</b></h5>
                                                            <p class="det">
                                                                <small>هناك حقيقة مثبتة منذ زمن طويل على الشكل الخارجي
                                                                    للنص</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inner row">
                                                <h6 class="rate_title">
                                                    <img src="{{ asset('images/categ-2.png') }}" alt="" class="sm_img" />
                                                    اسم الاعلان
                                                </h6>
                                                <div class="col-lg-6">
                                                    <div class="feedback_card d-flex">
                                                        <img src="{{ asset('images/avatar-2.png') }}" alt="" class="avatar" />
                                                        <div class="content ">
                                                            <div class="in-flex">
                                                                <div class="stars">
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <span class="date"><small>15 jan 2022</small></span>
                                                            </div>
                                                            <h5 class="name mt-3"><b>Adel saif</b></h5>
                                                            <p class="det">
                                                                <small>هناك حقيقة مثبتة منذ زمن طويل على الشكل الخارجي
                                                                    للنص</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="feedback_card d-flex">
                                                        <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatar" />
                                                        <div class="content ">
                                                            <div class="in-flex">
                                                                <div class="stars">
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star active"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <span class="date"><small>15 jan 2022</small></span>
                                                            </div>
                                                            <h5 class="name mt-3"><b>Adel saif</b></h5>
                                                            <p class="det">
                                                                <small>هناك حقيقة مثبتة منذ زمن طويل على الشكل الخارجي
                                                                    للنص</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
