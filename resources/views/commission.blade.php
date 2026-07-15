@extends('layout.master')

@section('title' , 'حساب العموله')

@section('content')
    <main>
        <!-- Start pg-header  -->
        <section class="pg-header section">
            <div class="container">
                <div class="bread wow fadeInDown">
                    <a href="#" class="link">
                        <img src="{{ asset('images/icons/pg-header-1.svg') }}" alt="" class="icon-18" />
                    </a>
                    <span class="this_pg text-white"> حساب العموله </span>
                </div>
                <h1 class="title text-center text-white wow fadeInUp"><b> حساب العموله </b></h1>
            </div>
            <img src="{{ asset('images/pg-header-1.png') }}" alt="" class="bg" />
        </section>
        <!-- Start commission-pg -->
        <section class="commission-pg section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/commision-1.svg') }}" alt="" class="sec-img" />
                    </div>
                    <div class="col-lg-6">
                        <div class="text-box">
                            <h1 class="title mb-4"><b>حساب العمولة بشكل بسيط</b></h1>
                            <p class="p">
                                موقع لتقديم الخدمات الترفيهية والسياحية عن طريق قيام الاعضاء بعرض اعلاناتهم، ويمكن
                                للمستخدمين تقييم الاعلانات و التعليق علي الاعلانات و اضافة الاعلانات للمفضلة
                                هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما،
                                عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <form>
                            <div class="com_input_wrapper">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <span>ادخل سعر البيع</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" placeholder="1500">
                                    </div>
                                </div>
                            </div>
                            <div class="com_input_wrapper disabled-input-wrapper">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <span>العمولة المستحقة</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" id="calval" value="25%" disabled="">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="alert_p mb-4">
                            <small>
                                نسبة عمولة الموقع ( 5ريال اذا كان المبلغ اقل من 500 ريال - 1% في حالة كان المبلغ 500 ريال او
                                اكثر ) يتم دفعها في حالة الاعلان المميز او العادي
                            </small>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <div class="img-box">
                            <img src="{{ asset('images/commision-2.svg') }}" alt="" class="sec-img" />
                            <span class="result color-primary"><b>25.5 %</b></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- categ Modal -->
        <div class="modal fade" id="onlinePayModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-12 m-auto pb-5">
                        <img src="{{ asset('images/commision-1.svg') }}" alt="" class="modal_img" />
                        <h2 class="title text-center mb-5"><b> دفع أونلاين </b></h2>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="  رقم الاعلان ..." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder=" المبلغ   ..." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="butn primary_butn m-auto mt-4 py-3 px-5">
                                        <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b>ادفع</b>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Start bank-acc -->
        <section class="bank-acc section">
            <div class="container">
                <div class="sec-head text-center mb-5">
                    <h1 class="sec-title m-auto mb-2"><b> طريقة الدفع </b></h1>
                </div>
                <h4 class="pay_title text-center fw-bold mb-5">الطريقة الأولى: <span class="color-secondary">البطاقات
                        البنكيه</span></h4>
                <button class="butn primary_butn m-auto my-5 py-3 px-5 fs-6" type="button" data-bs-toggle="modal"
                    data-bs-target="#onlinePayModal"><b>دفع اونلاين</b></button>

                <h4 class="pay_title text-center fw-bold mb-5">الطريقة الثانيه: <span class="color-secondary"> التحويل
                        البنكي </span></h4>

                <div class="swiper-container banks-swiper pb-5">
                    <div class="swiper-wrapper pb-4">
                        <div class="swiper-slide">
                            <div class="bank_card">
                                <img src="{{ asset('images/icons/bank-1.svg') }}" alt="" class="bank_logo" />
                                <div class="card-body py-4 px-4">
                                    <h5 class="bank_name text-center"><b>SNB Bank</b></h5>
                                    <div class="row mt-3 justify-content-around">
                                        <div class="col-5">
                                            <span class="label"><small>رقم الحساب</small></span>
                                            <p class="p mt-1"><small>15454887A55</small></p>
                                        </div>
                                        <div class="col-5">
                                            <span class="label"><small> أيبان </small></span>
                                            <div class="in-flex">
                                                <p class="p mt-1"><small>15454887A55</small></p>
                                                <button class="copy_butn"><i class="fa-regular fa-copy"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bank_card">
                                <img src="{{ asset('images/icons/bank-2.svg') }}" alt="" class="bank_logo" />
                                <div class="card-body py-4 px-4">
                                    <h5 class="bank_name text-center"><b>ADCB Bank</b></h5>
                                    <div class="row mt-3 justify-content-around">
                                        <div class="col-5">
                                            <span class="label"><small>رقم الحساب</small></span>
                                            <p class="p mt-1"><small>15454887A55</small></p>
                                        </div>
                                        <div class="col-5">
                                            <span class="label"><small> أيبان </small></span>
                                            <div class="in-flex">
                                                <p class="p mt-1"><small>15454887A55</small></p>
                                                <button class="copy_butn"><i class="fa-regular fa-copy"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bank_card">
                                <img src="{{ asset('images/icons/bank-3.svg') }}" alt="" class="bank_logo" />
                                <div class="card-body py-4 px-4">
                                    <h5 class="bank_name text-center"><b>ATB Bank</b></h5>
                                    <div class="row mt-3 justify-content-around">
                                        <div class="col-5">
                                            <span class="label"><small>رقم الحساب</small></span>
                                            <p class="p mt-1"><small>15454887A55</small></p>
                                        </div>
                                        <div class="col-5">
                                            <span class="label"><small> أيبان </small></span>
                                            <div class="in-flex">
                                                <p class="p mt-1"><small>15454887A55</small></p>
                                                <button class="copy_butn"><i class="fa-regular fa-copy"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- Start exchange-sec -->
        <section class="exchange-sec section">
            <div class="container">
                <div class="sec-head text-center mb-5">
                    <h1 class="sec-title m-auto mb-2"><b> نموذج تحويل العملة </b></h1>
                    <p class="det">
                        <small>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </small>
                    </p>
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" placeholder="الاسم ..." type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" placeholder="المبلغ ..." type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" placeholder="إسم البنك ..." type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" placeholder="رقم الهاتف ..." type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" placeholder="رقم الإعلان ..." type="text" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" placeholder="تاريخ التحويل ..." type="date" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" rows="11" placeholder="الملاحظات ..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="images_box">
                                <div class="form-group  avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label class="label w-100" for="imageUpload">
                                            <strong> إرفاق صورة التحويل <span
                                                    class="required_star color-secondary">*</span> </strong>
                                            <div class="uploading_box upload-icon2 avatar-preview mt-0">
                                                <div id="imagePreview">
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <button class="butn primary_butn m-auto mt-4 py-3 px-5" type="button" data-bs-toggle="modal"
                        data-bs-target="#payModal">
                        <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b>إرسال</b>
                    </button>
                </form>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="payModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-11 m-auto pb-5">
                        <img src="{{ asset('images/commision-1.svg') }}" alt="" class="modal_img" />
                        <h2 class="title text-center mb-5"><b>دفع أونلاين</b></h2>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="رقم الإعلان ..." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="المبلغ ..." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="butn primary_butn m-auto mt-4 py-3 px-5">
                                        <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b>ادفع</b>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
