@extends('layout.master')

@section('title', 'نتائج البحث')

@section('content')
<main>
    <!-- Start pg-header -->
    <section class="pg-header section">
        <div class="container">
            <div class="bread wow fadeInDown">
                <a href="{{ route('home') }}" class="link">
                    <img src="{{ asset('images/icons/pg-header-1.svg') }}" alt="" class="icon-18" />
                </a>
                <span class="this_pg text-white"> نتائج البحث </span>
            </div>
            <h1 class="title text-center text-white wow fadeInUp"><b> نتائج البحث </b></h1>
        </div>
        <img src="{{ asset('images/pg-header-2.png') }}" alt="" class="bg" />
    </section>

    <!-- Start tours-sec -->
    <section class="tours-sec section">
        <div class="container">

            {{-- كلمة البحث --}}
            @if(request('q'))
            <div class="sec-head text-center mb-4">
                <h5 class="det">نتائج البحث عن: <span class="color-primary"><b>{{ request('q') }}</b></span></h5>
            </div>
            @endif

            <div class="box mb-5">
                <div class="row">
                    @forelse($ads as $ad)
                    <div class="col-lg-3 col-md-6">
                        <div class="tour_card {{ $ad->type == 'featured' ? 'featured_ad_card' : '' }}">
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
                                            <b class="color-primary">{{ $ad->price }}</b>
                                            <small>SR</small>
                                        </h3>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center py-5">
                        <h4 class="color-primary">لا توجد نتائج للبحث! 😔</h4>
                        <a href="{{ route('ads') }}" class="butn primary_butn mt-3">تصفح كل الإعلانات</a>
                    </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                @if($ads->hasPages())
                <div class="pagination-wrapper mt-5">
                    {{ $ads->appends(request()->query())->links('pagination::bootstrap-5') }}
                </div>
                @endif
            </div>
        </div>
    </section>
</main>
@endsection
