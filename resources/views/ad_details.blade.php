@extends('layout.master')

@section('title' , 'أضف اعلان')

@section('content')
    <main>
        <!-- Start pg-header  -->
        <section class="pg-header section">
            <div class="container">
                <div class="bread wow fadeInDown">
                    <a href="#" class="link">
                        <img src="{{ asset('images/icons/pg-header-1.svg') }}" alt="" class="icon-18" />
                    </a>
                    <span class="this_pg text-white"> اضف اعلان </span>
                </div>
                <h1 class="title text-center text-white wow fadeInUp"><b> اضف اعلان </b></h1>
            </div>
            <img src="{{ asset('images/header-2.jpg') }}" alt="" class="bg" />
        </section>
        <!-- Start profile-pg -->
        <section class="profile-pg section">
            <div class="container">
                <div class="tab_wrapper ad_tab">
                    <div class="sec-head text-center mb-5">
                        <h1 class="sec-title m-auto mb-2"><b> إضافة إعلان </b></h1>
                        <p class="det">
                            <small>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </small>
                        </p>
                    </div>
                    <form method="POST" action="{{ route('ads') }}" enctype="multipart/form-data">
    @csrf

    <div class="row col-md-11 m-auto">

        <!-- السعر -->
        <div class="col-md-6">
            <div class="form-group mb-4">
                <input class="form-control" name="price" placeholder="السعر *" type="text" />
            </div>
        </div>

        <!-- اسم الإعلان عربي -->
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" name="title_ar" placeholder="إسم الإعلان باللغة العربية *" type="text" />
            </div>
        </div>

        <!-- اسم الإعلان إنجليزي -->
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" name="title_en" placeholder="إسم الإعلان باللغة الانجليزية *" type="text" />
            </div>
        </div>

        <!-- وصف عربي -->
        <div class="col-md-6">
            <div class="form-group">
                <textarea class="form-control" name="description_ar" placeholder="وصف الإعلان باللغة العربية" rows="5"></textarea>
            </div>
        </div>

        <!-- وصف إنجليزي -->
        <div class="col-md-6">
            <div class="form-group">
                <textarea class="form-control" name="description_en" placeholder="وصف الإعلان باللغة الانجليزية" rows="5"></textarea>
            </div>
        </div>

        <!-- صورة -->
        <div class="col-md-6">
            <div class="form-group">
                <input type="file" name="image" class="form-control" />
            </div>
        </div>

        <!-- رقم الواتساب -->
        <div class="col-md-6">
            <input class="form-control" name="whatsapp" placeholder="رقم الواتساب" type="text" />
        </div>

        <!-- رقم الهاتف -->
        <div class="col-md-6">
            <input class="form-control" name="phone" placeholder="رقم الجوال" type="text" />
        </div>

        <!-- زر الإرسال -->
        <div class="col-md-12 text-center">
            <button class="butn primary_butn m-auto mt-4 py-3 px-5" type="submit">
                <b>اضافة</b>
            </button>
        </div>

    </div>
</form>
                    {{-- <form>
                        <div class="row col-md-11 m-auto">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="label d-block mb-3"><b>نوع الإعلان</b> <span
                                            class="required_star color-secondary">*</span> </label>
                                    <div class="inFlex">
                                        <div class="form-check me-5">
                                            <input class="form-check-input" type="radio" name="adsRadio" id="adsRadio1">
                                            <label class="form-check-label" for="adsRadio1">
                                                إعلان عادي
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="adsRadio" value="paiedAd"
                                                id="adsRadio2">
                                            <label class="form-check-label" for="adsRadio2">
                                                إعلان مميز
                                            </label>
                                        </div>
                                    </div>
                                    <p class="p_paiedRadio mb-0">
                                        <small><i class="fa-solid fa-triangle-exclamation color-secondary me-2"></i> يرجي
                                            العلم ان رسوم سعر الاعلان المميز 00 ريال سعودي </small>
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
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="priceCheck" onclick="priceChecked()" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8" id="priceGroup">
                                        <div class="form-group mb-4">
                                            <input class="form-control" placeholder="السعر *" type="text" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="إسم الإعلان باللغة العربية *" type="text" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="إسم الإعلان باللغة الانجليزية *"
                                        type="text" />
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
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label class="label w-100" for="imageUpload">
                                                <strong> إرفاق الصورة الرئيسيه للاعلان <span
                                                        class="required_star color-secondary">*</span> </strong>
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
                                                <strong> إرفاق صور اخرى للاعلان <small>(اختياري)</small> </strong>
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
                                    <label class="label d-block mb-3"><b> تحديد الموقع علي الخريطة </b></label>
                                    <iframe width="100%" height="300" frameborder="0" scrolling="no"
                                        marginheight="0" marginwidth="0"
                                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                            href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares
                                            on map</a></iframe>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="label d-block mb-3"><b> بيانات التواصل </b></label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="whatsCheck">
                                                <label class="form-check-label" for="whatsCheck">
                                                    ظهور رقم الواتساب
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="phoneCheck">
                                                <label class="form-check-label" for="phoneCheck">
                                                    ظهور رقم الجوال
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="contactCheck3">
                                                <label class="form-check-label" for="contactCheck3">
                                                    تفعيل الرسائل الخاصه
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="whatsCheckInput">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="رقم الواتساب" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="phoneCheckInput">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="رقم الجوال " type="text" />
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
                    </form> --}}
                </div>
            </div>
        </section>

    </main>
@endsection
