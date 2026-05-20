@extends('layout.master')

@section('title', 'الإعلانات الاستثنائيه')

@section('content')
<main>
    <!-- Start pg-header -->
    <section class="pg-header section">
        <div class="container">
            <div class="bread wow fadeInDown">
                <a href="{{ route('home') }}" class="link">
                    <img src="{{ asset('images/icons/pg-header-1.svg') }}" alt="" class="icon-18" />
                </a>
                <span class="this_pg text-white"> الإعلانات </span>
            </div>
            <h1 class="title text-center text-white wow fadeInUp"><b> الإعلانات </b></h1>
        </div>
        <img src="{{ asset('images/pg-header-2.png') }}" alt="" class="bg" />
    </section>

    <!-- Start categ-sec -->
    <section class="categ-sec section">
        <div class="container">
            <div class="sec-head text-center mb-0">
                <h1 class="sec-title m-auto mb-0"><b> الأقسام </b></h1>
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

    <!-- Start categ-pg -->
    <section class="categ-pg section pt-0">
        <div class="container-fluid">
            <div class="row">

                {{-- Sidebar فلتر البحث --}}
                <div class="col-lg-3">
                    <div class="box search_box">
                        <div class="sec-head mb-4">
                            <h3 class="sec-title third_title mb-2"><b> فلتر البحث </b></h3>
                        </div>
                        <form action="{{ route('ads') }}" method="GET">
                            <div class="form-group">
                                <input class="form-control" name="name"
                                    value="{{ request('name') }}"
                                    placeholder="إسم الإعلان ..." />
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="city_id">
                                    <option selected disabled>المدينة</option>
                                    @foreach($cities as $city)
                                    <option value="{{ $city->id }}"
                                        {{ request('city_id') == $city->id ? 'selected' : '' }}>
                                        {{ $city->name_ar }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="price-slider mb-4">
                                <h6 class="price_title color-dark fw-normal mb-3">السعر</h6>
                                <div class="price-wrapper">
                                    <div id="slider-range" class="price-filter-range"></div>
                                    <div class="inputs-wrapper">
                                        <input min="0" max="10000" id="max_price" name="max_price"
                                            value="{{ request('max_price', 10000) }}"
                                            class="price-range-field" />
                                        <input min="0" max="9900" id="min_price" name="min_price"
                                            value="{{ request('min_price', 0) }}"
                                            class="price-range-field" />
                                    </div>
                                </div>
                            </div>
                            <button class="butn primary_butn m-auto mt-4 w-100 py-3 px-5">
                                <i class="fa-solid fa-magnifying-glass me-2"></i> <b>بحث</b>
                            </button>
                        </form>
                    </div>
                </div>

                {{-- الإعلانات --}}
                <div class="col-lg-9">
                    <div class="prods_inner row">
                        @forelse($ads as $ad)
                        <div class="col-lg-4 col-md-6">
                            <div class="tour_card featured_ad_card">
                                <div class="img-box">
                                    <a href="{{ route('ad_details', $ad->id) }}">
                                        <img src="{{ $ad->image ? asset('storage/' . $ad->image) : asset('images/tour-1.png') }}"
                                            alt="" class="sec-img" />
                                    </a>
                                    <button class="fav_butn"><i class="fa-solid fa-heart"></i></button>
                                </div>
                                <div class="card-body">
                                    <div class="in-flex mb-3">
                                        <h5 class="title mb-0"><b>{{ $ad->title_ar }}</b></h5>
                                        <span class="badge secondary_badge">{{ $ad->category?->name_ar }}</span>
                                    </div>
                                    <div class="in-flex mb-3">
                                        <p class="data mb-0">
                                            <i class="fa-solid fa-location-arrow color-third me-1"></i>
                                            {{ $ad->city?->name_ar }}
                                        </p>
                                        <p class="data mb-0">
                                            <i class="fa-regular fa-clock color-secondary me-1"></i>
                                            {{ $ad->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                    <div class="foot">
                                        <div class="in-flex">
                                            <a href="#" class="info inFlex">
                                                <img src="{{ $ad->user->avatar ? asset('storage/' . $ad->user->avatar) : asset('images/avatar-1.png') }}"
                                                    alt="" class="avatr" />
                                                <h6 class="name mb-0"><b>{{ $ad->user->name }}</b></h6>
                                            </a>
                                            @if($ad->show_price)
                                            <h3 class="price mb-0 d-flex align-items-center">
                                                <b class="color-primary">{{ $ad->price }}</b> <small>SR</small>
                                            </h3>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12 text-center py-5">
                            <h4>لا توجد إعلانات</h4>
                        </div>
                        @endforelse
                    </div>

                    {{-- Pagination --}}
                    <div class="pagination-wrapper mt-5">
                        {{ $ads->appends(request()->query())->links('pagination::bootstrap-5') }}
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection
