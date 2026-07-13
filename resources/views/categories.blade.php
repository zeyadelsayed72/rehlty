@extends('layout.master')

@section('title' , 'الاقسام')

@section('content')
    <main>
        <!-- Start pg-header  -->
        <section class="pg-header section">
            <div class="container">
                <div class="bread wow fadeInDown">
                    <a href="#" class="link">
                        <img src="{{ asset('images/icons/pg-header-1.svg') }}" alt="" class="icon-18" />
                    </a>
                    <span class="this_pg text-white"> الاقسام </span>
                </div>
                <h1 class="title text-center text-white wow fadeInUp"><b> الاقسام </b></h1>
            </div>
            <img src="{{ asset('images/pg-header-2.png') }}" alt="" class="bg" />
        </section>
        <!-- Start categ-sec -->
        <section class="categ-sec section">
            <div class="container">
                <div class="sec-head text-center mb-0">
                    <h1 class="sec-title m-auto mb-0"><b> الأقسام </b></h1>
                </div>
                <div class="swiper-container categ-swiper categ_nav nav nav-pills pb-0 pt-3 "id="pills-tab" role="tablist">
                    <div class="swiper-wrapper  pt-5">
                        <div class="swiper-slide nav-item">
                            <a href="#" class="nav-link w-100 p-0" id="pills-mainCateg1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-mainCateg1" type="button" role="tab"
                                aria-controls="pills-mainCateg1" aria-selected="false">
                                <div class="categ_card">
                                    <div class="icon_outer">
                                        <img src="{{ asset('images/icons/categ-1.svg') }}" alt="" class="icon" />
                                    </div>
                                    <h6 class="title mb-0"><b>بحري</b></h6>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide nav-item">
                            <a href="#" class="nav-link w-100 p-0" id="pills-mainCateg2-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-mainCateg2" type="button" role="tab"
                                aria-controls="pills-mainCateg2" aria-selected="false">
                                <div class="categ_card">
                                    <div class="icon_outer">
                                        <img src="{{ asset('images/icons/categ-2.svg') }}" alt="" class="icon" />
                                    </div>
                                    <h6 class="title mb-0"><b>مطاعم وكافيهات</b></h6>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide nav-item">
                            <a href="#" class="nav-link w-100 p-0" id="pills-mainCateg3-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-mainCateg3" type="button" role="tab"
                                aria-controls="pills-mainCateg3" aria-selected="false">
                                <div class="categ_card">
                                    <div class="icon_outer">
                                        <img src="{{ asset('images/icons/categ-3.svg') }}" alt="" class="icon" />
                                    </div>
                                    <h6 class="title mb-0"><b>اسم التصنيف </b></h6>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide nav-item">
                            <a href="#" class="nav-link w-100 p-0" id="pills-mainCateg4-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-mainCateg4" type="button" role="tab"
                                aria-controls="pills-mainCateg4" aria-selected="false">
                                <div class="categ_card">
                                    <div class="icon_outer">
                                        <img src="{{ asset('images/icons/categ-4.svg') }}" alt="" class="icon" />
                                    </div>
                                    <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide nav-item">
                            <a href="#" class="nav-link w-100 p-0" id="pills-mainCateg5-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-mainCateg5" type="button" role="tab"
                                aria-controls="pills-mainCateg5" aria-selected="false">
                                <div class="categ_card">
                                    <div class="icon_outer">
                                        <img src="{{ asset('images/icons/mail.svg') }}" alt="" class="icon" />
                                    </div>
                                    <h6 class="title mb-0"><b>اسم التصنيف </b></h6>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide nav-item">
                            <a href="#" class="nav-link w-100 p-0" id="pills-mainCateg6-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-mainCateg6" type="button" role="tab"
                                aria-controls="pills-mainCateg6" aria-selected="false">
                                <div class="categ_card">
                                    <div class="icon_outer">
                                        <img src="{{ asset('images/icons/phone.svg') }}" alt="" class="icon" />
                                    </div>
                                    <h6 class="title mb-0"><b> القسم </b></h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-mainCateg1" role="tabpanel"
                        aria-labelledby="pills-mainCateg1-tab">
                        <div class="categBox ">
                            <div class="nav nav-pills pb-3" id="pills-tab2" role="tablist">
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-4.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subCategBox">
                                <div class="row">
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-mainCateg2" role="tabpanel"
                        aria-labelledby="pills-mainCateg2-tab">
                        <div class="categBox ">
                            <div class="nav nav-pills pb-3" id="pills-tab2" role="tablist">
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-4.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subCategBox">
                                <div class="row">
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-mainCateg3" role="tabpanel"
                        aria-labelledby="pills-mainCateg3-tab">
                        <div class="categBox ">
                            <div class="nav nav-pills pb-3" id="pills-tab2" role="tablist">
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-4.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subCategBox">
                                <div class="row">
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-mainCateg4" role="tabpanel"
                        aria-labelledby="pills-mainCateg4-tab">
                        <div class="categBox ">
                            <div class="nav nav-pills pb-3" id="pills-tab2" role="tablist">
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-4.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subCategBox">
                                <div class="row">
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-mainCateg5" role="tabpanel"
                        aria-labelledby="pills-mainCateg5-tab">
                        <div class="categBox ">
                            <div class="nav nav-pills pb-3" id="pills-tab2" role="tablist">
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-4.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subCategBox">
                                <div class="row">
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-mainCateg6" role="tabpanel"
                        aria-labelledby="pills-mainCateg6-tab">
                        <div class="categBox ">
                            <div class="nav nav-pills pb-3" id="pills-tab2" role="tablist">
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/categ-4.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <div class="nav-link w-100 p-0">
                                        <div class="subCateg_card">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subCategBox">
                                <div class="row">
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="subCateg_card2">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <h6 class="subcateg_title text-center mt-2"><small>اسم التصنيف</small></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Start categ-pg -->
        <section class="categ-pg section pt-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="box search_box">
                            <div class="sec-head mb-4">
                                <h3 class="sec-title third_title  mb-2"><b> فلتر البحث </b></h3>
                            </div>
                            <form>
                                <div class="form-group">
                                    <input class="form-control" placeholder="إسم الإعلان ..." />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option selected disabled>المدينه</option>
                                        <option>إختر</option>
                                        <option>إختر</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option selected disabled>الاسعار</option>
                                        <option>إختر</option>
                                        <option>إختر</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option selected disabled>عدد المشاهدات</option>
                                        <option>إختر</option>
                                        <option>إختر</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option selected disabled>التقييم</option>
                                        <option>إختر</option>
                                        <option>إختر</option>
                                    </select>
                                </div>
                                <div class="price-slider mb-4">
                                    <h6 class="price_title color-dark fw-normal mb-3">السعر</h6>
                                    <div class="price-wrapper">
                                        <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                                        <div class="inputs-wrapper">
                                            <input min=0 max="10000" oninput="validity.valid||(value='10000');"
                                                id="max_price" class="price-range-field" />
                                            <input min=0 max="9900" oninput="validity.valid||(value='0');"
                                                id="min_price" class="price-range-field" />
                                        </div>
                                    </div>
                                </div>

                                <button class="butn primary_butn m-auto mt-4 w-100 py-3 px-5">
                                    <i class="fa-solid fa-magnifying-glass me-2 ms-"></i> <b>بحث</b>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="prods_inner row">
                            <div class="col-lg-4 col-md-6">
                                <div class="tour_card featured_ad_card ">
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i class="fa-regular fa-clock color-secondary me-1"></i>
                                                منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tour_card">
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i class="fa-regular fa-clock color-secondary me-1"></i>
                                                منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tour_card">
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i class="fa-regular fa-clock color-secondary me-1"></i>
                                                منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tour_card">
                                    <div class="img-box">
                                        <a href="#">
                                            <img src="{{ asset('images/header-1.png') }}" alt="" class="sec-img" />
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i class="fa-regular fa-clock color-secondary me-1"></i>
                                                منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i class="fa-regular fa-clock color-secondary me-1"></i>
                                                منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tour_card">
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i class="fa-regular fa-clock color-secondary me-1"></i>
                                                منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tour_card">
                                    <div class="img-box">
                                        <a href="#">
                                            <img src="{{ asset('images/header-1.png') }}" alt="" class="sec-img" />
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i
                                                    class="fa-regular fa-clock color-secondary me-1"></i> منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i
                                                    class="fa-regular fa-clock color-secondary me-1"></i> منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i
                                                    class="fa-regular fa-clock color-secondary me-1"></i> منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tour_card">
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i
                                                    class="fa-regular fa-clock color-secondary me-1"></i> منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tour_card">
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i
                                                    class="fa-regular fa-clock color-secondary me-1"></i> منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tour_card">
                                    <div class="img-box">
                                        <a href="#">
                                            <img src="{{ asset('images/header-1.png') }}" alt="" class="sec-img" />
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
                                                    class="fa-solid fa-location-arrow color-third me-1"></i> الــرياض</p>
                                            <p class="data mb-0"><i
                                                    class="fa-regular fa-clock color-secondary me-1"></i> منذ 5 دقائق</p>
                                        </div>
                                        <div class="foot">
                                            <div class="in-flex">
                                                <a href="#" class="info inFlex">
                                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="avatr" />
                                                    <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                </a>
                                                <h3 class="price mb-0 d-flex align-items-center"><b
                                                        class="color-primary">250</b> <small>SR</small></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-wrapper mt-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- categ Modal -->
        <div class="modal categModal fade" id="categModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-12 m-auto pb-5">
                        <img src="{{ asset('images/icons/categories.png') }}" alt="" class="modal_img" />
                        <h2 class="title color-secondary text-center mb-4"><b> أقسام البحري</b></h2>
                        <!-- First Categ -->
                        <h6 class="subtitle color-primary mb-0"><b> اختر القسم الفرعي الاول :</b></h6>
                        <div class="categ_box">
                            <div class="categ_nav nav nav-pills pb-3 " id="pills-tab" role="tablist">
                                <div class="nav-item">
                                    <a href="#" class="nav-link w-100 p-0" id="pills-tab1-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-tab1" type="button"
                                        role="tab" aria-controls="pills-tab1" aria-selected="false">
                                        <div class="categ_card ">
                                            <img src="{{ asset('images/categ-1.png') }}" alt="" class="sec-img" />
                                            <div class="text">
                                                <h6 class="title mb-0"><b>بحري</b></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a href="#" class="nav-link w-100 p-0" id="pills-tab2-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-tab2" type="button"
                                        role="tab" aria-controls="pills-tab2" aria-selected="false">
                                        <div class="categ_card ">
                                            <img src="{{ asset('images/categ-2.png') }}" alt="" class="sec-img" />
                                            <div class="text">
                                                <h6 class="title mb-0"><b>بحري</b></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a href="#" class="nav-link w-100 p-0" id="pills-tab3-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-tab3" type="button"
                                        role="tab" aria-controls="pills-tab3" aria-selected="false">
                                        <div class="categ_card ">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <div class="text">
                                                <h6 class="title mb-0"><b>بحري</b></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a href="#" class="nav-link w-100 p-0" id="pills-tab4-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-tab4" type="button"
                                        role="tab" aria-controls="pills-tab4" aria-selected="false">
                                        <div class="categ_card ">
                                            <img src="{{ asset('images/categ-3.png') }}" alt="" class="sec-img" />
                                            <div class="text">
                                                <h6 class="title mb-0"><b>بحري</b></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a href="#" class="nav-link w-100 p-0" id="pills-tab5-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-tab5" type="button"
                                        role="tab" aria-controls="pills-tab5" aria-selected="false">
                                        <div class="categ_card ">
                                            <img src="{{ asset('images/categ-4.png') }}" alt="" class="sec-img" />
                                            <div class="text">
                                                <h6 class="title mb-0"><b>بحري</b></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a href="#" class="nav-link w-100 p-0" id="pills-tab6-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-tab6" type="button"
                                        role="tab" aria-controls="pills-tab6" aria-selected="false">
                                        <div class="categ_card ">
                                            <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                            <div class="text">
                                                <h6 class="title mb-0"><b>بحري</b></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a href="#" class="nav-link w-100 p-0" id="pills-tab7-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-tab7" type="button"
                                        role="tab" aria-controls="pills-tab7" aria-selected="false">
                                        <div class="categ_card ">
                                            <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                            <div class="text">
                                                <h6 class="title mb-0"><b>بحري</b></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Second Categ -->
                        <div class="tab-content mt-5" id="pills-tabContent">
                            <div class="tab-pane fadeInUp" id="pills-tab1" role="tabpanel"
                                aria-labelledby="pills-tab1-tab">
                                <div class="tab_wrapper">
                                    <h6 class="subtitle color-third mb-0"><b> اختر القسم الفرعي الثاني :</b></h6>
                                    <div class="categ_box">
                                        <div class="categ_nav nav nav-pills pb-3 ">
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/categ-2.png') }}" alt=""
                                                            class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/categ-3.png') }}" alt=""
                                                            class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/categ-4.png') }}" alt=""
                                                            class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-tab2" role="tabpanel"
                                aria-labelledby="pills-tab2-tab">
                                <div class="tab_wrapper">
                                    <h6 class="subtitle color-third mb-0"><b> اختر القسم الفرعي الثاني :</b></h6>
                                    <div class="categ_box">
                                        <div class="categ_nav nav nav-pills pb-3 ">
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/categ-2.png') }}" alt=""
                                                            class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/categ-3.png') }}" alt=""
                                                            class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/categ-4.png') }}" alt=""
                                                            class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-tab3" role="tabpanel"
                                aria-labelledby="pills-tab3-tab">
                                <div class="tab_wrapper">
                                    <h6 class="subtitle color-third mb-0"><b> اختر القسم الفرعي الثاني :</b></h6>
                                    <div class="categ_box">
                                        <div class="categ_nav nav nav-pills pb-3 ">
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-3.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/categ-4.png') }}" alt=""
                                                            class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-tab4" role="tabpanel"
                                aria-labelledby="pills-tab4-tab">
                                <div class="tab_wrapper">
                                    <h6 class="subtitle color-third mb-0"><b> اختر القسم الفرعي الثاني :</b></h6>
                                    <div class="categ_box">
                                        <div class="categ_nav nav nav-pills pb-3 ">
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/categ-4.png') }}" alt=""
                                                            class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-tab5" role="tabpanel"
                                aria-labelledby="pills-tab5-tab">
                                <div class="tab_wrapper">
                                    <h6 class="subtitle color-third mb-0"><b> اختر القسم الفرعي الثاني :</b></h6>
                                    <div class="categ_box">
                                        <div class="categ_nav nav nav-pills pb-3 ">
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/categ-4.png') }}" alt=""
                                                            class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-tab6" role="tabpanel"
                                aria-labelledby="pills-tab6-tab">
                                <div class="tab_wrapper">
                                    <h6 class="subtitle color-third mb-0"><b> اختر القسم الفرعي الثاني :</b></h6>
                                    <div class="categ_box">
                                        <div class="categ_nav nav nav-pills pb-3 ">
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/categ-4.png') }}" alt=""
                                                            class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-tab7" role="tabpanel"
                                aria-labelledby="pills-tab7-tab">
                                <div class="tab_wrapper">
                                    <h6 class="subtitle color-third mb-0"><b> اختر القسم الفرعي الثاني :</b></h6>
                                    <div class="categ_box">
                                        <div class="categ_nav nav nav-pills pb-3 ">
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/categ-4.png') }}" alt=""
                                                            class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-1.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nav-item">
                                                <a href="#" class="nav-link w-100 p-0">
                                                    <div class="categ_card ">
                                                        <img src="{{ asset('images/tour-2.png') }}" alt="" class="sec-img" />
                                                        <div class="text">
                                                            <h6 class="title mb-0"><b>اسم القسم </b></h6>
                                                        </div>
                                                    </div>
                                                </a>
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
    </main>
@endsection
