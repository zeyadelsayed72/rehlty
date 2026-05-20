@extends('layout.master')

@section('title', $ad->title_ar)

@section('content')
<main>
    <!-- Start pg-header -->
    <section class="pg-header section">
        <div class="container">
            <div class="bread wow fadeInDown">
                <a href="{{ route('home') }}" class="link">
                    <img src="{{ asset('images/icons/pg-header-1.svg') }}" alt="" class="icon-18" />
                </a>
                <span class="this_pg text-white"> {{ $ad->title_ar }} </span>
            </div>
            <h1 class="title text-center text-white wow fadeInUp"><b> {{ $ad->title_ar }} </b></h1>
        </div>
        <img src="{{ asset('images/pg-header-2.png') }}" alt="" class="bg" />
    </section>

    <!-- Start ad-det -->
    <section class="ad-det-pg section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="inner mb-5">
                        <div class="in-flex mb-4">
                            <div class="ps-3">
                                <h1 class="title mb-2"><b> {{ $ad->title_ar }} </b></h1>
                                <h6 class="subtitle">
                                    <span class="color-secondary">{{ $ad->category?->name_ar }}</span>
                                    @if($ad->category?->parent)
                                    - <span class="color-third">{{ $ad->category->parent->name_ar }}</span>
                                    @endif
                                </h6>
                            </div>
                            <span class="badge secondary_badge fs-6 ad_num_badge ms-2">
                                <small class="fw-normal">رقم الاعلان</small> <br>
                                <b class="d-block color-primary mt-1">{{ $ad->id }}</b>
                            </span>
                        </div>

                        {{-- الصور --}}
                        <div class="swiper mySwiper2 lg-slide-swiper mb-4">
                            <div class="swiper-wrapper">
                                @if($ad->image)
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="{{ asset('storage/' . $ad->image) }}" alt="" class="lg-img" />
                                    </div>
                                </div>
                                @else
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="{{ asset('images/header-1.png') }}" alt="" class="lg-img" />
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper sm-slide-swiper">
                            <div class="swiper-wrapper">
                                @if($ad->image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $ad->image) }}" alt="" class="sm-bg-header" />
                                </div>
                                @else
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/header-1.png') }}" alt="" class="sm-bg-header" />
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- التفاصيل --}}
                    <div class="inner mb-5">
                        <div class="row">
                            <div class="in-flex mb-5">
                                <h3 class="title mb-0"><b> التفاصيل </b></h3>
                                <div class="butns d-flex align-items-center">
                                    <a href="#" class="butn dark_butn sm_butn" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        <i class="fa-solid fa-triangle-exclamation"></i>
                                        <span class="tooltip_txt">الابلاغ عن الاعلان</span>
                                    </a>
                                    <a href="#" class="butn primary_butn sm_butn" data-bs-toggle="modal" data-bs-target="#contactAdModal">
                                        <i class="fa-solid fa-comment-dots"></i>
                                        <span class="tooltip_txt"> تواصل مع صاحب الاعلان </span>
                                    </a>
                                    <a href="#" class="butn secondary_butn sm_butn" data-bs-toggle="modal" data-bs-target="#shareAdModal">
                                        <i class="fa-solid fa-share-nodes"></i>
                                        <span class="tooltip_txt"> مشاركة الاعلان </span>
                                    </a>
                                    <a href="#" class="butn bg-light color-secondary sm_butn">
                                        <i class="fa-solid fa-heart"></i>
                                        <span class="tooltip_txt"> اضف الى المفضله </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="data-group inFlex">
                                    <div class="icon_outer"><i class="bi bi-calendar-minus"></i></div>
                                    <div class="content">
                                        <h6 class="label"><b>تاريخ الإعلان</b></h6>
                                        <p class="data color-primary fs-6 mb-0">{{ $ad->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="data-group inFlex">
                                    <div class="icon_outer"><i class="bi bi-person"></i></div>
                                    <div class="content">
                                        <h6 class="label"><b>صاحب الإعلان</b></h6>
                                        <p class="data color-primary fs-6 mb-0">{{ $ad->user->name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="data-group inFlex">
                                    <div class="icon_outer"><i class="bi bi-calendar-plus"></i></div>
                                    <div class="content">
                                        <h6 class="label"><b>تاريخ آخر تحديث</b></h6>
                                        <p class="data color-primary fs-6 mb-0">{{ $ad->updated_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="data-group inFlex">
                                    <div class="icon_outer"><i class="bi bi-building"></i></div>
                                    <div class="content">
                                        <h6 class="label"><b>المدينة</b></h6>
                                        <p class="data color-primary fs-6 mb-0">{{ $ad->city?->name_ar }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="data-group inFlex">
                                    <div class="icon_outer"><i class="bi bi-coin"></i></div>
                                    <div class="content">
                                        <h6 class="label"><b>السعر</b></h6>
                                        @if($ad->show_price)
                                        <p class="data color-primary fs-6 mb-0">{{ $ad->price }} ريال</p>
                                        @else
                                        <p class="data color-primary fs-6 mb-0">غير محدد</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- تفاصيل أكثر --}}
                    <div class="inner mb-5">
                        <div class="text-box">
                            <h3 class="title mb-4"><b>تفاصيل أكثر</b></h3>
                            <p class="p">{{ $ad->description_ar }}</p>
                            @if($ad->description_en)
                            <p class="p">{{ $ad->description_en }}</p>
                            @endif
                        </div>
                    </div>

                    {{-- التقييمات --}}
                    <div class="inner mb-5">
                        <div class="in-flex mb-5">
                            <h3 class="title"><b> التقييمات </b></h3>
                            <a href="#" class="butn secondary_butn" data-bs-toggle="modal" data-bs-target="#addRateModal">
                                <i class="fa-solid fa-plus me-2 ms-0"></i> <b> إضافة تقييم </b>
                            </a>
                        </div>
                        {{-- هيتربط لاحقاً لما نعمل الـ Reviews --}}
                    </div>

                    {{-- التعليقات --}}
                    <div class="inner">
                        <h3 class="title mb-5"><b> التعليقات </b></h3>
                        {{-- هيتربط لاحقاً لما نعمل الـ Comments --}}
                        <div class="add_comment d-flex">
                            <form class="w-100">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="تفاصيل التعليق ..." rows="5"></textarea>
                                    <button class="butn primary_butn mt-4">
                                        <i class="fa-solid fa-plus me-2 ms-0"></i> <b> اضافه </b>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="col-lg-4">
                    <div class="inner sm_inner mb-5 px-0 pb-0">
                        <h5 class="title ps-4 mb-4"><b> الموقع على الخريطه </b></h5>
                        <div class="map_box">
                            <iframe width="100%" height="300" frameborder="0" scrolling="no"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>
                        </div>
                    </div>

                    {{-- إعلانات مشابهة --}}
                    <div class="inner sm_inner related_adds">
                        <h5 class="title mb-4"><b> اعلانات مشابهة </b></h5>
                        @forelse($relatedAds as $related)
                        <a href="{{ route('ad_details', $related->id) }}">
                            <div class="item inFlex">
                                <img src="{{ $related->image ? asset('storage/' . $related->image) : asset('images/tour-1.png') }}"
                                    alt="" class="add_img" />
                                <div class="content">
                                    <h5 class="title fs-5 mb-3"><b>{{ $related->title_ar }}</b></h5>
                                    @if($related->show_price)
                                    <h3 class="price mb-0 d-flex align-items-center">
                                        <b class="color-primary">{{ $related->price }}</b>
                                        <small class="fs-6 fw-normal"> SR</small>
                                    </h3>
                                    @endif
                                </div>
                            </div>
                        </a>
                        @empty
                        <p class="text-center">لا توجد إعلانات مشابهة</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal التقييم --}}
    <div class="modal addRateModal fade" id="addRateModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <div class="modal-body col-lg-11 m-auto pb-5">
                    <img src="{{ asset('images/icons/star.svg') }}" alt="" class="modal_img" />
                    <h2 class="title text-center mb-5"><b> تقييم الاعلان </b></h2>
                    <form>
                        <div class="stars mb-5">
                            <label class="rate"><input type="radio" name="radio1" value="star1"><div class="face"></div><i class="far fa-star star one-star"></i></label>
                            <label class="rate"><input type="radio" name="radio1" value="star2"><div class="face"></div><i class="far fa-star star two-star"></i></label>
                            <label class="rate"><input type="radio" name="radio1" value="star3"><div class="face"></div><i class="far fa-star star three-star"></i></label>
                            <label class="rate"><input type="radio" name="radio1" value="star4"><div class="face"></div><i class="far fa-star star four-star"></i></label>
                            <label class="rate"><input type="radio" name="radio1" value="star5"><div class="face"></div><i class="far fa-star star five-star"></i></label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="كتابة الرسالة ..." rows="5"></textarea>
                        </div>
                    </form>
                    <button class="butn primary_butn m-auto mt-4 py-3 px-5"><b>إضافة</b></button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal المشاركة --}}
    <div class="modal fade" id="shareAdModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <div class="modal-body col-lg-11 m-auto pb-5">
                    <img src="{{ asset('images/icons/share_ad.svg') }}" alt="" class="modal_img" />
                    <h2 class="title text-center mb-5"><b>مشاركة الإعلان</b></h2>
                    <div class="social_links justify-content-center d-flex">
                        <a href="#" class="butn mx-1 text-white sm_butn" style="background-color: #3D5A96;"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="butn mx-1 text-white sm_butn" style="background-color: #2AA3EF;"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://wa.me/?text={{ urlencode($ad->title_ar . ' - ' . url()->current()) }}"
                            class="butn mx-1 text-white sm_butn" style="background-color: #47C757;">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal الابلاغ --}}
    <div class="modal fade" id="reportModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <div class="modal-body col-lg-11 m-auto pb-5">
                    <img src="{{ asset('images/icons/report.svg') }}" alt="" class="modal_img" />
                    <h2 class="title text-center mb-5"><b> إبلاغ عن الإعلان </b></h2>
                    <form class="col-md-10 m-auto">
                        <div class="form-group">
                            <select class="form-control form-select">
                                <option selected disabled>سبب البلاغ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="كتابة الرسالة ..." rows="5"></textarea>
                        </div>
                    </form>
                    <button class="butn bg-danger text-white m-auto mt-4 py-3 px-5"><b>إبلاغ</b></button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal التواصل --}}
    <div class="modal fade" id="contactAdModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <div class="modal-body col-lg-11 m-auto pb-5">
                    <img src="{{ $ad->user->avatar ? asset('storage/' . $ad->user->avatar) : asset('images/avatar-2.png') }}"
                        alt="" class="modal_img rounded-circle" />
                    <h2 class="title text-center mb-5"><b> تواصل مع صاحب الإعلان </b></h2>
                    <div class="social_links justify-content-center d-flex">
                        @if($ad->whatsapp)
                        <a href="https://wa.me/{{ $ad->whatsapp }}"
                            class="butn mx-1 text-white px-5 py-3 fs-4" style="background-color: #47C757;">
                            <i class="fa-brands fa-whatsapp me-0"></i>
                        </a>
                        @endif
                        @if($ad->phone)
                        <a href="tel:{{ $ad->phone }}"
                            class="butn mx-1 text-white px-5 py-3 fs-4" style="background-color: #57C1F2;">
                            <i class="fa-solid fa-phone me-0"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
