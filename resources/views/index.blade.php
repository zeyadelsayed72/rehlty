@extends('layout.master')

@section('title', 'الرئيسية')

@section('content')
<main>
    <!-- Start header -->
    <header class="header section">
        <div class="swiper-container header-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="item">
                        <div class="container">
                            <div class="col-lg-5 col-md-8">
                                <div class="text-box wow zoomIn">
                                    <h1 class="title text-white mb-4"><b>أفضل الخدمات <br> الترفيهية والسياحية</b></h1>
                                    <p class="det mb-4">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.</p>
                                    <a href="#" class="butn white_butn"><img src="{{ asset('images/icons/arrow.svg') }}" alt="" class="icon-15 me-2" /> <b>إكتشف</b></a>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('images/header-1.png') }}" alt="" class="bg" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item">
                        <div class="container">
                            <div class="col-lg-5 col-md-8">
                                <div class="text-box wow zoomIn">
                                    <h1 class="title text-white mb-4"><b>أفضل الخدمات <br> الترفيهية والسياحية</b></h1>
                                    <p class="det mb-4">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.</p>
                                    <a href="#" class="butn white_butn"><img src="{{ asset('images/icons/arrow.svg') }}" alt="" class="icon-15 me-2" /> <b>إكتشف</b></a>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('images/header-2.jpg') }}" alt="" class="bg" />
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="search-box wow fadeIn">
            <form action="{{ route('search') }}" method="GET">
                <div class="row justify-content-around align-items-center">
                    <div class="col-lg-2 col-md-6">
                        <div class="form-group">
                            <label class="label">المدينة</label>
                            <select class="form-control" name="city_id">
                                <option selected disabled>إختر</option>
                            </select>
                            <img src="{{ asset('images/icons/search-1.svg') }}" alt="" class="icon filterPrimary" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="form-group">
                            <label class="label">تصنيف رئيسي</label>
                            <select class="form-control" name="category_id">
                                <option selected disabled>إختر</option>
                            </select>
                            <img src="{{ asset('images/icons/search-2.svg') }}" alt="" class="icon filterPrimary" />
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-6">
                        <button class="butn primary_butn w-100 py-3 mt-4">
                            <i class="fa-solid fa-magnifying-glass mx-0"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </header>

    <!-- Start categ-sec -->
    <section class="categ-sec section">
        <div class="container">
            <div class="sec-head text-center wow fadeInDown mt-5 mb-0">
                <h1 class="sec-title m-auto mb-2"><b> الأقسام </b></h1>
                <p class="det"><small>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </small></p>
            </div>
            <div class="swiper-container categ-swiper categ_nav nav nav-pills pb-0 pt-3" id="pills-tab" role="tablist">
                <div class="swiper-wrapper pt-5">
                    @foreach($categories as $category)
                    <div class="swiper-slide nav-item">
                        <a href="#" class="nav-link w-100 p-0"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-mainCateg{{ $category->id }}">
                            <div class="categ_card">
                                <div class="icon_outer">
                                    <img src="{{ $category->icon ?? asset('images/icons/categ-1.svg') }}" alt="" class="icon" />
                                </div>
                                <h6 class="title mb-0"><b>{{ $category->name_ar }}</b></h6>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                @foreach($categories as $category)
                <div class="tab-pane fade" id="pills-mainCateg{{ $category->id }}" role="tabpanel">
                    <div class="categBox">
                        <div class="nav nav-pills pb-3" role="tablist">
                            @foreach($category->children as $child)
                            <div class="nav-item">
                                <div class="nav-link w-100 p-0">
                                    <div class="subCateg_card">
                                        <img src="{{ $child->icon ?? asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                        <h6 class="subcateg_title text-center mt-2"><small>{{ $child->name_ar }}</small></h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Start العروض الاستثنائية -->
    <section class="tours-sec section">
        <div class="container">
            <div class="sec-head text-center mb-4 wow fadeInDown">
                <h1 class="sec-title m-auto mb-2"><b>العروض الإستثنائية</b></h1>
                <p class="det"><small>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </small></p>
            </div>
            <div class="swiper-container tours-swiper pt-2">
                <div class="swiper-wrapper pb-5 pt-5">
                    @foreach($featuredAds as $ad)
                    <div class="swiper-slide">
                        <div class="tour_card featured_ad_card wow fadeInUp">
                            <div class="img-box">
                                <a href="{{ route('ad_details', $ad->id) }}">
                                    <img src="{{ $ad->image ? asset('storage/' . $ad->image) : asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                </a>
                                <button class="fav_butn"><i class="fa-solid fa-heart"></i></button>
                            </div>
                            <div class="card-body">
                                <div class="in-flex mb-3">
                                    <h5 class="title mb-0"><b>{{ $ad->title_ar }}</b></h5>
                                    <span class="badge secondary_badge">{{ $ad->category?->name_ar }}</span>
                                </div>
                                <div class="in-flex mb-3">
                                    <p class="data mb-0"><i class="fa-solid fa-location-arrow color-third me-1"></i> {{ $ad->city?->name_ar }}</p>
                                    <p class="data mb-0"><i class="fa-regular fa-clock color-secondary me-1"></i> {{ $ad->created_at->diffForHumans() }}</p>
                                </div>
                                <div class="foot">
                                    <div class="in-flex">
                                        <a href="#" class="info inFlex">
                                            <img src="{{ $ad->user->avatar ? asset('storage/' . $ad->user->avatar) : asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                            <h6 class="name mb-0"><b>{{ $ad->user->name }}</b></h6>
                                        </a>
                                        @if($ad->show_price)
                                        <h3 class="price mb-0 d-flex align-items-center"><b class="color-primary">{{ $ad->price }}</b> <small>SR</small></h3>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <a href="{{ route('ads') }}" class="more_butn d-flex align-items-center mt-1 m-auto w-fit wow zoomIn">
                <span class="icon_outer"><i class="fa-solid fa-angle-right"></i></span> <b> تصفح المزيد </b>
            </a>
        </div>
    </section>

    <!-- Start آخر الإعلانات -->
    <section class="ads-sec tours-sec section">
        <div class="container">
            <div class="sec-head text-center wow fadeInDown mb-5">
                <h1 class="sec-title m-auto mb-2"><b> آخر الإعلانات </b></h1>
                <p class="det"><small>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </small></p>
            </div>
            <div class="row">
                @foreach($latestAds as $ad)
                <div class="col-lg-4 col-md-6">
                    <div class="tour_card wow fadeInUp">
                        <div class="img-box">
                            <a href="{{ route('ad_details', $ad->id) }}">
                                <img src="{{ $ad->image ? asset('storage/' . $ad->image) : asset('images/tour-1.png') }}" alt="" class="sec-img" />
                            </a>
                            <button class="fav_butn"><i class="fa-solid fa-heart"></i></button>
                        </div>
                        <div class="card-body">
                            <div class="in-flex mb-3">
                                <h5 class="title mb-0"><b>{{ $ad->title_ar }}</b></h5>
                                <span class="badge secondary_badge">{{ $ad->category?->name_ar }}</span>
                            </div>
                            <div class="in-flex mb-3">
                                <p class="data mb-0"><i class="fa-solid fa-location-arrow color-third me-1"></i> {{ $ad->city?->name_ar }}</p>
                                <p class="data mb-0"><i class="fa-regular fa-clock color-secondary me-1"></i> {{ $ad->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="foot">
                                <div class="in-flex">
                                    <a href="#" class="info inFlex">
                                        <img src="{{ $ad->user->avatar ? asset('storage/' . $ad->user->avatar) : asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                        <h6 class="name mb-0"><b>{{ $ad->user->name }}</b></h6>
                                    </a>
                                    @if($ad->show_price)
                                    <h3 class="price mb-0 d-flex align-items-center"><b class="color-primary">{{ $ad->price }}</b> <small>SR</small></h3>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="{{ route('ads') }}" class="more_butn d-flex align-items-center mt-5 m-auto w-fit wow zoomIn">
                <span class="icon_outer"><i class="fa-solid fa-angle-right"></i></span> <b> تصفح المزيد </b>
            </a>
        </div>
    </section>

    <!-- Start features-sec -->
    <section class="features-sec section">
        <div class="container">
            <div class="sec-head text-center wow fadeInDown mb-5">
                <h1 class="sec-title m-auto mb-2"><b> ماذا يميزنا </b></h1>
                <p class="det"><small>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </small></p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature_card wow fadeInUp text-center">
                        <div class="icon"><i class="fa-regular fa-heart"></i></div>
                        <div class="content">
                            <h5 class="title mb-3"><b>مفضلاتك في مكان واحد</b></h5>
                            <p class="det col-md-10 m-auto mb-0">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature_card wow fadeInUp text-center">
                        <div class="icon"><i class="fa-regular fa-clock"></i></div>
                        <div class="content">
                            <h5 class="title mb-3"><b>إختيار وقت الرحلة</b></h5>
                            <p class="det col-md-10 m-auto mb-0">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature_card wow fadeInUp text-center">
                        <div class="icon"><i class="fa-regular fa-pen-to-square"></i></div>
                        <div class="content">
                            <h5 class="title mb-3"><b>تعديل قوائم الرحلات</b></h5>
                            <p class="det col-md-10 m-auto mb-0">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start downloading-sec -->
    <section class="downloading-sec section">
        <div class="container">
            <div class="col-md-8 ms-auto">
                <div class="text-box wow fadeInUp pt-5 mt-4 pb-5">
                    <h1 class="sec-title mb-4"><b> تحميل التطبيق </b></h1>
                    <p class="det col-md-7">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما</p>
                    <div class="app_links mt-5">
                        <a href="#"><img src="{{ asset('images/play_store.svg') }}" alt="" class="store_img" /></a>
                        <a href="#"><img src="{{ asset('images/app_store.svg') }}" alt="" class="store_img" /></a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/app-1.png') }}" alt="" class="img_1 wow zoomIn" />
    </section>
</main>
@endsection
