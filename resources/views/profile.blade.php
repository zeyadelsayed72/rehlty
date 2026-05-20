@extends('layout.master')

@section('content')
    <main>
        <!-- Start pg-header  -->
        <section class="pg-header section">
            <div class="container">
                <div class="bread wow fadeInDown">
                    <a href="#" class="link">
                        <img src="images/icons/pg-header-1.svg" alt="" class="icon-18" />
                    </a>
                    <span class="this_pg text-white"> الملف الشخصي </span>
                </div>
                <h1 class="title text-center text-white wow fadeInUp"><b> الملف الشخصي </b></h1>
            </div>
            <img src="images/pg-header-2.png" alt="" class="bg" />
        </section>
        <!-- Start profile-pg -->
        <section class="profile-pg  section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="profile_side mb-4">
                            <div class="prof_data mb-4">
                                <img src="images/avatar-2.png" alt="" class="avatar" />
                                <h5 class="name"><b>عادل رامز</b></h5>
                                <p class="prof_rate fs-5 text-center mb-4">
                                    <img src="images/icons/star.svg" alt="" class="icon me-2" />
                                    <b>4.5</b> <small>( 250 تقييم)</small>
                                </p>
                                <a href="#" class="butn dark_butn w-100 mt-4">إدفع عمولتك</a>
                            </div>
                            <div class="statics_box ">
                                <div class="statics d-flex mb-3">
                                    <img src="images/icons/profile-side-1.svg" alt=""
                                        class="icon me-3 filterPrimary" />
                                    <div class="content">
                                        <h6 class="label"><small>عدد إعلاناتي</small></h6>
                                        <h5 class="num"><b>40</b></h5>
                                    </div>
                                </div>
                                <div class="statics d-flex">
                                    <img src="images/icons/profile-side-2.svg" alt=""
                                        class="icon me-3 filterPrimary" />
                                    <div class="content">
                                        <h6 class="label"><small> عدد مشاهدات الإعلانات </small></h6>
                                        <h5 class="num"><b>21,756</b></h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="profile_side mb-5">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-tab1-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-tab1" type="button" role="tab"
                                    aria-controls="v-pills-tab1" aria-selected="true">
                                    <img src="images/icons/profile_tab_1.svg" alt="" class="icon-18 me-2" /> الملف
                                    الشخصي
                                </button>
                                <button class="nav-link" id="v-pills-tab2-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-tab2" type="button" role="tab"
                                    aria-controls="v-pills-tab2" aria-selected="false">
                                    <img src="images/icons/profile_tab_2.svg" alt="" class="icon-18 me-2" />
                                    إعلاناتي
                                </button>
                                <button class="nav-link" id="v-pills-tab7-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-tab7" type="button" role="tab"
                                    aria-controls="v-pills-tab7" aria-selected="false">
                                    <img src="images/icons/profile_tab_7.png" alt="" class="icon-18 me-2" /> إضافة
                                    اعلان
                                </button>
                                <button class="nav-link" id="v-pills-tab3-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-tab3" type="button" role="tab"
                                    aria-controls="v-pills-tab3" aria-selected="false">
                                    <img src="images/icons/profile_tab_3.svg" alt="" class="icon-18 me-2" /> المفضلة
                                </button>
                                <button class="nav-link" id="v-pills-tab4-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-tab4" type="button" role="tab"
                                    aria-controls="v-pills-tab4" aria-selected="false">
                                    <img src="images/icons/profile_tab_4.svg" alt="" class="icon-18 me-2" />
                                    الرسائل
                                </button>
                                <button class="nav-link" id="v-pills-tab5-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-tab5" type="button" role="tab"
                                    aria-controls="v-pills-tab5" aria-selected="false">
                                    <img src="images/icons/profile_tab_5.svg" alt="" class="icon-18 me-2" />
                                    الإشعارات
                                </button>
                                <button class="nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                    <img src="images/icons/profile_tab_6.svg" alt="" class="icon-18 me-2" />
                                    تسجيل خروج
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
                                                <span class="label"><small>إسم المستخدم</small></span>
                                                <p class="data fs-6 mt-2 mb-0"><b>عادل رامز</b></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="data-group">
                                                <span class="label"><small> الإسم بالكامل </small></span>
                                                <p class="data fs-6 mt-2 mb-0"><b> عادل رامز سعد الدين علوان </b></p>
                                            </div>
                                        </div>
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
                                        <div class="col-md-12">
                                            <button class="butn primary_butn m-auto mt-4 py-3 px-5" data-bs-toggle="modal"
                                                data-bs-target="#profModal">
                                                <i class="fa-solid fa-pencil me-2 ms-0"></i> <b>تعديل</b>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane h-100 fade" id="v-pills-tab2" role="tabpanel"
                                aria-labelledby="v-pills-tab2-tab">
                                <div class="tab_wrapper ad_tab">
                                    <h2 class="tab_title mb-5"><b> إعلاناتي </b></h2>
                                    <ul class="nav nav-pills nav_ads justify-content-center mb-5" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-freeAds-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-freeAds" type="button" role="tab"
                                                aria-controls="pills-freeAds" aria-selected="true">اعلاناتي
                                                العاديه</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-paidAds-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-paidAds" type="button" role="tab"
                                                aria-controls="pills-paidAds" aria-selected="false">اعلاناتي
                                                المميزه</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-freeAds" role="tabpanel"
                                            aria-labelledby="pills-freeAds-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="tour_card">
                                                        <div class="img-box">
                                                            <a href="#">
                                                                <img src="images/tour-2.png" alt=""
                                                                    class="sec-img" />
                                                            </a>
                                                            <!-- <button class="fav_butn"><i class="fa-solid fa-heart"></i></button> -->
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
                                                                        class="fa-regular fa-clock color-secondary me-1"></i>
                                                                    منذ 5 دقائق</p>
                                                            </div>
                                                            <div class="foot">
                                                                <div class="in-flex">
                                                                    <!-- <div class="info inFlex">
                                                                            <img src="images/avatar-1.png" alt="" class="avatr"/>
                                                                            <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                                        </div> -->
                                                                    <h3 class="price mb-0 d-flex align-items-center"><b
                                                                            class="color-primary">250</b> <small>SR</small>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="butns_foot d-flex justify-content-evenly">
                                                            <a href="#">
                                                                <i class="bi bi-trash color-secondary me-1"></i> حذف
                                                            </a>
                                                            <a href="#">
                                                                <i class="bi bi-pencil color-third me-1"></i> تعديل
                                                            </a>
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#updateAdModel">
                                                                <i class="bi bi-arrow-clockwise color-primary me-1"></i>
                                                                تحديث
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="tour_card">
                                                        <div class="img-box">
                                                            <a href="#">
                                                                <img src="images/tour-3.png" alt=""
                                                                    class="sec-img" />
                                                            </a>
                                                            <!-- <button class="fav_butn"><i class="fa-solid fa-heart"></i></button> -->
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
                                                                        class="fa-regular fa-clock color-secondary me-1"></i>
                                                                    منذ 5 دقائق</p>
                                                            </div>
                                                            <div class="foot">
                                                                <div class="in-flex">
                                                                    <!-- <div class="info inFlex">
                                                                            <img src="images/avatar-1.png" alt="" class="avatr"/>
                                                                            <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                                        </div> -->
                                                                    <h3 class="price mb-0 d-flex align-items-center"><b
                                                                            class="color-primary">250</b> <small>SR</small>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="butns_foot d-flex justify-content-evenly">
                                                            <a href="#">
                                                                <i class="bi bi-trash color-secondary me-1"></i> حذف
                                                            </a>
                                                            <a href="#">
                                                                <i class="bi bi-pencil color-third me-1"></i> تعديل
                                                            </a>
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#updateAdModel">
                                                                <i class="bi bi-arrow-clockwise color-primary me-1"></i>
                                                                تحديث
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-paidAds" role="tabpanel"
                                            aria-labelledby="pills-paidAds-tab">
                                            <div class="row mb-5">
                                                <div class="col-md-6">
                                                    <div class="tour_card featured_ad_card">
                                                        <div class="img-box">
                                                            <a href="#">
                                                                <img src="images/tour-1.png" alt=""
                                                                    class="sec-img" />
                                                            </a>
                                                            <button class="print_butn">
                                                                <i class="fa-solid fa-print"></i> طباعة الفاتورة
                                                            </button>

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
                                                                        class="fa-regular fa-clock color-secondary me-1"></i>
                                                                    منذ 5 دقائق</p>
                                                            </div>
                                                            <div class="foot">
                                                                <div class="in-flex">
                                                                    <!-- <div class="info inFlex">
                                                                            <img src="images/avatar-1.png" alt="" class="avatr"/>
                                                                            <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                                        </div> -->
                                                                    <h3 class="price mb-0 d-flex align-items-center"><b
                                                                            class="color-primary">250</b> <small>SR</small>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="butns_foot d-flex justify-content-evenly">
                                                            <a href="#">
                                                                <i class="bi bi-trash color-secondary me-1"></i> حذف
                                                            </a>
                                                            <a href="#">
                                                                <i class="bi bi-pencil color-third me-1"></i> تعديل
                                                            </a>
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#updateAdModel">
                                                                <i class="bi bi-arrow-clockwise color-primary me-1"></i>
                                                                تحديث
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="tour_card featured_ad_card">
                                                        <div class="img-box">
                                                            <a href="#">
                                                                <img src="images/tour-3.png" alt=""
                                                                    class="sec-img" />
                                                            </a>
                                                            <!-- <button class="fav_butn"><i class="fa-solid fa-heart"></i></button> -->
                                                            <button class="print_butn">
                                                                <i class="fa-solid fa-print"></i> طباعة الفاتورة
                                                            </button>
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
                                                                        class="fa-regular fa-clock color-secondary me-1"></i>
                                                                    منذ 5 دقائق</p>
                                                            </div>
                                                            <div class="foot">
                                                                <div class="in-flex">
                                                                    <!-- <div class="info inFlex">
                                                                            <img src="images/avatar-1.png" alt="" class="avatr"/>
                                                                            <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                                        </div> -->
                                                                    <h3 class="price mb-0 d-flex align-items-center"><b
                                                                            class="color-primary">250</b> <small>SR</small>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="butns_foot d-flex justify-content-evenly">
                                                            <a href="#">
                                                                <i class="bi bi-trash color-secondary me-1"></i> حذف
                                                            </a>
                                                            <a href="#">
                                                                <i class="bi bi-pencil color-third me-1"></i> تعديل
                                                            </a>
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#updateAdModel">
                                                                <i class="bi bi-arrow-clockwise color-primary me-1"></i>
                                                                تحديث
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane h-100 fade" id="v-pills-tab7" role="tabpanel"
                                aria-labelledby="v-pills-tab7-tab">
                                <div class="tab_wrapper ad_tab">
                                    <h2 class="tab_title mb-5"><b> إضافة إعلان </b></h2>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-4">
                                                    <label class="label d-block mb-3"><b>نوع الإعلان</b> <span
                                                            class="required_star color-secondary">*</span> </label>
                                                    <div class="inFlex">
                                                        <div class="form-check me-5">
                                                            <input class="form-check-input" type="radio"
                                                                name="adsRadio" id="adsRadio1">
                                                            <label class="form-check-label" for="adsRadio1">
                                                                إعلان عادي
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="adsRadio" value="paiedAd" id="adsRadio2">
                                                            <label class="form-check-label" for="adsRadio2">
                                                                إعلان مميز
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <p class="p_paiedRadio mb-0">
                                                        <small><i
                                                                class="fa-solid fa-triangle-exclamation color-secondary me-2"></i>
                                                            يرجي العلم ان رسوم سعر الاعلان المميز 00 ريال سعودي </small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="row align-items-center">
                                                    <div class="col-4">
                                                        <div class="form-group mb-4">
                                                            <label class="label d-block mb-3"><b> ظهور السعر </b> <span
                                                                    class="required_star color-secondary">*</span> </label>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="priceCheck"
                                                                    onclick="priceChecked()" checked>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-8" id="priceGroup">
                                                        <div class="form-group mb-4">
                                                            <input class="form-control" placeholder="السعر *"
                                                                type="text" />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="إسم الإعلان باللغة العربية *"
                                                        type="text" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control"
                                                        placeholder="إسم الإعلان باللغة الانجليزية *" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="وصف الإعلان باللغة العربية" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="وصف الإعلان باللغة الانجليزيه" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control form-select">
                                                        <option selected disabled>التصنيف</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control form-select">
                                                        <option selected disabled>تصنيف فرعي أول</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control form-select">
                                                        <option selected disabled>تصنيف فرعي ثاني</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control form-select">
                                                        <option selected disabled>مدينة الإعلان</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="images_box">
                                                    <div class="form-group  avatar-upload">
                                                        <div class="avatar-edit">
                                                            <input type='file' id="imageUpload"
                                                                accept=".png, .jpg, .jpeg" />
                                                            <label class="label w-100" for="imageUpload">
                                                                <strong> إرفاق الصورة الرئيسيه للاعلان <span
                                                                        class="required_star color-secondary">*</span>
                                                                </strong>
                                                                <div class="uploading_box upload-icon2 avatar-preview">
                                                                    <div id="imagePreview">
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="images_box">
                                                    <div class="form-group addd_images">
                                                        <div>
                                                            <input id="files" type="file" multiple />
                                                            <label class="label w-100" for="files">
                                                                <strong> إرفاق صور اخرى للاعلان <small>(اختياري)</small>
                                                                </strong>
                                                                <div class="uploading_box upload-icon1 border_items ">
                                                                    <div id="sortableImgThumbnailPreview">
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label d-block mb-3"><b> تحديد الموقع علي الخريطة
                                                        </b></label>
                                                    <iframe width="100%" height="300" frameborder="0" scrolling="no"
                                                        marginheight="0" marginwidth="0"
                                                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                                            href="https://www.maps.ie/distance-area-calculator.html">measure
                                                            acres/hectares on map</a></iframe>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="label d-block mb-3"><b> بيانات التواصل </b></label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="whatsCheck">
                                                                <label class="form-check-label" for="whatsCheck">
                                                                    ظهور رقم الواتساب
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="phoneCheck">
                                                                <label class="form-check-label" for="phoneCheck">
                                                                    ظهور رقم الجوال
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="contactCheck3">
                                                                <label class="form-check-label" for="contactCheck3">
                                                                    تفعيل الرسائل الخاصه
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" id="whatsCheckInput">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="رقم الواتساب"
                                                                type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" id="phoneCheckInput">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="رقم الجوال "
                                                                type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="butn primary_butn m-auto mt-4 py-3 px-5" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#commissionModal">
                                                    <i class="fa-solid fa-plus me-2 ms-0"></i> <b>اضافه</b>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane h-100 fade" id="v-pills-tab3" role="tabpanel"
                                aria-labelledby="v-pills-tab3-tab">
                                <div class="tab_wrapper fav_tab">
                                    <h2 class="tab_title mb-5"><b> المفضله </b></h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="tour_card">
                                                <div class="img-box">
                                                    <a href="#">
                                                        <img src="images/tour-1.png" alt="" class="sec-img" />
                                                    </a>
                                                    <button class="fav_butn active"><i
                                                            class="fa-solid fa-heart"></i></button>
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
                                                            <div class="info inFlex">
                                                                <img src="images/avatar-1.png" alt=""
                                                                    class="avatr" />
                                                                <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                            </div>
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
                                                        <img src="images/tour-2.png" alt="" class="sec-img" />
                                                    </a>
                                                    <button class="fav_butn active"><i
                                                            class="fa-solid fa-heart"></i></button>
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
                                                            <div class="info inFlex">
                                                                <img src="images/avatar-1.png" alt=""
                                                                    class="avatr" />
                                                                <h6 class="name mb-0"><b>Saad Elwan</b></h6>
                                                            </div>
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
                            <div class="tab-pane h-100 fade" id="v-pills-tab4" role="tabpanel"
                                aria-labelledby="v-pills-tab4-tab">
                                <div class="tab_wrapper msgs_tab">
                                    <div class="in-flex mb-5">
                                        <h2 class="tab_title "><b> الرسائل </b></h2>
                                        <!-- <a href="#" class="butn secondary_butn" data-bs-toggle="modal" data-bs-target="#newMsgModal">
                                                <i class="fa-solid fa-plus me-2 ms-0"></i> <b>رسالة جديدة</b>
                                            </a> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="chats_wrapper">
                                                <div class="item d-flex justify-content-between ">
                                                    <div class="d-flex">
                                                        <img src="images/avatar-1.png" alt="" class="avatar" />
                                                        <div class="content">
                                                            <h5 class="name">Magda Ali</h5>
                                                            <p class="msg_p mb-0">هل يوجد أي رحلات متوفرة حاليا؟</p>
                                                        </div>
                                                    </div>

                                                    <span class="date">5:15 PM</span>
                                                </div>
                                                <div class="item d-flex justify-content-between active">
                                                    <div class="d-flex">
                                                        <img src="images/avatar-2.png" alt="" class="avatar" />
                                                        <div class="content">
                                                            <h5 class="name">سامي عبد الحق</h5>
                                                            <p class="msg_p mb-0">هل يوجد أي رحلات متوفرة حاليا؟</p>
                                                        </div>
                                                    </div>
                                                    <span class="date">5:15 PM</span>
                                                    <span class="num_msgs">2</span>
                                                </div>
                                                <div class="item d-flex justify-content-between ">
                                                    <div class="d-flex">
                                                        <img src="images/header-1.png" alt="" class="avatar" />
                                                        <div class="content">
                                                            <h5 class="name">Magda Ali</h5>
                                                            <p class="msg_p mb-0">هل يوجد أي رحلات متوفرة حاليا؟</p>
                                                        </div>
                                                    </div>

                                                    <span class="date">5:15 PM</span>
                                                </div>
                                                <div class="item d-flex justify-content-between ">
                                                    <div class="d-flex">
                                                        <img src="images/tour-1.png" alt="" class="avatar" />
                                                        <div class="content">
                                                            <h5 class="name">Magda Ali</h5>
                                                            <p class="msg_p mb-0">هل يوجد أي رحلات متوفرة حاليا؟</p>
                                                        </div>
                                                    </div>

                                                    <span class="date">5:15 PM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="chatbox">
                                                <div class="chat_ad">
                                                    <p class="p">يتم التواصل معك بخصوص الاعلان</p>
                                                    <h6 class="rate_title mb-0">
                                                        <img src="images/categ-1.png" alt="" class="sm_img">
                                                        <b>اسم الاعلان</b>
                                                    </h6>
                                                </div>
                                                <div class="chat_header inFlex">
                                                    <img src="images/avatar-2.png" alt="" class="avatar" />
                                                    <div class="content">
                                                        <h5 class="name"><b>سامي عبد الحق</b></h5>
                                                        <!-- <p class="activity mb-0 d-flex align-items-center">
                                                                <span class="circle active"></span> Online
                                                            </p> -->
                                                    </div>
                                                </div>
                                                <div class="chat_body">
                                                    <div class="day text-center">
                                                        <span>اليوم</span>
                                                    </div>
                                                    <div class="l_msg">
                                                        <div class="msg_cnt">
                                                            مرحبا
                                                        </div>
                                                        <img src="images/avatar-1.png" alt="" class="avatar">
                                                        <span class="date">3:15 PM</span>
                                                    </div>
                                                    <div class="l_msg">
                                                        <div class="msg_cnt">
                                                            Iلقد قضينا يوم جميل جدا في الرحلة
                                                        </div>
                                                        <img src="images/avatar-1.png" alt="" class="avatar">
                                                        <span class="date">3:15 PM</span>
                                                    </div>
                                                    <div class="r_msg">
                                                        <img src="images/avatar-2.png" alt="" class="avatar">
                                                        <div class="msg_cnt">
                                                            مرحبا حبيبي لقد وصلني إستفسارك عن العطل الأخير ماذا ينقصك
                                                        </div>
                                                        <span class="date">3:17 PM</span>
                                                    </div>
                                                    <!-- <div class="r_msg">
                                                            <img src="images/avatar-2.png" alt="" class="avatar">
                                                            <div class="msg_cnt">
                                                                <div class="imgs d-flex align-items-center flex-wrap">
                                                                    <a href="images/header-1.png" data-fancybox="images">
                                                                        <img src="images/header-1.png" alt="" class="chat-img">
                                                                    </a>
                                                                    <a href="images/tour-1.png" data-fancybox="images">
                                                                        <img src="images/tour-1.png" alt="" class="chat-img">
                                                                    </a>
                                                                    <a href="images/tour-3.png" data-fancybox="images">
                                                                        <img src="images/tour-3.png" alt="" class="chat-img">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <span class="date">3:17 PM</span>
                                                        </div> -->
                                                </div>
                                                <span class="typing">سامي يكتب الآن...</span>
                                                <div class="chat_foot">
                                                    <form>
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="إكتب رسالتك هنا ..."
                                                                type="text" />
                                                        </div>
                                                        <div class="butns d-flex">
                                                            <!-- <button class="butn secondary_border_butn sm_butn mx-1"><i class="fa-solid fa-link"></i></button> -->
                                                            <button class="butn primary_butn sm_butn mx-1"><i
                                                                    class="fa-solid fa-paper-plane"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane h-100 fade" id="v-pills-tab5" role="tabpanel"
                                aria-labelledby="v-pills-tab5-tab">
                                <div class="tab_wrapper noti_tab">
                                    <h2 class="tab_title mb-5"><b> الإشعارات </b></h2>
                                    <div class="noti_card in-flex">
                                        <div class="d-flex">
                                            <img src="images/icons/notification-1.svg" alt=""
                                                class="icon filterPrimary" />
                                            <div class="content">
                                                <h6 class="title"><b>عنوان التنبيه</b></h6>
                                                <p class="p mb-0">يوجد تفاصيل للتنبيه هنا لوصول إشعار جديد</p>
                                            </div>
                                        </div>
                                        <span class="date">6 Minutes Ago </span>
                                    </div>
                                    <div class="noti_card in-flex">
                                        <div class="d-flex">
                                            <img src="images/icons/notification-1.svg" alt=""
                                                class="icon filterSecondary" />
                                            <div class="content">
                                                <h6 class="title"><b>عنوان التنبيه</b></h6>
                                                <p class="p mb-0">يوجد تفاصيل للتنبيه هنا لوصول إشعار جديد</p>
                                            </div>
                                        </div>
                                        <span class="date">6 Minutes Ago </span>
                                    </div>
                                    <div class="noti_card in-flex">
                                        <div class="d-flex">
                                            <img src="images/icons/notification-1.svg" alt=""
                                                class="icon filterPrimary" />
                                            <div class="content">
                                                <h6 class="title"><b>عنوان التنبيه</b></h6>
                                                <p class="p mb-0">يوجد تفاصيل للتنبيه هنا لوصول إشعار جديد</p>
                                            </div>
                                        </div>
                                        <span class="date">6 Minutes Ago </span>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modals -->
        <div class="modal profileModal fade" id="profModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-11 m-auto pb-5">
                        <h2 class="title text-center mb-5"><b>تعديل الملف الشخصي </b></h2>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="profile-avatar mb-4" id="imagePreview"
                                        style="background-image: url('images/avatar-2.png');">
                                        <input type="file" class="custom-file-input" id="imageUpload" required=""
                                            capture="">
                                        <button><i class="far fa-edit"></i></button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="in-flex">
                                            <label class="label mb-2">إسم المستخدم</label>
                                            <button class="edit_butn"><i class="far fa-edit"></i></button>
                                        </div>
                                        <input class="form-control" placeholder="اكتب هنا ..." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="in-flex">
                                            <label class="label mb-2"> الإسم بالكامل </label>
                                            <button class="edit_butn"><i class="far fa-edit"></i></button>
                                        </div>
                                        <input class="form-control" placeholder="اكتب هنا ..." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="in-flex">
                                            <label class="label mb-2"> البريد الالكتروني </label>
                                            <button class="edit_butn"><i class="far fa-edit"></i></button>
                                        </div>
                                        <input class="form-control" placeholder="اكتب هنا ..." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="in-flex">
                                            <label class="label mb-2">إسم المستخدم</label>
                                            <button class="edit_butn"><i class="far fa-edit"></i></button>
                                        </div>
                                        <label class="label mb-2"> رقم الجوال </label>
                                        <input class="form-control" placeholder="اكتب هنا ..." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="in-flex">
                                            <label class="label mb-2"> كلمة المرور </label>
                                            <button class="edit_butn"><i class="far fa-edit"></i></button>
                                        </div>
                                        <input class="form-control" placeholder="*****" type="password" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="in-flex">
                                            <label class="label mb-2"> إعادة كلمة المرور </label>
                                            <button class="edit_butn"><i class="far fa-edit"></i></button>
                                        </div>
                                        <input class="form-control" placeholder="*****" type="password" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="butn primary_butn m-auto mt-4 py-3 px-5">
                                        <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b>حفظ</b>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-11 m-auto pb-5">
                        <img src="images/icons/mail.svg" alt="" class="modal_img" />
                        <h2 class="title text-center mb-5"><b> تم تغير البريد الالكتروني بنجاح </b></h2>
                        <p class="det text-center mb-2">
                            من فضلك قم بإختيار البريد الإلكتروني المرسل علي البريد المدخل
                        </p>
                        <p class="det text-center"><b>Adel.Ramz@gmail.com</b></p>
                        <button class="butn primary_butn m-auto mt-4 py-3 px-5">
                            <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b>حسنا</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="phoneModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-11 m-auto pb-5">
                        <img src="images/icons/phone.svg" alt="" class="modal_img" />
                        <h2 class="title text-center mb-5"><b> تم تغير رقم الجوال بنجاح </b></h2>
                        <p class="det text-center mb-2">
                            من فضلك قم بإختيار البريد الإلكتروني المرسل علي البريد المدخل
                        </p>
                        <p class="det text-center"><b>+966-54121588</b></p>
                        <button class="butn primary_butn m-auto mt-4 py-3 px-5">
                            <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b>حسنا</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="commissionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-11 m-auto pb-5">
                        <img src="images/commision-2.svg" alt="" class="modal_img" />
                        <h2 class="title text-center mb-5"><b> عمولة الموقع</b></h2>
                        <p class="det text-center mb-2">
                            ستكون عمولة الموقه محسوبة بنسبة
                        </p>
                        <p class="det text-center"><b>12 %</b></p>
                        <form>
                            <div class="form-check w-fit m-auto">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    موافق
                                </label>
                            </div>
                        </form>
                        <button class="butn primary_butn m-auto mt-4 py-3 px-5">
                            <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b>التالي</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updateAdModel" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-11 m-auto pb-5">
                        <img src="images/icons/ad-1.svg" alt="" class="modal_img" />
                        <h3 class="title text-center mb-5"><b>هل تود ان يكون الاعلان ( عادي / مميز ) ؟</b></h3>
                        <form>
                            <div class="inFlex justify-content-center mb-5">
                                <div class="form-check me-5">
                                    <input class="form-check-input" type="radio" name="updateAdsRadio"
                                        id="updateAdsRadio1">
                                    <label class="form-check-label" for="updateAdsRadio1">
                                        إعلان عادي
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="updateAdsRadio"
                                        id="updateAdsRadio2">
                                    <label class="form-check-label" for="updateAdsRadio2">
                                        إعلان مميز
                                    </label>
                                </div>
                            </div>

                        </form>
                        <button class="butn primary_butn m-auto mt-4 py-3 px-5">
                            <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b>حفظ</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-11 m-auto pb-5">
                        <img src="images/icons/logout.svg" alt="" class="modal_img" />
                        <h2 class="title text-center mb-5"><b> هل تود تسجيل الخروج؟ </b></h2>
                        <div class="butns d-flex justify-content-center mt-4">
                            <button class="butn primary_butn mx-2 py-3 px-5">
                                <b>لا</b>
                            </button>
                            <button class="butn secondary_border_butn mx-2 py-3 px-5">
                                <b>نعم</b>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updateMailModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-11 m-auto pb-5">
                        <img src="images/icons/mail.svg" alt="" class="modal_img" />
                        <h2 class="title text-center mb-4"><b> تم تغير البريد الالكتروني بنجاح </b></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updatePhoneModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-11 m-auto pb-5">
                        <img src="images/icons/phone.svg" alt="" class="modal_img" />
                        <h2 class="title text-center mb-4"><b> تم تغير رقم الجوال بنجاح </b></h2>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
